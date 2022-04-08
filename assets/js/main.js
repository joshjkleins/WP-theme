document.addEventListener("DOMContentLoaded", function() {
  var header = document.querySelector('header')

  $('.faq-title').on('click', function() {
    $(this).next().slideToggle();
    $(this).toggleClass('active');
  })

  if(window.scrollY < 50){
    header.classList.add("top")
  }  else {
    header.classList.remove("top")
  }

  var bottomOfWindow = window.scrollY + window.innerHeight
  $(".animate").each(function( index ) {
    if ($(this).offset().top < bottomOfWindow) {
      $(this).removeClass('animate')
      $(this).addClass('animated')
    }
  });

  $('.hamburger-menu, .close-mobile, .site-overlay').on('click', function() {
    $('.mobile-menu').toggleClass('active')
    $('.site-overlay').toggleClass('active')
  })


  window.addEventListener("scroll", function(){
    //Determine header visibility
    if(window.scrollY < 50){
      header.classList.add("top")
    }  else {
      header.classList.remove("top")
    }

    //Animate as element comes into viewport
    bottomOfWindow = window.scrollY + window.innerHeight
    $(".animate").each(function( index ) {
      if ($(this).offset().top < bottomOfWindow) {
        $(this).removeClass('animate')
        $(this).addClass('animated')
      }
    });
  })

})

