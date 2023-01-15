const testimonialSwiper = () => {
  const swiperTestimonials = new Swiper(".swiper.testimonials", {
    autoHeight: true,
    loop: true,
    spaceBetween: 16,

    pagination: {
      el: ".swiper-pagination",
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
};

testimonialSwiper();