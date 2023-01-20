const pricingPlans = () => {
  const swiperTestimonials = new Swiper(".swiper.pricing-plans", {
    autoHeight: true,
    spaceBetween: 16,

    pagination: {
      el: ".swiper-pagination",
    },

    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
      1280: {
        slidesPerView: 4,
        spaceBetween: 0,
        allowTouchMove: false
      }
    },
  });
};

pricingPlans();