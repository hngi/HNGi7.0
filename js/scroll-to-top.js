//Get the button
var jumptotop = document.getElementById("jumptotop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 60) {
    jumptotop.style.display = "block";
  } else {
    jumptotop.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
jumptotop.addEventListener("click", function () {
  //window.scrollTo(0, 0); 

  window.scrollTo({
      top: 0,
      left: 0,
      behavior: "smooth"
  });
});