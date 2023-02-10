const lightDarkSwitch = () => {
  const themeSwitch = document.querySelector(".theme-switch");
  const themeSwitchPanel = document.querySelector(".lightDarkModeSwitch");
  const lightDarkModeStandard = document.querySelector(".lightDarkModeStandard");

  themeSwitch.addEventListener("click", () => {
    document.body.classList.toggle("light-mode");
    document.body.classList.toggle("dark-mode");

    sessionStorage.getItem("theme") == "light-mode" ? sessionStorage.setItem("theme", "dark-mode") : sessionStorage.setItem("theme", "light-mode");
    console.log("themes: " + sessionStorage.getItem("theme"));
  });

  if (sessionStorage.getItem("theme") == null) {
    if (themeSwitchPanel.textContent.includes("light-mode")) {
      document.body.classList.add("light-mode");
      sessionStorage.setItem("theme", "light-mode");
    } else if (themeSwitchPanel.textContent.includes("dark-mode") && !themeSwitchPanel.textContent.includes("light-dark-mode")) {
      document.body.classList.add("dark-mode");
      sessionStorage.setItem("theme", "dark-mode");
    } else if (themeSwitchPanel.textContent.includes("light-dark-mode")) {
      let standardValue = lightDarkModeStandard.innerHTML.trim();

      switch (standardValue) {
        case "light-mode":
          document.body.classList.add("light-mode");
          sessionStorage.setItem("theme", "light-mode");
          break;
        case "dark-mode":
          document.body.classList.add("dark-mode");
          sessionStorage.setItem("theme", "dark-mode");
          break;
        case "machine-default":
            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.body.classList.add("dark-mode");
                sessionStorage.setItem("theme", "dark-mode");
            } else {
                document.body.classList.add("light-mode");
                sessionStorage.setItem("theme", "light-mode");
            }
          break;
      }
    }
  }
};

lightDarkSwitch();