document.addEventListener('DOMContentLoaded', () => {
    const featuresMap = {
        masonry: document.body.classList.contains('category-page-type-masonry'),
    };

    prestashop.themeSelectors.alysum.utils.loadFeatures(featuresMap).catch((e) => console.info(e));
});
