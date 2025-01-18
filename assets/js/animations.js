document.addEventListener('DOMContentLoaded', function() {
    class Slider {
        constructor(containerId, options = {}) {
            this.container = document.getElementById(containerId);
            if (!this.container) return;

            this.slides = this.container.querySelectorAll('.slide');
            this.currentIndex = 0;
            this.autoplayInterval = null;

            // Default options
            this.options = {
                autoplay: true,
                interval: 5000,
                transition: 'fade',
                navigation: true,
                pagination: true,
                ...options
            };

            this.init();
        }

        init() {
            this.setupSlides();
            this.createNavigation();
            this.createPagination();
            this.startAutoplay();
            this.addEventListeners();
        }

        setupSlides() {
            this.slides.forEach((slide, index) => {
                slide.style.opacity = index === 0 ? '1' : '0';
                slide.classList.toggle('active', index === 0);
            });
        }

        createNavigation() {
            if (!this.options.navigation) return;

            const navContainer = document.createElement('div');
            navContainer.className = 'slider-navigation';
            
            const prevButton = document.createElement('button');
            prevButton.innerHTML = '&#10094;';
            prevButton.className = 'slider-nav-prev';
            
            const nextButton = document.createElement('button');
            nextButton.innerHTML = '&#10095;';
            nextButton.className = 'slider-nav-next';
            
            navContainer.appendChild(prevButton);
            navContainer.appendChild(nextButton);
            this.container.appendChild(navContainer);

            prevButton.addEventListener('click', () => this.prev());
            nextButton.addEventListener('click', () => this.next());
        }

        createPagination() {
            if (!this.options.pagination) return;

            const paginationContainer = document.createElement('div');
            paginationContainer.className = 'slider-pagination';

            this.slides.forEach((_, index) => {
                const dot = document.createElement('span');
                dot.className = 'slider-dot';
                dot.dataset.index = index;
                dot.addEventListener('click', () => this.goToSlide(index));
                paginationContainer.appendChild(dot);
            });

            this.container.appendChild(paginationContainer);
            this.updatePagination();
        }

        updatePagination() {
            const dots = this.container.querySelectorAll('.slider-dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentIndex);
            });
        }

        next() {
            this.goToSlide((this.currentIndex + 1) % this.slides.length);
        }

        prev() {
            this.goToSlide(
                (this.currentIndex - 1 + this.slides.length) % this.slides.length
            );
        }

        goToSlide(index) {
            this.slides.forEach((slide, i) => {
                slide.style.opacity = i === index ? '1' : '0';
                slide.classList.toggle('active', i === index);
            });

            this.currentIndex = index;
            this.updatePagination();
            this.resetAutoplay();
        }

        startAutoplay() {
            if (!this.options.autoplay) return;

            this.autoplayInterval = setInterval(() => {
                this.next();
            }, this.options.interval);
        }

        resetAutoplay() {
            if (this.autoplayInterval) {
                clearInterval(this.autoplayInterval);
                this.startAutoplay();
            }
        }

        addEventListeners() {
            let touchStartX = 0;
            this.container.addEventListener('touchstart', (e) => {
                touchStartX = e.touches[0].clientX;
            });

            this.container.addEventListener('touchend', (e) => {
                const touchEndX = e.changedTouches[0].clientX;
                if (touchStartX - touchEndX > 50) {
                    this.next();
                } else if (touchEndX - touchStartX > 50) {
                    this.prev();
                }
            });
        }
    }

    // Initialize slider
    new Slider('slider-container', {
        autoplay: true,
        interval: 5000,
        navigation: true,
        pagination: true
    });
});