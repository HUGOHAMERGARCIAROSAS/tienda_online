const bottomPanelToggler = () => {
    let debounceTimerId = null;

    const bottomPanelClass = '.pk-mobile-bottom-panel';
    const panelEl = document.querySelector(bottomPanelClass);

    if (!panelEl) {
        return;
    }

    const checkCurrentState = () => {
        const isMobile = prestashop.responsive.current_width <= pktheme.mobile_breakpoint;
        isMobile ? panelEl.classList.remove('hidden') : panelEl.classList.add('hidden');
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

export default bottomPanelToggler;
