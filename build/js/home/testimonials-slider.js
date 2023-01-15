const testimonialsSlider = () => {
  let slides = document.querySelectorAll(".slide-container");
  let bullets = document.querySelectorAll(".bullet");
  let index = 0;

  var i = 0;
  slides[i].classList.add("active");
  bullets[i].classList.add("active");

  let nextButtons = document.querySelectorAll(".next");
  let prevButtons = document.querySelectorAll(".prev");

  nextButtons.forEach((next) => {
    next.addEventListener("click", () => {
      slides[index].classList.remove("active");
      bullets[index].classList.remove("active");
      index = (index + 1) % slides.length;

      if (index > slides.length - 1) {
        index = 0;
      }

      slides[index].classList.add("active");
      bullets[index].classList.add("active");
    });
  });

  prevButtons.forEach((prev) => {
    prev.addEventListener("click", () => {
      slides[index].classList.remove("active");
      bullets[index].classList.remove("active");
      index = (index - 1 + slides.length) % slides.length;

      if (index < 0) {
        index = slides.length - 1;
      }

      slides[index].classList.add("active");
      bullets[index].classList.add("active");
    });
  });
};

testimonialsSlider();