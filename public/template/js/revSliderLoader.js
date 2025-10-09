const pkRevSliderLoader = async () => {
    if (window.revSliderVersion === undefined) {
        const scripts = [...document.querySelectorAll('script')];
        const regex = /rbtools\.min\.js/;

        const isScriptExist = scripts?.find(({ src }) => regex.test(src));
        if (isScriptExist) {
            return;
        }
    }

    const sliderTag = [...document.querySelectorAll('rs-module')];

    if (sliderTag.length === 0) {
        return;
    }

    const { loadExternalSource } = prestashop.themeSelectors.alysum.utils;

    const root = `${prestashop.urls.base_url}modules/revsliderprestashop/public/assets/`;

    try {
        await loadExternalSource(`${root}js/rbtools.min.js`, 'script', 'pk-rbtools');
        await loadExternalSource(`${root}js/rs6.min.js`, 'script', 'pk-rs6-js');
        await loadExternalSource(`${root}css/rs6.min.css`, 'link', 'pk-rs6-css');
    } catch (error) {
        return console.warn('Unable to load Revolution Slider scripts');
    }

    sliderTag.forEach((slider) => {
        const sliderId = slider.getAttribute('id').replaceAll('_', '');
        window[`revinit_${sliderId}`]();
    });
};

export default pkRevSliderLoader;
