// variables
var countdown = document.getElementById('countdown');
var timer;
var specs = {
  'radius': 50,
  'centerX': 50,
  'centerY': 50,
  'thickness': 10,
  'offset': -Math.PI/2,
  'color': '#f00',
  'bgColor': '#ccc',
  'idFont': 'small-caps 400 10px Verdana',
  'valueFont': 'bold 30px Verdana',
  'fontColor': '#000'
};
var time = {
  'millisecond': 1000,
  'second': 60,
  'minute': 60,
  'hour': 24,
  'day': 365
}
var info = {};

// countdown init
var endCountdown = new Date();
var timeLeftMinutes = countdown.dataset.minutesLeft || 30;
var resetDelayMinutes = countdown.dataset.resetDelay || 0;
var timeLeft = timeLeftMinutes * time.second * time.millisecond;
var resetDelay = resetDelayMinutes * time.second * time.millisecond;
var newTime;
if(!localStorage.getItem('countdownTimer')) {
  // timer not started yet
  newTime = endCountdown.getTime() + timeLeft;
  localStorage.setItem('countdownTimer', newTime);
  console.log("Set new timer");
} else if((parseInt(localStorage.getItem('countdownTimer')) + resetDelay) < endCountdown.getTime()) {
  // timer is ended, delay is over, so reset timer
  newTime = endCountdown.getTime() + timeLeft;
  localStorage.setItem('countdownTimer', newTime);      
  console.log("Restart timer");      
} else {
  // restore timer from local storage
  newTime = localStorage.getItem('countdownTimer');
  console.log("Restore timer from local storage");
}
endCountdown.setTime(newTime);
console.log("Timer end on: " + endCountdown);

// canvas init
var canvasElements = Array.prototype.slice.call(document.querySelectorAll('canvas'));
var canvasCtx = [];
canvasElements.forEach( function(canvas, index) {
  canvas.width = specs.centerX * 2;
  canvas.height = specs.centerY * 2;
  canvasCtx[index] = canvas.getContext('2d');
  var name = canvas.id;
  info[name] = {'ctx': index, 'value': 0, 'prevValue': -1};
});
var canvasKeys = Object.keys(info);
info.days.denominator = time.day;
info.hours.denominator = time.hour;
info.minutes.denominator = time.minute;
info.seconds.denominator = time.second;

// show remaining time
function showRemainingTime() {
  var now = new Date();
 
  // calculate new values
  var secondsLeft = Math.max(0, Math.floor((endCountdown - now)/1000));
  info.days.value = Math.floor(secondsLeft / (time.second*time.minute*time.hour));
  info.hours.value = Math.floor((secondsLeft % (time.second*time.minute*time.hour)) / (time.second*time.minute));
  info.minutes.value = Math.floor((secondsLeft % (time.second*time.minute)) / time.second);
  info.seconds.value = Math.floor(secondsLeft % time.second);
  
  // update changed values only
  canvasKeys.forEach( function(key) {
    if(info[key].value !== info[key].prevValue){
      if(key === 'days' && info[key].value > 365) {
        // exception if days is more than 1 year
        draw(canvasCtx[info[key].ctx], 1, key, info[key].value);
      } else {
        draw(canvasCtx[info[key].ctx], info[key].value/info[key].denominator, key, info[key].value);
      }
      info[key].prevValue = info[key].value;
    }
  });
}

// draw function
function draw(ctx, part, id, value) {
  // calculate angles
  var start = specs.offset;
  var between = 2 * Math.PI * part + specs.offset;
  var end = 2 * Math.PI + specs.offset;
  
  // clear canvas
  ctx.clearRect(0, 0, specs.centerX * 2, specs.centerY * 2);
  
  // draw remaining %
  ctx.fillStyle = specs.color;
  ctx.beginPath();
  ctx.arc(specs.centerX, specs.centerY, specs.radius, start, between);
  ctx.arc(specs.centerX, specs.centerY, specs.radius - specs.thickness, between, start, true);
  ctx.closePath();
  ctx.fill();

  // draw bg
  ctx.fillStyle = specs.bgColor;
  ctx.beginPath();
  ctx.arc(specs.centerX, specs.centerY, specs.radius, between, end);
  ctx.arc(specs.centerX, specs.centerY, specs.radius - specs.thickness, end, between, true);
  ctx.closePath();
  ctx.fill();
  
  // draw text
  ctx.fillStyle = specs.fontColor;
  ctx.font = specs.idFont;
  ctx.fillText(id, specs.radius - ctx.measureText(id).width/2, specs.thickness*3);
  ctx.font = specs.valueFont;
  ctx.fillText(value, specs.radius - ctx.measureText(value).width/2, specs.radius*2 - specs.thickness*3);
}

// change countdown every second
timer = setInterval(showRemainingTime, 1000);