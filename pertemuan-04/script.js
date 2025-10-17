
  window.addEventListener("load", function () {
    setTimeout(() => {
      alert("Selamat datang di halaman biodata Muazijan Pratama!");
    }, 500);
  });




    const phrases = [
      "Hello, I'm a Developer.",
      "I build cool web apps.",
      "Welcome to my website!",
      "Let's create something amazing."
    ];

    const typingElement = document.getElementById("typing");
    let phraseIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    function type() {
      const currentPhrase = phrases[phraseIndex];
      const currentText = currentPhrase.substring(0, charIndex);

      typingElement.textContent = currentText;

      if (!isDeleting && charIndex < currentPhrase.length) {
        charIndex++;
        setTimeout(type, 100);
      } else if (isDeleting && charIndex > 0) {
        charIndex--;
        setTimeout(type, 50);
      } else {
        isDeleting = !isDeleting;
        if (!isDeleting) {
          phraseIndex = (phraseIndex + 1) % phrases.length;
        }
        setTimeout(type, 1000);
      }
    }

    type();
