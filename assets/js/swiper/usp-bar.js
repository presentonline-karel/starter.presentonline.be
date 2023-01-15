const uspBarSwiper = () => {
  const swiperUspBar = new Swiper(".swiper.usp-bar", {
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 2000,
    },

    breakpoints: {
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
        loop: false,
        autoplay: false,
      },
    },
  });
};

uspBarSwiper();