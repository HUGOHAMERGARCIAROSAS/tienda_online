const pkToTop = () => {
    const toTopBtn = document.querySelector('.pk-scroll-totop');
    const topElement = document.querySelector('#header');

    if (!toTopBtn || !topElement) return;

    const toggleButton = (state) => {
        toTopBtn.style.opacity = Number(!state);
        toTopBtn.style.display = !state ? 'block' : 'none';
    };

    const toTopObserver = new IntersectionObserver((entries) => {
        toggleButton(entries[0].isIntersecting);
    });

    toTopObserver.observe(topElement);

    window.addEventListener('beforeunload', () => {
        toTopObserver.disconnect();
    });

    toTopBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth',
        });
    });
};

export default pkToTop;
