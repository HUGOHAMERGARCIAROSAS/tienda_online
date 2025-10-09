const pkSticky = () => {
    const smallScreens = true;
    const stickyClass = 'sticky';
    const stickySelector = pktheme.header_sticky_class || 'header-bottom';

    const isSticky = smallScreens || (!smallScreens && window.innerWidth > pktheme.mobile_breakpoint);
    const stickyEl = document.querySelector(`.${stickySelector}`);

    if (!stickyEl || !isSticky) return;

    // fix header parent element height to avoid layout shift
    stickyEl.parentElement.style.height = getComputedStyle(stickyEl.parentElement).height;

    const observerConf = {
        rootMargin: Number.isInteger(stickyEl.offsetTop) ? `${stickyEl.offsetTop}px` : '0px',
        threshold: 1,
    };

    const toggleStickyState = ({ isIntersecting }) => stickyEl.classList.toggle(stickyClass, !isIntersecting);

    const stickyObserver = new IntersectionObserver((item) => toggleStickyState(item[0]), observerConf);

    stickyObserver.observe(document.body);

    window.addEventListener('beforeunload', () => {
        stickyObserver.disconnect();
    });
};

export default pkSticky;
