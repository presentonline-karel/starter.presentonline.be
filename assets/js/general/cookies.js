const cookies = () => {
  const cookieModal = document.querySelector(".cookie-consent-modal");
  const cancelCookieButton = cookieModal.querySelector(".button.cancel");
  const acceptCookieButton = cookieModal.querySelector(".button.accept");

  cancelCookieButton.addEventListener("click", function () {
    cookieModal.classList.remove("active");
    localStorage.setItem("cookieAccepted", "no");
    document.body.classList.toggle("stop-scrolling");
  });

  acceptCookieButton.addEventListener("click", function () {
    cookieModal.classList.remove("active");
    localStorage.setItem("cookieAccepted", "yes");
    document.body.classList.toggle("stop-scrolling");
  });



  setTimeout(function checkCookies() {
    var cookiesAccepted = localStorage.getItem("cookieAccepted");

    if (cookiesAccepted == null) {
      cookieModal.classList.add("active");
      document.body.classList.toggle("stop-scrolling");
    }

    if (cookiesAccepted == "yes") {
      let analyticsScript = document.createElement("script");
      analyticsScript.setAttribute("src", "https://starter.presentonline.be/build/js/general/analytics.js");
      document.body.appendChild(analyticsScript);

      let analyticsScriptGoogle = document.createElement("script");
      analyticsScriptGoogle.setAttribute("src", "https://www.googletagmanager.com/gtag/js?id=G-Y4S49SPXNK");
      document.body.appendChild(analyticsScriptGoogle);
    }
  }, 1500);
};

cookies();