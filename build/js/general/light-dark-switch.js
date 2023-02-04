const lightDarkSwitch = () => {
    const themeSwitch = document.querySelector(".theme-switch");

    themeSwitch.addEventListener("click", () => {
        document.body.classList.toggle("light-mode");
        document.body.classList.toggle("dark-mode");
    });

    // Detect default mode of browser/machine and set this is as standard if client has set that default mode needs to be that of the user their machine.
}

lightDarkSwitch();