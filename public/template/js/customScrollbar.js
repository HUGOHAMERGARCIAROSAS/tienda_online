const pkCustomScrollbar = async () => {
    const { loadExternalSource } = prestashop.themeSelectors.alysum.utils;

    try {
        const version = 'https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.11.0';

        const js = `${version}/browser/overlayscrollbars.browser.es6.min.js`;
        const css = `${version}/styles/overlayscrollbars.min.css`;

        await loadExternalSource(js, 'script', 'pk-custom-scrollbars');
        await loadExternalSource(css, 'link', 'pk-custom-scrollbars-style');
    } catch (_) {
        return console.warn('Unable to load custom scrollbar');
    }

    const initTabContentScroll = () => {
        document.querySelectorAll('.pk-aside-tabs > .tab-content').forEach((e) => OverlayScrollbars(e, {}));
    };

    const { OverlayScrollbars } = OverlayScrollbarsGlobal;

    OverlayScrollbars(document.body, {});

    prestashop.on('pkelementsTabsReady', initTabContentScroll);
};

export default pkCustomScrollbar;
