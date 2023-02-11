const navSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks = document.querySelectorAll(".nav-links li");

    var i;

    burger.addEventListener("click", () => {
        nav.classList.toggle("nav-active");

        // Animate links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = "";
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5
                    }s`;
            }
        });

        document.body.classList.toggle("stop-scrolling");
        burger.classList.toggle("toggle");
    });



    // Remove animation on links to add them again later
    for (i = 0; i < navLinks.length; i++) {
        navLinks[i].addEventListener("click", () => {
            if (window.innerWidth < 1280) {
                document.body.classList.toggle("stop-scrolling");
            }
        
            nav.classList.remove("nav-active");
            burger.classList.toggle("toggle");

            for (i = 0; i < 5; i++) {
                navLinks[i].style.animation = "";
            }
        });
    }
};

navSlide();