const stepsSwiper = () => {
  const swiperTestimonials = new Swiper(".swiper.steps", {
    autoHeight: true,
    spaceBetween: 16,

    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },

    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 16
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 16
      },
      1280: {
        slidesPerView: 6,
        navigation: false,
        allowTouchMove: false,
        spaceBetween: 0
      }
    },
  });
};

stepsSwiper();