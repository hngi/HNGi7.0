const countDownDate = new Date("January 1,2020 22:0:0").getTime(); // Change later
const defaultDegStart = 45;
const activeColor = "#00AEFF";
const backColor = "rgba(240, 240, 240)";

const daySymbol = document.getElementById("day-symbol");
const hourSymbol = document.getElementById("hour-symbol");
const minuteSymbol = document.getElementById("minute-symbol");
const secondSymbol = document.getElementById("second-symbol");

const dayText = document.getElementById("day-text");
const hourText = document.getElementById("hour-text");
const minuteText = document.getElementById("minute-text");
const secondText = document.getElementById("second-text");

const startArcDays = document.getElementById("day-start");
const startArcHours = document.getElementById("hour-start");
const startArcMinutes = document.getElementById("minute-start");
const startArcSeconds = document.getElementById("second-start");

const endArcDays = document.getElementById("day-end");
const endArcHours = document.getElementById("hour-end");
const endArcMinutes = document.getElementById("minute-end");
const endArcSeconds = document.getElementById("second-end");


let x = setInterval(() => 
{
	let timeLeft = countDownDate - new Date().getTime();
	let days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
	let hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) /(1000 * 60 * 60));
	let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) /(1000 * 60));
	let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
	if (timeLeft <= 0) 
	{
		clearInterval(x);
		document.getElementById("countdown-section").innerHTML = 
			"HNG 7.0 is Here! You can go to the official page to register";
	}

	if (daySymbol.getAttribute("data-remainder") != days)
		showDay(days);
	if (hourSymbol.getAttribute("data-remainder") != hours)
		showHour(hours);
	if (minuteSymbol.getAttribute("data-remainder") != minutes)
		showMinute(minutes);
	if (secondSymbol.getAttribute("data-remainder") != seconds)
		showSecond(seconds);
}, 1000);

const showDay = days =>
{
	const totalWaitDays = 90; // Change later
	daySymbol.setAttribute("data-remainder", days);
	if (days <= totalWaitDays / 2)
		endArcDays.style.borderColor = `transparent transparent ${backColor} ${backColor}`;
	else
		endArcDays.style.borderColor = `${activeColor} ${activeColor} transparent transparent`;

	startArcDays.style.transform = `rotate(${defaultDegStart + ((totalWaitDays - days) * 4)}deg)`;
	dayText.style.left = days < 10 ? (screen.width > 860 ? "2rem" : "1.4rem") : "1rem";
	dayText.textContent = days;
}
const showHour = hours =>
{
	hourSymbol.setAttribute("data-remainder", hours);
	if (hours <= 12)
		endArcHours.style.borderColor = `transparent transparent ${backColor} ${backColor}`;
	else
		endArcHours.style.borderColor = `${activeColor} ${activeColor} transparent transparent`;

	startArcHours.style.transform = `rotate(${defaultDegStart + ((24 - hours) * 15)}deg)`;

	hourText.style.left = hours < 10 ? (screen.width > 860 ? "2rem" : "1.4rem") : "1rem";
	hourText.textContent = hours;
}
const showMinute = minutes =>
{
	minuteSymbol.setAttribute("data-remainder", minutes);
	if (minutes <= 30)
			endArcMinutes.style.borderColor = `transparent transparent ${backColor} ${backColor}`;
	else
		endArcMinutes.style.borderColor = `${activeColor} ${activeColor} transparent transparent`;

	startArcMinutes.style.transform = `rotate(${defaultDegStart + ((60 - minutes) * 6)}deg)`;
	minuteText.style.left = minutes < 10 ? (screen.width > 860 ? "2rem" : "1.4rem") : "1rem";
	minuteText.textContent = minutes;
}
const showSecond = seconds =>
{
	secondSymbol.setAttribute("data-remainder", seconds);
	if (seconds <= 30)
		endArcSeconds.style.borderColor = `transparent transparent ${backColor} ${backColor}`;
	else
		endArcSeconds.style.borderColor = `${activeColor} ${activeColor} transparent transparent`;

	startArcSeconds.style.transform = `rotate(${defaultDegStart + ((60 - seconds) * 6)}deg)`;
	secondText.style.left = seconds < 10 ? (screen.width > 860 ? "2rem" : "1.4rem") : "1rem";
	secondText.textContent = seconds;
}


window.addEventListener("resize", e =>
{
	let timeLeft = countDownDate - new Date().getTime();
	showDay(Math.floor(timeLeft / (1000 * 60 * 60 * 24)));
	showHour(Math.floor((timeLeft % (1000 * 60 * 60 * 24)) /(1000 * 60 * 60)));
	showMinute(Math.floor((timeLeft % (1000 * 60 * 60)) /(1000 * 60)));
	showSecond(Math.floor((timeLeft % (1000 * 60)) / 1000));		
})

let timeLeft = countDownDate - new Date().getTime();
showDay(Math.floor(timeLeft / (1000 * 60 * 60 * 24)));
showHour(Math.floor((timeLeft % (1000 * 60 * 60 * 24)) /(1000 * 60 * 60)));
showMinute(Math.floor((timeLeft % (1000 * 60 * 60)) /(1000 * 60)));
showSecond(Math.floor((timeLeft % (1000 * 60)) / 1000));