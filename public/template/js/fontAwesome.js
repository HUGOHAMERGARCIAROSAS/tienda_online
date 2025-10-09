const pkFontAwesome = async () => {
    const faElement = document.querySelector('.fa');
    const { loadExternalSource } = prestashop.themeSelectors.alysum.utils;

    if (!faElement || !ceFrontendConfig) {
        return;
    }

    try {
        const file = ceFrontendConfig.version === '2.5.0-in-stock' ? 'font-awesome.css' : 'v4-shims.min.css';
        const source = `/template/css/${file}`;
        await loadExternalSource(source, 'link', 'pk-font-awesome');
    } catch (_) {
        return console.warn('Unable to load custom scrollbar');
    }
};

export default pkFontAwesome;
