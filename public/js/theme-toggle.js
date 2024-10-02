// public/js/theme-toggle.js
document.addEventListener('DOMContentLoaded', function() {
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeStyleLink = document.getElementById('theme-style');
    const themeIcon = document.getElementById('theme-icon');
    const body = document.body;

    // Check for saved user preference, if any, on load of the website
    const currentTheme = localStorage.getItem('theme') || 'light';

    if (currentTheme === 'dark') {
        themeStyleLink.setAttribute('href', '/css/app-black.css');
        themeIcon.setAttribute('src', '/images/icons/white-theme - Copie.png');
    } else {
        themeStyleLink.setAttribute('href', '/css/app-white.css');
        themeIcon.setAttribute('src', '/images/icons/white-theme - Copie.png');
    }

    themeToggleBtn.addEventListener('click', function() {
        const currentTheme = localStorage.getItem('theme') || 'light';

        // Apply transition class to body
        body.classList.add('transition');

        if (currentTheme === 'light') {
            themeStyleLink.setAttribute('href', '/css/app-black.css');
            localStorage.setItem('theme', 'dark');
            themeIcon.setAttribute('src', '/images/icons/white-theme - Copie.png');
        } else {
            themeStyleLink.setAttribute('href', '/css/app-white.css');
            localStorage.setItem('theme', 'light');
            themeIcon.setAttribute('src', '/images/icons/dark-theme.png');
        }

        // Remove transition class after the transition duration
        setTimeout(() => {
            body.classList.remove('transition');
        }, 300); // Match the duration of your transition in CSS
    });
});
