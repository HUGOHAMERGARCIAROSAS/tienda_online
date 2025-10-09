document.addEventListener('DOMContentLoaded', function () {
    const { loadExternalSource, loadFeatures } = prestashop.themeSelectors.alysum.utils;
    const loaderClass = 'combination-loading';

    const featuresMap = {
        productSpin: pktheme.pp_updownbuttons,
    };

    loadFeatures(featuresMap).catch((e) => console.info(e));

    const addPSEventListeneres = () => {
        prestashop.on('updateProduct', () => {
            document.body.classList.add(loaderClass);
            setTimeout(() => document.body.classList.remove(loaderClass), 1000);
        });

        prestashop.on('updatedProduct', (event) => {
            queueMicrotask(() => {
                initZoomper();
                updateReferenceCode();
                updateProductDisplay(event);
                document.body.classList.remove(loaderClass);
            });
        });
    };

    const updateProductDisplay = (event) => {
        if (event && event.product_minimal_quantity) {
            const minimalProductQuantity = parseInt(event.product_minimal_quantity, 10);
            const quantityInputSelector = prestashop.selectors.quantityWanted;
            const quantityInput = document.querySelector(quantityInputSelector);

            if (quantityInput) {
                // Dispatch custom event to update touchspin settings
                const updateEvent = new CustomEvent('touchspin.updatesettings', {
                    detail: {
                        min: minimalProductQuantity,
                    },
                });
                quantityInput.dispatchEvent(updateEvent);
            }
        }

        // Get the active tab element
        const activeTabElement = document.querySelector(prestashop.themeSelectors.product.activeTabs);
        if (activeTabElement) {
            const href = activeTabElement.getAttribute('href');
            if (href) {
                const targetTab = document.querySelector(href);
                if (targetTab) {
                    targetTab.classList.add('active');
                    targetTab.classList.remove('fade');
                }
            }
        }

        // Replace the images modal
        const imagesModal = document.querySelector(prestashop.themeSelectors.product.imagesModal);
        if (imagesModal && event.product_images_modal) {
            imagesModal.outerHTML = event.product_images_modal;
        }
    };

    const updateReferenceCode = () => {
        const source = document.querySelector('.product-reference span');
        const target = document.querySelector('.product-reference-top span');
        if (source?.textContent) {
            target.textContent = source.textContent;
        }
    };

    const initZoomper = async () => {
        const disableMobileInnnerZoom = false;

        if (disableMobileInnnerZoom && prestashop.responsive.mobile && pktheme.pp_innnerzoom) {
            return false;
        }

        try {
            await loadExternalSource(
                `${prestashop.urls.js_url}libs/jquery.zoom.min.js`,
                'script',
                'pk-jqueryzoom'
            );
        } catch (error) {
            return console.warn('Unable to load image zoom');
        }

        const initZoomElement = () => {
            queueMicrotask(() => {
                const url = document.querySelector('.js-qv-product-cover')?.getAttribute('src');
                url && $('.prod-image-zoom').trigger('zoom.destroy').zoom({ url });
            });
        };

        // init zoom on load
        initZoomElement();

        // init zoom on click
        document
            .querySelectorAll('.js-qv-product-images img')
            .forEach((thumb) => thumb.addEventListener('click', initZoomElement));
    };

    const updateSources = (img, sources) => {
        if (!sources || !img) return;

        const parent = img.parentElement;
        if (!parent) return;

        const sourceElements = parent.querySelectorAll('source');

        img.setAttribute('src', sources.jpg);

        sourceElements.forEach((source) => {
            const type = source.getAttribute('type');
            if (type === 'image/webp' && sources.webp !== undefined) {
                source.setAttribute('srcset', sources.webp);
            }
            if (type === 'image/avif' && sources.avif !== undefined) {
                source.setAttribute('srcset', sources.avif);
            }
        });
    };

    const addThumbEventListeners = () => {
        const thumbElements = document.querySelectorAll(
            prestashop.themeSelectors.product.thumbContainer + ' img'
        );
        thumbElements.forEach((thumb) => {
            thumb.addEventListener('click', (event) => {
                const img = event.target;
                const sources = img.dataset['image-large-sources']
                    ? JSON.parse(img.dataset['image-large-sources'])
                    : null;
                const target = document.querySelector(prestashop.themeSelectors.product.cover);
                updateSources(target, sources);
            });
        });
    };

    initZoomper();
    addPSEventListeneres();
    addThumbEventListeners();
});
