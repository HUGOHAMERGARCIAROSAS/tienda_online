document.addEventListener('DOMContentLoaded', () => {
    (() => {
        prestashop.themeSelectors.alysum.utils
            .loadExternalSource(`${prestashop.urls.css_url}components/modal.css`, 'link', 'pk-modal')
            .then(() => prestashop.emit('modalReady', {}))
            .catch((e) => console.info(e));
    })();
});
