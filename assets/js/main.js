document.addEventListener('DOMContentLoaded', () => {
  // Smooth scrolling for navigation
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
          e.preventDefault();
          document.querySelector(this.getAttribute('href')).scrollIntoView({
              behavior: 'smooth'
          });
      });
  });

  // Language switching via AJAX (optional enhancement)
  const languageSwitcher = document.querySelectorAll('.language-switcher a');
  languageSwitcher.forEach(link => {
      link.addEventListener('click', (e) => {
          e.preventDefault();
          const lang = link.textContent.toLowerCase();
          
          fetch(`?lang=${lang}`, {
              method: 'GET'
          }).then(response => {
              if (response.ok) {
                  window.location.reload();
              }
          });
      });
  });
});