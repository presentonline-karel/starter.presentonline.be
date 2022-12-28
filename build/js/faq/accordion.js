const accordion = () => {
    const accordionItems = document.querySelectorAll(".accordion");

    accordionItems.forEach((accordion) => {
        accordion.addEventListener("click", () => {
            accordion.classList.toggle("active");
        });
    });
}

accordion();