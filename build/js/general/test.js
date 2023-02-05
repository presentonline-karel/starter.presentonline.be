const testTheme = () => {
    if (sessionStorage.getItem("theme") != null) {
        let theme = sessionStorage.getItem("theme");
        document.body.classList.add(theme);
    }
}

testTheme();