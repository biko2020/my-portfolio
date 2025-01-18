document.addEventListener("DOMContentLoaded", () => {
    // Menu Toggle Functionality
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    if (menuToggle && menu) {
        menuToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
            menu.classList.toggle('show');
            
            // Toggle hamburger icon
            this.classList.toggle('active');
        });

        // Close menu when a link is clicked
        const menuLinks = menu.querySelectorAll('a');
        if (menuLinks) {
            menuLinks.forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.remove('show');
                    menuToggle.setAttribute('aria-expanded', 'false');
                    menuToggle.classList.remove('active');
                });
            });
        }

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (menu && menuToggle && !menu.contains(event.target) && !menuToggle.contains(event.target)) {
                menu.classList.remove('show');
                menuToggle.setAttribute('aria-expanded', 'false');
                menuToggle.classList.remove('active');
            }
        });
    }

    // Scroll to Top Functionality
    const scrollToTopButton = document.getElementById('scroll-to-top');

    if (scrollToTopButton) {
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollToTopButton.classList.add('show');
            } else {
                scrollToTopButton.classList.remove('show');
            }
        });

        scrollToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Language Switcher Functionality
    const languageToggle = document.getElementById('language-toggle');
    const languageOptions = document.getElementById('language-options');

    if (languageToggle && languageOptions) {
        languageToggle.addEventListener('click', function() {
            languageOptions.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (languageToggle && languageOptions && 
                !languageToggle.contains(event.target) && 
                !languageOptions.contains(event.target)) {
                languageOptions.classList.add('hidden');
            }
        });
    }
});