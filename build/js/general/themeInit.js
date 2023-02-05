const themeInit = () => {
  const themeSwitchPanel = document.querySelector(".lightDarkModeSwitch");

  if (themeSwitchPanel.textContent.includes("light-mode")) {
    document.body.classList.add("light-mode");
    sessionStorage.setItem("theme", "light-mode");
  } else if (themeSwitchPanel.textContent.includes("dark-mode") && !themeSwitchPanel.textContent.includes("light-dark-mode")) {
    document.body.classList.add("dark-mode");
    sessionStorage.setItem("theme", "dark-mode");
  } else if (sessionStorage.getItem("theme") != null) {
    document.body.classList.add(sessionStorage.getItem("theme"));
  }
};

themeInit();
