window.addEventListener("scroll", function() {
    const navbar = document.getElementById("navbar");
    const navbarLogo = document.getElementById("navbar-logo");
    const navbarText = document.getElementById("navbar-text");
    const navbarLinks = document.querySelectorAll("#navbar-links a");

    if (window.scrollY > 100) { // Atur jarak scroll sesuai kebutuhan
      navbar.classList.remove("bg-transparent");
      navbar.classList.add("bg-black", "shadow-lg");

      // Ubah logo menjadi logo-scrolled.png
      navbarLogo.src = "image/logo2.png";

      // Ubah warna teks dan link menjadi hitam
      navbarText.classList.remove("text-black");
      navbarText.classList.add("text-white");

      navbarLinks.forEach(link => {
        link.classList.remove("text-black");
        link.classList.add("text-white");
      });
    } else {
      navbar.classList.remove("bg-white", "shadow-lg");
      navbar.classList.add("bg-transparent");

      // Kembalikan logo ke logo.png
      navbarLogo.src = "image/logo.png";

      // Kembalikan warna teks dan link menjadi putih
      navbarText.classList.remove("text-white");
      navbarText.classList.add("text-black");

      navbarLinks.forEach(link => {
        link.classList.remove("text-white");
        link.classList.add("text-black");
      });
    }
  });