document.addEventListener('DOMContentLoaded', function () {
    const searchIcon = document.querySelector('.search-icon');
    const searchPopup = document.querySelector('.search-popup');

    searchIcon.addEventListener('click', function (e) {
        e.preventDefault();
        searchPopup.style.display = 'flex';
    });

    searchPopup.addEventListener('click', function (e) {
        if (e.target === this) {
            searchPopup.style.display = 'none';
        }
    });

    const mobileMenuIcon = document.querySelector('.mobile-menu-icon');
    const mainNavigation = document.querySelector('.main-navigation');

    mobileMenuIcon.addEventListener('click', function (e) {
        e.preventDefault();
        if (mainNavigation.style.display === 'flex') {
            mainNavigation.style.display = 'none';
        } else {
            mainNavigation.style.display = 'flex';
            mainNavigation.style.flexDirection = 'column';
        }
    });
});
