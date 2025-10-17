
  window.addEventListener("load", function () {
    setTimeout(() => {
      alert("Selamat datang di halaman biodata Muazijan Pratama!");
    }, 500);
  });


  document.addEventListener("DOMContentLoaded", function () {
    const tombol = document.getElementById("btnFakta");
    const fakta = document.getElementById("faktaUnik");

    tombol.addEventListener("click", function () {
      if (fakta.style.display === "none") {
        fakta.style.display = "block";
        tombol.textContent = "Sembunyikan Fakta";
      } else {
        fakta.style.display = "none";
        tombol.textContent = "Tampilkan Fakta Unik";
      }
    });
  });
