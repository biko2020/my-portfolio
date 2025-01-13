document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("showMeResult").addEventListener("click", function(e) {
      e.preventDefault();
      const resultBlock = document.getElementById("resultBlock");
      if (resultBlock.classList.contains("hidden")) {
          resultBlock.classList.remove("hidden");
          this.textContent = "Hide result";
      } else {
          resultBlock.classList.add("hidden");
          this.textContent = "Show me result";
      }
  });

  document.getElementById("explanation").addEventListener("click", function(e) {
    e.preventDefault();
    const explanationBlock = document.querySelector(".resultBlock");
    if (explanationBlock.classList.contains("hidden")) {
        explanationBlock.classList.remove("hidden");
        this.textContent = "Hide explanation";
    } else {
        explanationBlock.classList.add("hidden");
        this.textContent = "Understanding Complex Numbers";
    }
});
});