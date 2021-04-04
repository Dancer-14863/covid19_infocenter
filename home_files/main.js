/**
 * Gets the page name from a href url
 * @param href
 * @returns {string} page name
 */
const getPageNameFromHref = href => {
    return href.split('/').pop();
};

/**
 * Highlights the current page on the nav bar
 * programmatically
 */
const highlightActivePage = () => {
    const navBarAnchors = document.querySelectorAll("#cdc-meganav-bar nav ul li a")

    for (const navBarAnchor of navBarAnchors) {
        const currentPageName = getPageNameFromHref(window.location.href);
        const anchorPageName = getPageNameFromHref(navBarAnchor.href);
        if (currentPageName === anchorPageName) {
            navBarAnchor.classList.add('active');
        } else {
            navBarAnchor.classList.remove('active');
        }
    }
};

const main = () => {
    highlightActivePage();
};

window.addEventListener('load', main);