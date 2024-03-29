window.addEventListener('scroll', function() {
    if (window.scrollY > 150) {
      document.querySelector('#nav-bar').style.opacity = 0.9;
    } else {
      document.querySelector('#nav-bar').style.opacity = 1;
    }
  });


// Smooth Scrolling jquery
$('#nav-bar a').on('click', function(event) {
    if (this.hash !== '') {
      event.preventDefault();
  
      const hash = this.hash;
  
      $('html, body').animate(
        {
          scrollTop: $(hash).offset().top - 100
        },
        800
      );
    }
  });
