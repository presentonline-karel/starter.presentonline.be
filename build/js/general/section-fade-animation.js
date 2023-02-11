const inViewport = (elem) => {
  let allElements = document.querySelectorAll(elem);
  let windowHeight = window.innerHeight;

  const makeVisible = () => {
    for (let i = 0; i < allElements.length; i++) {
      let viewportOffset = allElements[i].getBoundingClientRect();
      let top = viewportOffset.top;

      // If the top offset is less than the window height
      if (top < windowHeight) {
        allElements[i].classList.add("in-viewport");
      } else {
        allElements[i].classList.remove("in-viewport");
      }
    }
  };
  makeVisible();

  window.addEventListener("scroll", makeVisible);
};

inViewport(".fade-section");