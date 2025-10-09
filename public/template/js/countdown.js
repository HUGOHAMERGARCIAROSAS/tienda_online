const pkCountdowns = () => {
    let initCall = true;
    
    const countdownEventListeners = async () => {
        const countdownSelector = '.countdown';
        const countdowns = document.querySelectorAll(countdownSelector);

        if (!countdowns.length) {
            return;
        }

        const { loadExternalSource } = prestashop.themeSelectors.alysum.utils;

        await loadExternalSource(`${prestashop.urls.css_url}components/countdown.css`, 'link', 'pk-countdown')
            .catch((e) => console.info(e));
        await loadExternalSource(`${prestashop.urls.js_url}libs/countdown.js`, 'script', 'pk-countdown-js')
            .catch((e) => console.info(e));

        countdowns.forEach((el) => {
            const { day, hour, minute, second } = JSON.parse(el.dataset.titles);
            const t = (title) => `<span>${title}</span></div>`;
            const d = (date) => `<div><i>${String(date).padStart(2, '0')}</i>`;

            const targetSelector = `.countdown-${el.dataset.product_id}`;
            const targetEl = document.querySelector(targetSelector);
            if (!targetEl) return;

            new Countdown(targetEl, {
                date: el.dataset.until,
                render: function ({ days, hours, min, sec }) {
                    this.el.innerHTML =
                        d(days) + t(day) +
                        d(hours) + t(hour) +
                        d(min) + t(minute) +
                        d(sec) + t(second);
                },
            });
        });
    }

    prestashop.on('updateProductList', countdownEventListeners);

    if (initCall) {
        initCall = false;
        countdownEventListeners();
    }
};

export default pkCountdowns;
