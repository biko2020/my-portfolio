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
        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.remove('show');
                menuToggle.setAttribute('aria-expanded', 'false');
                menuToggle.classList.remove('active');
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!menu.contains(event.target) && !menuToggle.contains(event.target)) {
                menu.classList.remove('show');
                menuToggle.setAttribute('aria-expanded', 'false');
                menuToggle.classList.remove('active');
            }
        });
    }

    // Language Switcher Functionality
    const toggleButton = document.getElementById("language-toggle");
    const languageOptions = document.getElementById("language-options");

    if (toggleButton && languageOptions) {
        // Toggle dropdown visibility
        toggleButton.addEventListener("click", () => {
            languageOptions.classList.toggle("hidden");
        });

        // Close dropdown when clicking outside
        document.addEventListener("click", (event) => {
            if (!toggleButton.contains(event.target) && !languageOptions.contains(event.target)) {
                languageOptions.classList.add("hidden");
            }
        });
    }
});