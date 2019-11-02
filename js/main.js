/*** ANIMATION */

AOS.init();

AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
    
  
    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
  
  });

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

