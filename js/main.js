let tabs = document.querySelectorAll("*[scifi-roll]");

for (let i = 0; i < tabs.length; i++) {
  let tabName = tabs[i].getAttribute("scifi-tab-index");
  let tab = document.querySelector("*[scifi-tab='" + tabName + "']");

  if (tab != null) {
    if (!tab.classList.contains("scifi-active")) {
      tab.style.display = "none";
    }
    tabs[i].addEventListener("click", function () {
      let tabgroup = this.getAttribute("scifi-roll");
      let tabindex = this.getAttribute("scifi-tab-index");
      let tabs = document.querySelectorAll("*[scifi-roll='" + tabgroup + "']");
      for (let i = 0; i < tabs.length; i++) {
        let tabiindex = tabs[i].getAttribute("scifi-tab-index");
        let tab = document.querySelector("*[scifi-tab='" + tabiindex + "']");
        if (tab != null) {
          tab.style.display = "none";
        }
      }
      document.querySelector("*[scifi-tab='" + tabindex + "']").style = "block";
    });
  }
}
