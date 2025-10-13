// ver. 9.1.0
const pkBreakpoints = pktheme.breakpoints;
const isTouchDevice = 'ontouchstart' in document.documentElement;
const selectors = {
    ddContainer: '.dd_container',
    buttonQuickView: '.quick-view',
    buttonAddToCart: '.product-miniature .add-to-cart',
    pkSidebar: '.pksidebar',
    pkSlick: '.pk-slick-carousel',
};
const classes = {
    // inProgress: 'in_progress',
    inProgress: 'a',
    ddHover: 'dd_el_hover',
    modalOpen: 'modal-open',
    active: 'active',
    oh: 'oh',
    hidden: 'hidden',
    relative: 'relative',
    loaded: 'loaded',
};
const assets = {
    js_url: `js/`,
    css_url: `css/`,
};

const loadExternalSource = (url, type, id) => {
    if (document.getElementById(id)) {
        return Promise.resolve(`File ${id} already loaded`);
    }
    return new Promise((resolve, reject) => {
        const tag = document.createElement(type);
        if (type === 'script') {
            tag.src = url;
            tag.async = true;
        }
        if (type === 'link') {
            tag.href = url;
            tag.rel = 'stylesheet';
        }
        tag.id = id;
        tag.onload = resolve;
        tag.onerror = reject;
        document.head.appendChild(tag);
    });
};

const loadFeatures = async (featuresMap) => {
    const featuresToLoad = Object.entries(featuresMap)
        .filter(([_, enabled]) => enabled)
        .map(([feature]) => feature);
        

    const featuresPromises = featuresToLoad.map((feature) => {
        if(feature === 'productSpin') {
            return;
        }
        import(`/template/js/${feature}.js`).then((m) => m.default());
    });

    return Promise.all(featuresPromises);
};

const setCookie = (name, value, days = 180) => {
    let expires = '';
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = '; expires=' + date.toUTCString();
    }
    document.cookie = name + '=' + encodeURIComponent(value) + expires + '; path=/';
};

const getCookie = (name) => {
    return document.cookie
        .split('; ')
        .find((row) => row.startsWith(`${name}=`))
        ?.split('=')[1];
};

const waitForImages = (container = document) => {
    const images = Array.from(container.querySelectorAll('img'));

    return Promise.all(
        images.map((img) =>
            img.complete && img.naturalHeight !== 0
                ? Promise.resolve(img)
                : new Promise((resolve) => img.addEventListener('load', () => resolve(img), { once: true }))
        )
    );
};

const utils = {
    loadExternalSource,
    loadFeatures,
    setCookie,
    getCookie,
    waitForImages,
};

prestashop.themeSelectors.alysum = {
    selectors,
    classes,
    assets,
    utils,
};

document.addEventListener('DOMContentLoaded', async () => {
    const generalFeaturesMap = {
        sticky: pktheme.header_sticky,
        totop: pktheme.gs_totop,
        countdown: pktheme.pm_countdown,
        mobileBottomPanel: pktheme.mobile_show_bottom_panel,
        customScrollbar: pktheme.gs_custom_scrollbar,
        fontAwesome: pktheme.gs_font_awesome,
        mobileTemplates: isMobileTemplatesRequired(),
        revSliderLoader: true,
    };
    // trigger when DOM is loaded
    addBodyClasses();
    configureJGrowl();
    updateCurrentYear();
    addPrestashopEvents();
    addModalWindowListener();
    addCategoryTreeListeners();
    addToCartButtonListeners();
    addTriggerButtonListener();
    addImagesLoadEventListener();
    addProductMiniatureListeners();
    initSlickSliders();
    isTouchDevice ? addTapListener() : addHoverListener();
    await loadFeatures(generalFeaturesMap);
    // temporary workaround for facetedsearch price slider
    // TODO: improve with Promise.all
    setTimeout(() => prestashop.emit('alysumReady'), 1000);
});

// mark every loaded image with 'loaded' class
const addImagesLoadEventListener = () => {
    function handleImageLoad() {
        this.classList.add(classes.loaded);
    }

    document.querySelectorAll('img[loading="lazy"]').forEach((i) => {
        i.complete ? i.classList.add(classes.loaded) : i.addEventListener('load', handleImageLoad);
    });
};

/*
 * 1. add a button with data attr "trigger-name"
 * 2. add trigget target element with data attr "trigger-target" with the same value as button has
 */
const addTriggerButtonListener = () => {
    const triggerClass = 'hidden';
    const triggerTarget = 'data-trigger-target';
    const triggerName = '[data-trigger-name]';
    const triggersCollection = document.querySelectorAll(triggerName);

    if (!triggersCollection) return;

    const animateSection = (section) => {
        const duration = 500;
        const easing = 'ease-out';
        const isHidden = section.classList.contains(triggerClass);
        isHidden && section.classList.toggle(triggerClass);
        section.classList.add(classes.oh);
        section.animate(
            [
                {
                    height: isHidden ? '0px' : `${section.offsetHeight}px`,
                    easing,
                },
                {
                    height: isHidden ? `${section.offsetHeight}px` : '0px',
                    easing,
                },
            ],
            { duration }
        );
        setTimeout(() => {
            isHidden || section.classList.toggle(triggerClass);
            section.classList.remove(classes.oh);
        }, duration);
    };

    triggersCollection.forEach((item) => {
        item.addEventListener('click', ({ target }) => {
            const triggerName = target.dataset.triggerName;
            const triggerTargetEl = document.querySelector(`[${triggerTarget}="${triggerName}"]`);
            triggerTargetEl && animateSection(triggerTargetEl);
        });
    });

    prestashop.on('updateProductList', () => {
        queueMicrotask(() => addTriggerButtonListener());
    });
};

const initSlickSliders = () => {
    setTimeout(() => {
        const sliders = document.querySelectorAll(selectors.pkSlick);
        sliders?.forEach((slider) => {
            if (!slider.classList.contains('slick-initialized')) {
                const optionsString = slider.dataset['slider_options'];
                try {
                    const currentOptions = JSON.parse(optionsString);
                    const defaultOptions = {
                        responsive: [
                            {
                                breakpoint: pktheme.breakpoints.tablet,
                                settings: {
                                    slidesToShow: currentOptions?.slidesToShowTablet || 2,
                                },
                            },
                            {
                                breakpoint: pktheme.breakpoints.mobile,
                                settings: {
                                    slidesToShow: currentOptions?.slidesToShowMobile || 1,
                                },
                            },
                        ],
                    };
                    const slickOptions = $.extend({}, defaultOptions, currentOptions);

                    $(slider).slick(slickOptions);
                } catch (_) {}
            }
        });
    }, 500);
};

const configureJGrowl = () => {
    if (typeof $.jGrowl !== 'function') {
        return;
    }

    const config = {
        pool: 5,
        life: 4000,
        closer: false,
        theme: 'jGrowl-promokit',
        animateClose: { height: 'hide' },
    };

    $.jGrowl.defaults = { ...$.jGrowl.defaults, ...config };
};

const addBodyClasses = () => {
    document.body.classList.add(isTouchDevice ? 'touch' : 'no-touch');
};

const addTapListener = () => {
    const dropDownRoot = '.dd_el .pk-item-content';

    $(document).on('click', dropDownRoot, function (event) {
        const {
            currentTarget: { href, tagName, parentElement },
        } = event;

        const isRedirect = () => {
            return tagName === 'A' && !['', '#'].includes(href) && !parentElement.dataset.pktype;
        };

        // if clicked element is A and it has a link then go to link
        isRedirect() && (location.href = href);

        if (parentElement.querySelector(selectors.ddContainer)?.length === 0) {
            return;
        }

        event.preventDefault();

        const isHover = parentElement.classList.contains(classes.ddHover);
        const childContainer = $(this).parent().children(selectors.ddContainer);

        $(dropDownRoot).not(this).parent().removeClass(classes.ddHover);

        isHover
            ? childContainer.stop().slideUp(200, 'easeOutExpo')
            : childContainer.stop().slideDown(200, 'easeOutExpo');

        parentElement.classList.toggle(classes.ddHover);
    });
};

const addHoverListener = () => {
    const dropDownRoot = '.dd_el';
    $(document).on('mouseenter', dropDownRoot, function () {
        $(selectors.ddContainer).stop().slideUp(0);
        $(this).children(selectors.ddContainer).stop().slideDown(200).addClass(classes.ddHover);
    });

    $(document).on('mouseleave', dropDownRoot, function () {
        $(this).children(selectors.ddContainer).removeClass(classes.ddHover).delay('400').stop().slideUp(200);
    });

    $(document).on('mouseleave', selectors.ddContainer, function () {
        $(this).removeClass(classes.ddHover).delay('400').stop().slideUp(200);
    });
};

const addCategoryTreeListeners = () => {
    const categoryTreeSelector = '.ps_categorytree .module-title';
    const categoryTreeElement = document.querySelector(categoryTreeSelector);

    if (categoryTreeElement && !categoryTreeElement.dataset.listenersAdded) {
        categoryTreeElement.addEventListener('click', (e) => {
            const moduleBody = e.target.nextElementSibling;
            if (moduleBody) {
                moduleBody.classList.toggle('hidden');
            }
        });
        categoryTreeElement.dataset.listenersAdded = true;
    }

    const buttonSelector = '.catmenu-trigger';
    const openSelector = 'catmenu-open';
    const dropdownSelector = '.children-true > span';

    const dropdowns = document.querySelectorAll(dropdownSelector);
    const subcategoriesButtons = document.querySelectorAll(buttonSelector);

    subcategoriesButtons?.forEach((btn) => {
        if (btn && !btn.dataset.listenersAdded) {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const parentEl = e.currentTarget.parentElement;
                dropdowns.forEach((dd) => {
                    if (!dd.nextElementSibling.isSameNode(parentEl.nextElementSibling)) {
                        // dd.classList.remove(openSelector);
                    }
                });
                parentEl.classList.toggle(openSelector);
            });
            btn.dataset.listenersAdded = true;
        }
    });
};

const isEmail = (email) => {
    const regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
};

const updateCurrentYear = () => {
    // update footer year. Works for any element with .current_year class
    document.querySelectorAll('.current_year')?.forEach((item) => {
        item.innerHTML = new Date().getFullYear();
    });
};

const addProductMiniatureListeners = () => {
    const hoverClass = 'pmhovered';
    const switcher = '.pmimage-switcher';
    const switchers = [...document.querySelectorAll(switcher)];

    switchers.forEach((switcher) => {
        const items = [...switcher.querySelectorAll('span')];
        items.forEach((item, index) => {
            const img = item.closest('a').querySelector(`:nth-child(${index + 1})`);
            item.addEventListener('mouseenter', () => img.classList.add(hoverClass));
            item.addEventListener('mouseleave', () => img.classList.remove(hoverClass));
        });
    });
};

const addToCartButtonListeners = () => {
    document.querySelectorAll(selectors.buttonAddToCart).forEach((item) => {
        item.addEventListener('click', ({ target }) => target.classList.add(classes.inProgress));
    });
};

const removeAllButtonLoaders = () => {
    document.querySelectorAll(selectors.buttonAddToCart).forEach((item) => {
        item.classList.remove(classes.inProgress);
    });
    document.querySelectorAll(selectors.buttonQuickView).forEach((item) => {
        item.classList.remove(classes.inProgress);
    });
};

const addModalWindowListener = () => {
    const observer = new MutationObserver((mutations) => {
        mutations.forEach(() => {
            const isModalOpen = document.body.classList.contains(classes.modalOpen);
            isModalOpen ? prestashop.emit('modalOpen', {}) : prestashop.emit('modalClosed', {});
        });
    });
    observer.observe(document.body, { attributes: true });
};

const addBackdropListener = () => {
    document.querySelector('.modal-backdrop')?.addEventListener('click', () => {
        prestashop.emit('modalClosed', {});
    });
};

const addPrestashopEvents = () => {
    prestashop.on('modalOpen', () => {
        removeAllButtonLoaders();
        addBackdropListener();
    });

    prestashop.on('modalClosed', () => {
        $('.modal').modal('hide');
    });

    prestashop.on('clickQuickView', (e) => {
        if (!e?.dataset?.idProduct) {
            return;
        }
        // add loader for a clicked button
        const productRoot = document.querySelector(
            `${prestashop.selectors.product.miniature}[data-id-product="${e.dataset.idProduct}"]`
        );
        productRoot.querySelector(selectors.buttonQuickView).classList.add(classes.inProgress);
    });

    prestashop.on('updateProductList', () => {
        queueMicrotask(() => addProductMiniatureListeners());
    });

    prestashop.on('updatedProduct', () => {
        initSlickSliders();
    });

    prestashop.on('pkelementsTabsReady', () => {
        addCategoryTreeListeners();
    });
};

const isMobileTemplatesRequired = () => {
    const isTemplateRequired = (idMob, idDesk) => idMob && idMob !== idDesk;
    return (
        isTemplateRequired(pktheme.header_builder_mobile, pktheme.header_builder) ||
        isTemplateRequired(pktheme.footer_builder_mobile, pktheme.footer_builder) ||
        isTemplateRequired(pktheme.hp_builder_mobile, pktheme.hp_builder)
    );
};
