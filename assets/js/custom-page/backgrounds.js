const backgrounds = () => {
    const sections = document.body.getElementsByTagName("section");
    
    for (let i = 0; i < (sections.length - 1); i++) {
        let currentBgColor = window.getComputedStyle(sections[i]).backgroundColor;
        let nextBgColor = window.getComputedStyle(sections[i + 1]).backgroundColor;

        if(currentBgColor == nextBgColor) {
            if(sessionStorage.getItem("theme") == "light-mode") {
                sections[i].style.borderBottom = "1px solid #DEE2E6";
            } else if(sessionStorage.getItem("theme") == "dark-mode") {
                sections[i].style.borderBottom = "1px solid #495057";
            }
        }
    }
}

backgrounds();