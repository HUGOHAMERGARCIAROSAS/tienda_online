document.addEventListener('DOMContentLoaded', async () => {
    if (typeof pktheme === 'undefined') {
        return;
    }

    const { loadExternalSource, loadFeatures } = prestashop.themeSelectors.alysum.utils;

    await loadExternalSource('https://cdn.jsdelivr.net/npm/reefjs@13/dist/reef.min.js', 'script', 'pk-reef');

    const pkScrollToTop = () => {
        document.getElementById('main')?.scrollIntoView({
            behavior: 'smooth',
        });
    };

    const featuresMap = {
        plpViewSwitcher: pktheme.cp_view_switcher,
        plpAttrChanger: pktheme.pm_attr,
        plpMobileSidebar: true,
    };

    await loadFeatures(featuresMap);

    prestashop.on('updateProductList', () => queueMicrotask(() => pkScrollToTop()));
});
