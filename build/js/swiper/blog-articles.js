const blogArticles = () => {
  const swiperTestimonials = new Swiper(".swiper.blog-articles", {
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
        allowTouchMove: false,
        spaceBetween: 0
      }
    },
  });
};

blogArticles();