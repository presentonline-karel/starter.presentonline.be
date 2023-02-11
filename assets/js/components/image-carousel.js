const imageCarousel = () => {
    const bigImage = document.querySelector(".image-carousel__big-image__img");
    const bigImageSourceWebp = document.querySelector(".big-image__source__webp");
    const bigImageSourceJpg = document.querySelector(".big-image__source__jpg");

    const thumbnails = document.querySelectorAll(".thumbnail");
    const thumbnailSourcesWebp = document.querySelectorAll(".thumbnail__source__webp");
    const thumbnailSourcesJpg = document.querySelectorAll(".thumbnail__source__jpg");

    const nextArrow = document.querySelector(".arrow-aria.next");
    const prevArrow = document.querySelector(".arrow-aria.prev");

    function setActiveThumbnail() {
        for (let j = 0; j < thumbnails.length; j++) {
            if(thumbnails[j].src == bigImage.src) {
                thumbnails[j].classList.add("active");
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
            bigImageSourceWebp.srcset = thumbnailSourcesWebp[i].srcset;
            bigImageSourceJpg.srcset = thumbnailSourcesJpg[i].srcset;

            setActiveThumbnail();
        });
    }



    nextArrow.addEventListener("click", () => {
        let currentActiveSource = bigImage.src;

        for (let k = 0; k < thumbnails.length; k++) {
            if(thumbnails[k].src == currentActiveSource) {
                if(k < (thumbnails.length - 1)) {
                    bigImage.src = thumbnails[k + 1].src;
                    bigImageSourceWebp.srcset = thumbnailSourcesWebp[k + 1].srcset;
                    bigImageSourceJpg.srcset = thumbnailSourcesJpg[k + 1].srcset;
                } else {
                    bigImage.src = thumbnails[0].src;
                    bigImageSourceWebp.srcset = thumbnailSourcesWebp[0].srcset;
                    bigImageSourceJpg.srcset = thumbnailSourcesJpg[0].srcset;
                }
            }
        }

        setActiveThumbnail();
    });

    prevArrow.addEventListener("click", () => {
        let currentActiveSource = bigImage.src;

        for (let l = 0; l < thumbnails.length; l++) {
            if(thumbnails[l].src == currentActiveSource) {
                if(l > 0) {
                    bigImage.src = thumbnails[l - 1].src;
                    bigImageSourceWebp.srcset = thumbnailSourcesWebp[l - 1].srcset;
                    bigImageSourceJpg.srcset = thumbnailSourcesJpg[l - 1].srcset;
                } else {
                    bigImage.src = thumbnails[thumbnails.length - 1].src;
                    bigImageSourceWebp.srcset = thumbnailSourcesWebp[thumbnailSourcesWebp.length - 1].srcset;
                    bigImageSourceJpg.srcset = thumbnailSourcesJpg[thumbnailSourcesWebp.length - 1].srcset;
                }
            }
        }

        setActiveThumbnail();
    });
}

imageCarousel();