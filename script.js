 
 
//  main animation
 const navbar = document.querySelector(".main-navbar");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 20) {
      navbar.classList.add("scrolled");
      
    } else {
      navbar.classList.remove("scrolled");
    }
  });
      const backToTop = document.querySelector(".back-to-top");

    window.addEventListener("scroll", function () {
      if (window.scrollY > 300) {
        backToTop.style.opacity = "1";
        backToTop.style.visibility = "visible";
      } else {
        backToTop.style.opacity = "0";
        backToTop.style.visibility = "hidden";
      }
    });


// offcanvas toggler...


     const offcanvas = document.getElementById('mobileMenu');
  const toggleBtn = document.getElementById('menuToggle');

  offcanvas.addEventListener('show.bs.offcanvas', function () {
    toggleBtn.style.display = 'none';   // completely remove
  });

  offcanvas.addEventListener('hidden.bs.offcanvas', function () {
    toggleBtn.style.display = 'block';  // show again
  });
 



 document.addEventListener("DOMContentLoaded", function () {

  const dtoggleBtn = document.getElementById("servicesToggle");
  const submenu = document.getElementById("servicesMMenu");

  dtoggleBtn.addEventListener("click", function (e) {
    e.preventDefault();

    if (submenu.classList.contains("show")) {
      submenu.classList.remove("show");
    } else {
      submenu.classList.add("show");
    }

  });

});

