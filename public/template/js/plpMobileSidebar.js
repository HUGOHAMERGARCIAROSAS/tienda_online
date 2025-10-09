const plpMobileSidebar = () => {
    // left column sidebar for mobile devices
    // to activate sidebar toggler add "sidebar" class to a root element

    const pkSidebarRoot = document.querySelector(prestashop.themeSelectors.alysum.selectors.pkSidebar);

    if (!pkSidebarRoot) {
        return;
    }

    const btnRoot = 'pk-sidebar-toggler-root';

    pkSidebarRoot.innerHTML += `<div id="${btnRoot}"></div>`;

    const { signal, component } = reef;

    const data = signal({ isOpen: false });

    const toggler = () => (data.isOpen = !data.isOpen);

    const template = () =>
        `<div class="sidebar-toggler ${data.isOpen ? 'pk-sidebar-open' : ''}">
            <svg class="svgic">
                <use href="${prestashop.urls.img_url}lib.svg#${data.isOpen ? 'cross' : 'arrowleft'}"></use>
            </svg>
        </div>`;

    const app = document.getElementById(btnRoot);

    app.addEventListener('click', toggler);

    component(app, template);
};

export default plpMobileSidebar;
