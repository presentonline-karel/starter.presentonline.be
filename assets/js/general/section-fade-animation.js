const inViewport = (elem) => {
  let allElements = document.querySelectorAll(elem);
  let windowHeight = window.innerHeight;

  const elems = () => {

    //loop through the sections
    for (let i = 0; i < allElements.length; i++) {
      let viewportOffset = allElements[i].getBoundingClientRect();
      let top = viewportOffset.top;

      if (top < windowHeight) {

        //if the top offset is less than the window height
        allElements[i].classList.add("in-viewport");
      } else {
        allElements[i].classList.remove("in-viewport");
      }
    }
  };

  elems();
  window.addEventListener("scroll", elems);
};

inViewport(".fade-section");