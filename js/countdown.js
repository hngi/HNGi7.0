$(document).ready(function () {
  "use strict";
  (function ($) {
    $.fn.float = function (number) {
      if (number < 10) {
        return "0" + number;
      } else {
        return number;
      }
    };
  }(jQuery));

  (function ($) {
    $.countdown = function (time) {
      const cname = ".countdown1"; // class name of the countdown div
      const newdate = new Date(time).getTime();
      const countdown = setInterval(function () {
        const now = new Date().getTime();
        const dif = newdate - now;
        const days = Math.floor(dif / (1000 * 60 * 60 * 24));
        const hours = Math.floor((dif % (1000 * 60 * 60 * 24) / (1000 * 60 * 60)));
        const minutes = Math.floor((dif % (1000 * 60 * 60) / (1000 * 60)));
        const seconds = Math.floor((dif % (1000 * 60) / (1000)));
        $(cname + ' .seconds').css('stroke-dashoffset', 440 - (seconds * 7.333));
        $(cname + ' .s-inner').text($(seconds).float(seconds));
        $(cname + ' .mins').css('stroke-dashoffset', 440 - (minutes * 7.333));
        $(cname + ' .m-inner').text($(minutes).float(minutes));
        $(cname + ' .hours').css('stroke-dashoffset', 440 - (hours * 18.333));
        $(cname + ' .h-inner').text($(hours).float(hours));
        $(cname + ' .days').css('stroke-dashoffset', days);
        $(cname + ' .d-inner').text($(days).float(days));
        if (dif <= 0) {
          clearInterval(countdown);
          $(cname + ' .seconds').css('stroke-dashoffset', 440);
          $(cname + ' .s-inner').html("");
          $(cname + ' .minutes').css('stroke-dashoffset', 440);
          $(cname + ' .m-inner').html("");
          $(cname + ' .hours').css('stroke-dashoffset', 440);
          $(cname + ' .h-inner').html("");
          $(cname + ' .days').css('stroke-dashoffset', 440);
          $(cname + ' .d-inner').html("");
          $(cname + ' .message').html("The Internship is On!");
        }
      }, 500);
    };
  }(jQuery));
  const startDate = document.getElementById("startDate").innerHTML;
  const startTime = document.getElementById("startTime").innerHTML;

  $.countdown(startDate + " " + startTime);
  // $.countdown("January1, 2020 09:00:00");
  
});