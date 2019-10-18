const dummyMentors = 
[
	{
		id: "323wew1",
		name: "Ima Essien",
		email: "Ima@gmail.com",
		age: 22,
		number: "+2348043434788",
		track: "FRONTEND",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Edo"
	},
	{
		id: "323wew2",
		name: "Amaka Ekwunife",
		email: "amaka@gmail.com",
		age: 25,
		number: "+234804343989",
		track: "FRONTEND",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Lagos"
	},
	{
		id: "323wew3",
		name: "Jane Kimano",
		email: "jane@gmail.com",
		age: 19,
		number: "+2348043434788",
		track: "UI/UX",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Imo"
	},
	{
		id: "323wew4",
		name: "Levon Aronian",
		email: "levon@gmail.com",
		age: 32,
		number: "+2348043434788",
		track: "BACKEND",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Lagos"
	},
	{
		id: "323wew5",
		name: "Emeka Ike",
		email: "mekus@gmail.com",
		age: 20,
		number: "+2348043434788",
		track: "BACKEND",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Imo"
	},
	{
		id: "323wew6",
		name: "Theresa Nde",
		email: "theresande@gmail.com",
		age: 28,
		number: "+2349024271930",
		track: "BACKEND",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Anambra"
	},
	{
		id: "323wew7",
		name: "Jimmy Elohor",
		email: "jimmy@gmail.com",
		age: 22,
		number: "+2348043434788",
		track: "ML",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Edo"
	},
	{
		id: "323wew8",
		name: "Lilian Ifeoma",
		email: "ifycodes@gmail.com",
		age: 18,
		number: "+2348043434788",
		track: "FRONTEND",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Lagos"
	},
	{
		id: "323wew9",
		name: "Magnus Carlsen",
		email: "maggie@gmail.com",
		age: 29,
		number: "+2348043434788",
		track: "UI/UX",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Kaduna"
	},
	{
		id: "323wew10",
		name: "Hikaru Nakamura",
		email: "hikaru@gmail.com",
		age: 30,
		number: "+2348043434788",
		track: "PM",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Lagos"
	},
	{
		id: "323wew11",
		name: "Seyi Adetoyun",
		email: "seyi@gmail.com",
		age: 24,
		number: "+2348043434788",
		track: "ML",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Ogun"
	},
	{
		id: "323wew12",
		name: "Mike Yinka",
		email: "yinka@gmail.com",
		age: 25,
		number: "+2348043434788",
		track: "FRONTEND",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Lagos"
	},
	{
		id: "323wew13",
		name: "Bobby Fischer",
		email: "fischer@gmail.com",
		age: 35,
		number: "+2348043434788",
		track: "UI/UX",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Lagos"
	},
	{
		id: "323wew14",
		name: "Mercy Johnson",
		email: "mercyj@gmail.com",
		age: 23,
		number: "+2348043434788",
		track: "FRONTEND",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Lagos"
	},
	{
		id: "323wew15",
		name: "Taraji Henson",
		email: "thenson@gmail.com",
		age: 29,
		number: "+2348043434788",
		track: "PM",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Lagos"
	}
];


const handleMentorClick = e =>
{
	let id = e.target.getAttribute("data-owner");
	let mentor = dummyMentors.find(a => a.id === id);
	document.getElementById("no-mentor").style.display = "none";
	document.getElementById("details-name").textContent = mentor.name;
	document.getElementById("details-email").textContent = mentor.email;
	document.getElementById("details-age").textContent = mentor.age;
	document.getElementById("details-number").textContent = mentor.number;
	document.getElementById("details-track").textContent = mentor.track;
	document.getElementById("details-state-of-residence").textContent = mentor.location;

	let link = document.createElement("a");
	link.setAttribute("href", mentor.CVlink);
	link.setAttribute("target", "_blank");
	link.textContent = mentor.CVlink;
	let linkHolder = document.getElementById("details-CV-link");
	while(linkHolder.firstChild)
		linkHolder.removeChild(linkHolder.firstChild);
	linkHolder.appendChild(link);

	if (screen.width <= 860)
	{
		document.getElementById("details-section").style.left = 0;
	}
}

document.getElementById("details-back").addEventListener("click", e => 
	document.getElementById("details-section").style.left = "100vw");

document.getElementById("details-return").addEventListener("click", e => 
	document.getElementById("details-section").style.left = "100vw");

window.addEventListener("resize", e => 
{
	if (screen.width >= 860)
		document.getElementById("details-section").style.left = "77vw"
	else
		document.getElementById("details-section").style.left = "100vw"
})

const populateMentors = mentors =>
{
	const container = document.getElementById("mentor-section");
	while(container.firstChild)
		container.removeChild(container.firstChild);
	let count = 1;
	for (let mentor of mentors)
	{
		let mentorDiv = document.createElement("div");
		mentorDiv.setAttribute("data-owner", mentor.id);
		mentorDiv.classList.add("mentor");
		let name = document.createElement("span");
		name.setAttribute("data-owner", mentor.id);
		name.classList.add("name");
		name.textContent = `${count}. ${mentor.name}`;
		let email = document.createElement("span");
		email.setAttribute("data-owner", mentor.id);
		email.classList.add("email");
		email.textContent = mentor.email;
		let track = document.createElement("span");
		track.setAttribute("data-owner", mentor.id);
		track.classList.add("track");
		track.textContent = mentor.track;

		mentorDiv.appendChild(name);
		mentorDiv.appendChild(email);
		mentorDiv.appendChild(track);
		mentorDiv.addEventListener("click", handleMentorClick);

		container.appendChild(mentorDiv);
		count++;
	}
}

populateMentors(dummyMentors);