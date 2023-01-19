const imageCarousel = () => {
    const bigImage = document.querySelector(".image-carousel__big-image__img");
    const thumbnails = document.querySelectorAll(".thumbnail");

    const nextArrow = document.querySelector(".arrow-aria.next");
    const prevArrow = document.querySelector(".arrow-aria.prev");

    function setActiveThumbnail() {
        for (let j = 0; j < thumbnails.length; j++) {
            if(thumbnails[j].src == bigImage.src) {
                thumbnails[j].classList.add("active");
                console.log(j);
            } else {
                thumbnails[j].classList.remove("active");
            }
        }
    } 
    setActiveThumbnail();



    // When clicking on thumbnail
    for (let i = 0; i < thumbnails.length; i++) {
        thumbnails[i].addEventListener("click", () => {
            let srcClickedThumbnail = thumbnails[i].src;
            bigImage.src = srcClickedThumbnail;

            setActiveThumbnail();
        });
    }



    // When clicking on next arrow
    nextArrow.addEventListener("click", () => {
        let currentActiveSource = bigImage.src;

        for (let k = 0; k < thumbnails.length; k++) {
            if(thumbnails[k].src == currentActiveSource) {
                if(k < (thumbnails.length - 1)) {
                    bigImage.src = thumbnails[k + 1].src;
                } else {
                    bigImage.src = thumbnails[0].src;
                }
            }
        }

        setActiveThumbnail();
    });

    // When clicking on prev arrow
    prevArrow.addEventListener("click", () => {
        let currentActiveSource = bigImage.src;

        for (let l = 0; l < thumbnails.length; l++) {
            if(thumbnails[l].src == currentActiveSource) {
                if(l > 0) {
                    bigImage.src = thumbnails[l - 1].src;
                } else {
                    bigImage.src = thumbnails[thumbnails.length - 1].src;
                }
            }
        }

        setActiveThumbnail();
    });
}

imageCarousel();