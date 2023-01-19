const tabs = () => {
    let tabs = document.querySelectorAll(".tab"); // Tabs
    let tabContentItems = document.querySelectorAll(".tab-content"); // Tab content
    let contentContainer = document.querySelector(".tab-content-container"); // Tab content container
    let helperTabContentItems = document.querySelectorAll(".helper-tab-content"); // Helper tab content -> dynamic height

    //Initialize actions
    tabContentItems[0].classList.add("active");
    tabs[0].classList.add("active");
    const firstTabHeight = helperTabContentItems[0].offsetHeight;
    contentContainer.style.height = `${firstTabHeight + 48 + 8}px`; // 48px padding, 8px margin

    

    for (let i = 0; i < tabs.length; i++) {
        tabs[i].addEventListener("click", function() {
            document.querySelector(".tab.active").classList.remove("active");
            tabs[i].classList.add("active");

            document.querySelector(".tab-content.active").classList.remove("active");
            tabContentItems[i].classList.add("active");

            // Set dynamic height of tab content container
            let newContainerHeight = helperTabContentItems[i].offsetHeight;
            contentContainer.style.height = `${newContainerHeight + 48 + 8}px`; // 48px padding, 8px margin
        });
    }
}

tabs();