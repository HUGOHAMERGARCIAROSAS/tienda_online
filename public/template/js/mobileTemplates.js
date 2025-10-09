const mobileContentToggler = (blockName) => {
    const mobileTemplate = document.getElementById(`mobile-${blockName}-template`);
    const mobileWrapper = document.querySelector(`.mobile-${blockName}-wrapper`);
    const desktopWrapper = document.querySelector(`.desktop-${blockName}-wrapper`);
    const { hidden } = prestashop.themeSelectors.alysum.classes;

    const templateNode = mobileTemplate?.content.cloneNode(true);

    if (!mobileWrapper || !desktopWrapper || !mobileTemplate || !templateNode.children.length) return;

    let debounceTimerId = null;

    const showMobile = () => {
        mobileWrapper.classList.remove(hidden);
        desktopWrapper.classList.add(hidden);
    };

    const showDesktop = () => {
        mobileWrapper.classList.add(hidden);
        desktopWrapper.classList.remove(hidden);
    };

    const checkCurrentState = () => {
        const breakpoint =
            pktheme.mobile_breakpoint || pktheme.gs_mobile_breakpoint || pktheme.breakpoints.tablet || 1024;
        const isMobile = prestashop.responsive.current_width <= breakpoint;

        if (isMobile && !mobileWrapper.childElementCount) {
            mobileWrapper.appendChild(mobileTemplate.content);
        }

        isMobile ? showMobile() : showDesktop();
    };

    const resizeHandler = () => {
        clearTimeout(debounceTimerId);
        debounceTimerId = setTimeout(checkCurrentState, 200);
    };

    window.addEventListener('resize', resizeHandler);

    // Cleanup event listener on page unload
    window.addEventListener('beforeunload', () => {
        window.removeEventListener('resize', resizeHandler);
    });

    checkCurrentState();
};

const activateToggler = () => {
    if (typeof cePreview !== 'undefined') return; // Prevent toggler activation in preview mode
    mobileContentToggler('header');
    mobileContentToggler('home');
    mobileContentToggler('footer');
};

export default activateToggler;
