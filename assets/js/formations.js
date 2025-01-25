document.addEventListener("DOMContentLoaded", function() {
    const showMeResultBtn = document.getElementById("showMeResult");
    const explanationBtn = document.getElementById("explanation");
    const resultBlock = document.getElementById("resultBlock");
    const explanationBlock = document.querySelector(".resultBlock");
  
    if (showMeResultBtn && resultBlock) {
      showMeResultBtn.addEventListener("click", function(e) {
        e.preventDefault();
        if (resultBlock.classList.contains("hidden")) {
          resultBlock.classList.remove("hidden");
          this.textContent = "Hide result";
        } else {
          resultBlock.classList.add("hidden");
          this.textContent = "Show me result";
        }
      });
    }
  
    if (explanationBtn && explanationBlock) {
      explanationBtn.addEventListener("click", function(e) {
        e.preventDefault();
        if (explanationBlock.classList.contains("hidden")) {
          explanationBlock.classList.remove("hidden");
          this.textContent = "Hide explanation";
        } else {
          explanationBlock.classList.add("hidden");
          this.textContent = "Understanding Complex Numbers";
        }
      });
    }
  });