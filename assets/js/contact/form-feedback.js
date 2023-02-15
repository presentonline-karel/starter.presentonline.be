const formFeedback = () => {
  var submitEvent = null;

  const form = document.querySelector(".contact-form");

  // Individual inputs
  const name = document.querySelector(".name");
  const email = document.querySelector(".email");
  const subject = document.querySelector(".subject");
  const message = document.querySelector(".message");

  // All inputs
  const inputs = document.querySelectorAll(".input");

  form.addEventListener("submit", (e) => {
    submitEvent = e;

    checkInputs();

    name.addEventListener("input", checkInputs);
    email.addEventListener("input", checkInputs);
    subject.addEventListener("input", checkInputs);
    message.addEventListener("input", checkInputs);
  });

  function checkInputs() {
    const nameValue = name.value.trim();
    const emailValue = email.value.trim();
    const subjectValue = subject.value.trim();
    const messageValue = message.value.trim();

    var langCode = document.documentElement.lang;

    //name
    if (nameValue === "") {
      if (langCode == "nl") {
        setErrorFor(name, "Vul uw naam in.");
      } else if (langCode == "en") {
        setErrorFor(name, "Please enter your name.");
      } else if (langCode == "fr") {
        setErrorFor(name, "Entrez votre nom.");
      }
    } else {
      setSuccessFor(name);
    }

    //email
    if (emailValue === "") {
      if (langCode == "nl") {
        setErrorFor(email, "Vul uw e-mail in.");
      } else if (langCode == "en") {
        setErrorFor(email, "Please enter your email.");
      } else if (langCode == "fr") {
        setErrorFor(email, "Entrez votre e-mail.");
      }
    } else if (!isEmail(emailValue)) {
      if (langCode == "nl") {
        setErrorFor(email, "Vul een geldig e-mailadres in.");
      } else if (langCode == "en") {
        setErrorFor(email, "That is an invalid e-mail address.");
      } else if (langCode == "fr") {
        setErrorFor(email, "Entrez une adresse e-mail valide.");
      }
    } else {
      setSuccessFor(email);
    }

    //subject
    if (subjectValue === "") {
      if (langCode == "nl") {
        setErrorFor(subject, "Vul een onderwerp in.");
      } else if (langCode == "en") {
        setErrorFor(subject, "Please enter a subject.");
      } else if (langCode == "fr") {
        setErrorFor(subject, "Entrez un sujet.");
      }
    } else {
      setSuccessFor(subject);
    }

    //message
    if (messageValue === "") {
      if (langCode == "nl") {
        setErrorFor(message, "Vul een boodschap in.");
      } else if (langCode == "en") {
        setErrorFor(message, "Please enter a message.");
      } else if (langCode == "fr") {
        setErrorFor(message, "Entrez un message.");
      }
    } else {
      setSuccessFor(message);
    }
  }

  function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");

    small.innerText = message;
    formControl.className = "input-group error";
    submitEvent.preventDefault();
  }

  function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = "input-group success";
  }

  // Check if input user is a valid email
  function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
      email
    );
  }
};

formFeedback();