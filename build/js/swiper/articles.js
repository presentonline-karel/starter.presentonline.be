const articles = () => {
  const swiperTestimonials = new Swiper(".swiper.articles-swiper", {
    autoHeight: true,
    spaceBetween: 16,

    pagination: {
      el: ".swiper-pagination",
    },

    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 16,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 16,
      },
      1280: {
        spaceBetween: 0,
        allowTouchMove: false
      }
    },
  });
};

articles();