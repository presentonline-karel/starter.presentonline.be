const swiperInitializer = () => {
  const swiper = new Swiper(".swiper.testimonials", {
    autoHeight: true,
    
    pagination: {
      el: ".swiper-pagination",
    },
    
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    }
  });
};

swiperInitializer();