const tabs = () => {
    let tabs = document.querySelectorAll(".tab");
    let tabContentItems = document.querySelectorAll(".tab-content");
    let contentContainer = document.querySelector(".tab-content-container");
    let helperTabContentItems = document.querySelectorAll(".helper-tab-content"); // Helper tab content -> dynamic height

    tabContentItems[0].classList.add("active");
    tabs[0].classList.add("active");

    // Depending on screen size, set dynamic height of tab content container
    if (window.innerWidth < 1440 ) {
        const firstTabHeight = helperTabContentItems[0].offsetHeight;
        contentContainer.style.height = `${firstTabHeight + 48 + 8}px`; // 48px padding, 8px margin
    } else {
        const firstTabHeight = helperTabContentItems[0].offsetHeight;
        contentContainer.style.height = `${firstTabHeight + 96 + 8}px`; // 96px padding, 8px margin
    }

    

    for (let i = 0; i < tabs.length; i++) {
        tabs[i].addEventListener("click", function() {
            document.querySelector(".tab.active").classList.remove("active");
            tabs[i].classList.add("active");

            document.querySelector(".tab-content.active").classList.remove("active");
            tabContentItems[i].classList.add("active");

            // Depending on screen size, set dynamic height of tab content container
            if (window.innerWidth < 1440 ) {
                let newContainerHeight = helperTabContentItems[i].offsetHeight;
                contentContainer.style.height = `${newContainerHeight + 48 + 8}px`; // 48px padding, 8px margin
            } else {
                let newContainerHeight = helperTabContentItems[i].offsetHeight;
                contentContainer.style.height = `${newContainerHeight + 96 + 8}px`; // 48px padding, 8px margin
            }
        });
    }
}

tabs();