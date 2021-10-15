//DARK MODE TOGGLE
const checkbox = document.getElementById('checkbox');

checkbox.addEventListener('change', ()=>{
  console.log("changed");
  $(".darkModeBody").toggleClass("light-mode-body");
  $(".darkModeText").toggleClass("light-mode-text");
});

$(".skillsCard").hover( function() {
  $('.skillsLogo', this).toggleClass('hide');
  $('.card-title', this).toggleClass('hide');
  $('.skillsText', this).toggleClass('show');  
  $(this).css('height', 'auto');
});

$( ".skillsCard" ).mouseleave( function() {
  $(this).css('height', '320px');
});




//TAKES YOU TO AN ID ANCHOR ON EACH PAGE
$("#aboutMeLink").click(function() {
  $('html, body').animate({
      scrollTop: $("#aboutMeText").offset().top -300
  }, 1000);
});


$("#viewAll").click(function() {
  $('html, body').animate({
      scrollTop: $("#portfolioTitle").offset().top - 50
  }, 1000);
});

$("#contactLink").click(function() {
  $('html, body').animate({
      scrollTop: $("#contact").offset().top - 0
  }, 1000);
});

$("#aboutBounceBtn").click(function() {
  $('html, body').animate({
      scrollTop: $("#skills").offset().top - 0
  }, 2000);
});


//BACK TO TOP BUTTON THAT IS HIDDEN AND SHOWN AT CERTAIN PX DOWN THE PAGE
backToTop = document.getElementById("backToTop");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if ((document.documentElement.scrollTop > 10) && (document.documentElement.scrollTop < 8400)) {
    backToTop.style.opacity = 1;
  }  
  else {
    backToTop.style.opacity = 0;
  }
}

function scrollFunctionHide() {
  if (document.body.scrollTop >= 9000 || document.documentElement.scrollTop >= 9000) {
    backToTop.style.display = "none";
  }
}
scrollFunctionHide();

// When the user clicks on the button, scroll to the top of the document SMOOTHLY
function topFunction() {
  window.scrollTo({top: 0, behavior: "smooth"});
}



//CONTACT SUBMIT BUTTON
$(document).ready(function clearForm(){
  $("#contactSubmitBtn").click(function(){
      $("#form").trigger("reset");
  });
  
});


//ENABLING THE SEND MESSAGE BUTTON ONCE INPUT FIELDS ARE FILLED
function manage() {
  var bt = document.getElementById('contactSubmitBtn');
  if (nameInput.value != '' && messageInput.value != '') 
  {
      bt.disabled = false;
  }
  else {
      bt.disabled = true;
  }
}

//GALLERY MODAL FOR SMART MIRROR PICTURES
let modalId = $('#image-gallery');


$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when you're at either end of the gallery
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// LEFT AND RIGHT ARROW KEYS TO SCROLL THROUGH IMAGES
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    // e.preventDefault(); // prevent the default action (scroll / move caret)
  });


  //CLOSES THE NAVBAR WHEN A LINK IS CLICKED
$('.navbar-nav>li>a').on('click', function(){
  $('.navbar-collapse').collapse('hide');
});


//LOADING DIFFERENT HOME PAGE DEPENDING ON SCREEN SIZE BOTH ON LOAD AND ON RESIZE

// window.onload = function() {

//   var page = window.location.pathname;
//   var SDB = "/portfolioSDB.php";
//   var CC = "/portfolioCineCopters.php";
//   var TJ = "/portfolioTrainerJo.php";
//   var EA = "/portfolioEA.php";

//   if (window.innerWidth > 960 && page != "/index.php" && page != SDB) {
//     window.location.href = "/index.php";
// } 

// if (window.innerWidth < 960 && page != "/home.php" && page != SDB) {
//   window.location.href = "/home.php";
// } 

// } 



// window.onresize = function(event) {
//   var page = window.location

//   if (window.innerWidth > 960 && page != "http://localhost:8888/index.php") {
//     window.location.href = "/index.php";
// } 

// if (window.innerWidth < 960 && page != "http://localhost:8888/home.php") {
//   window.location.href = "/home.php";
// } 

// }








