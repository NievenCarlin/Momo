window.addEventListener('scroll', function() {
    var nav = document.querySelector('nav');
    var scrolled = window.scrollY;
  
    if (scrolled > 50) {
      nav.classList.add('navbar-scrolled');
    } else {
      nav.classList.remove('navbar-scrolled');
    }
    
    if (nav.classList.contains('navbar-scrolled')) {
      nav.style.color = "black";
    } else {
      nav.style.color = "black";
    }
  });
  