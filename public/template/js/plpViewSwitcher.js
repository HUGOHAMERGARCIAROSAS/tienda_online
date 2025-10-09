const pkViewSwitcher = () => {
    let initCall = true;

    const addViewEventListeners = () => {
        const expires = 180;
        const actClass = prestashop.themeSelectors.alysum.classes.active;
        const products = 'products';
        const btnClass = '.view_btn';
        const listClass = 'view_list';
        const gridClass = 'view_grid';
        const storageItem = 'pkcpview';
        const productsContainer = '.product-list-container';
        const productsRoot = document.getElementById(products);
        const gridElement = document.querySelector(productsContainer);

        const { setCookie } = prestashop.themeSelectors.alysum.utils;

        if (!productsRoot || !gridElement) {
            return;
        }

        const buttonsList = [...document.querySelectorAll(btnClass)];

        const updateClasses = (columns) => {
            const params = new URL(document.location).searchParams;
            const page = params.get('page');
            const isList = columns === 0;

            document.getElementById('main-content').dataset['page'] = page || 1;

            const button = document.querySelector(`[data-gridcols="${columns}"]`);
            button?.classList.add(actClass);
            button?.setAttribute('aria-pressed', 'true');

            productsRoot.classList = isList ? listClass : `${gridClass}${columns}`;
            // use setTimeout to add animation for grid mode
            if (!isList) {
                setTimeout(() => productsRoot.classList.add(gridClass), 100);
            }
        };

        const deactivateButtons = () => {
            buttonsList.forEach((btn) => {
                btn.classList.remove(actClass);
                btn.setAttribute('aria-pressed', 'false');
            });
        };

        buttonsList.forEach((btn) =>
            btn.addEventListener('click', ({ target }) => {
                const columns = Number(target.dataset.gridcols) || 4;
                deactivateButtons();
                updateClasses(columns);
                setCookie(storageItem, columns, expires);
            })
        );
    };

    prestashop.on('updateProductList', addViewEventListeners);

    if (initCall) {
        initCall = false;
        addViewEventListeners();
    }
};

export default pkViewSwitcher;
