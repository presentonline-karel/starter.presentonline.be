const languageDropdown = () => {
    const languages = document.querySelector(".languages");
    const languageActive = document.querySelector(".language-active");

    if (window.innerWidth > 1279) {
        languageActive.addEventListener("click", () => {
            languages.classList.toggle("open");
            languageActive.classList.toggle("open");
        })
    }
}

languageDropdown();