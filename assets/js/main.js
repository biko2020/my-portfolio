document.addEventListener("DOMContentLoaded", () => {
    const toggleButton = document.getElementById("language-toggle");
    const languageOptions = document.getElementById("language-options");

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
});
