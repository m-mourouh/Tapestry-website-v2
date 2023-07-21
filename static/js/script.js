// Swiper Slider
var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  centeredSlides: true,
    effect: "fade",
    autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  });
  var swiper = new Swiper(".myProducts", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    breakpoints: {
      // when window width is >= 320px
      200: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      767: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      // when window width is >= 640px
      992: {
        slidesPerView: 3,
        spaceBetween: 40
      }
    },
    // pagination: {
    //   el: '.swiper-pagination',
    //   type: 'bullets',
    // },
    loop: true,
    autoplay: true ,
    loopFillGroupWithBlank: true,
    // navigation: {
    //   nextEl: ".swiper-button-next",
    //   prevEl: ".swiper-button-prev",
    // },
  });
// AOS Library 
// AOS.init();

// Navigaton bar
$(document).ready(function(){
    let divs = document.querySelectorAll('div');
    divs[divs.length - 1].remove() ;
   setTimeout(function(){$('.scene').slideUp('slow')},800);
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
  
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });


  });

 // contact form

 function sendEmail() {
  var name = $("#name");
  var email = $("#email");
  var tel = $("#tel");
  var subject = $("#subject");
  var body = $("#message");

  if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(tel) && isNotEmpty(subject) && isNotEmpty(body)) {
      $.ajax({
         url: 'sendEmail.php',
         method: 'POST',
         dataType: 'json',
         data: {
             name: name.val(),
             email: email.val(),
             tel: tel.val(),
             subject: subject.val(),
             body: body.val()
         }, success: function (response) {
              $('#contact-form')[0].reset();
              $('.sent-notification').addClass("alert alert-success").text("Votre message  a été envoyé avec succes");
         }
      });
  }
}

function isNotEmpty(caller) {
  if (caller.val() == "") {
      caller.css('border', '1px solid red');
      return false;
  } else
      caller.css('border', '');

  return true;
}
     