    const hamburger = document.getElementById("hamburger");
    const aside = document.getElementsByTagName("aside")[0];
    const hide_aside = document.getElementsByClassName("hide-aside")[0];
    var mediaQuery = window.matchMedia("(max-width: 960px)");
    var slideIndex = 0;

    showSlides(mediaQuery);
    mediaQuery.addListener(showSlides);


    //const cards = document.getElementsByClassName("card1");
    function showSlides(mediaQueryx) {
        var i;

        var cards = document.getElementsByClassName("card1");
        if (mediaQuery.matches) {

            //var dots = document.getElementsByClassName("dot");
            for (i = 0; i < cards.length; i++) {
                cards[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > cards.length) { slideIndex = 1 }

                cards[i].style.display = "block";
            }

        }

    
    //handle sroll to top arrow
  $('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
     target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { 
            return false;
          } else {
            $target.attr('tabindex','-1'); 
            $target.focus(); 
          };
        });
      }
    }
  });

        //darkangel cc.
        const daysElem = document.querySelector('#days'), //Edit this selector to pick the days element in your HTML.
    hoursElem = document.querySelector('#hours'),
    minutesElem = document.querySelector('#minutes'),
    secondsElem = document.querySelector('#seconds'),
    countDownWrapper = document.querySelector('.countdown'); //This is the counter that wraps all 4 numbers.

  // Set the date we're counting down to
  var countDownDate = new Date("Jan 1, 2020 22:0:0").getTime();

  function updateClock() {
  // Get today's date and time
  var now = new Date().getTime();
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
  // Time calculations for days, hours, minutes and seconds
  var daysLeft = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hoursLeft = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutesLeft = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var secondsLeft = Math.floor((distance % (1000 * 60)) / 1000);
    // Display the results.
    daysElem.innerText = daysLeft;
    hoursElem.innerText = hoursLeft;
    minutesElem.innerText = minutesLeft;
    secondsElem.innerText = secondsLeft;
  // If the count down is finished, write some text
  if (distance < 0) {
    document.getElementById("demo").innerHTML = "EXPIRED";
    return;
  }
  setTimeout(updateClock, 1000);
  }
  updateClock();
