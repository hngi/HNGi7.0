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
function activeDropDown(strings){
    // let collapsebtn = 'button' + strings.split('').splice(7,6).join('').charAt(0).toUpperCase() + strings.split('').splice(8,7).join('');
     //let collapseEl = document.getElementById(collapseId);
      let el = document.getElementById(strings);
      setTimeout(()=>{
        el.classList.toggle('activeHomepageDrop')}, 200);
}