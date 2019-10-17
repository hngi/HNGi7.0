const dummyInterns = 
[
	{
		id: "323wew1",
		name: "James Erhabor",
		email: "jamie@gmail.com",
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
		name: "Johnson Esq",
		email: "jaycodist@gmail.com",
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
		id: "323wew12",
		name: "Bobby Fischer",
		email: "fischer@gmail.com",
		age: 35,
		number: "+2348043434788",
		track: "UI/UX",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Lagos"
	},
	{
		id: "323wew12",
		name: "Mercy Johnson",
		email: "mercyj@gmail.com",
		age: 23,
		number: "+2348043434788",
		track: "FRONTEND",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Lagos"
	},
	{
		id: "323wew12",
		name: "Taraji Henson",
		email: "thenson@gmail.com",
		age: 29,
		number: "+2348043434788",
		track: "PM",
		CVlink: "https://holder.com/sdhgshdgssds",
		location: "Lagos"
	}
];


const handleInternClick = e =>
{
	let id = e.target.getAttribute("data-owner");
	let intern = dummyInterns.find(a => a.id === id);
	document.getElementById("no-intern").style.display = "none";
	document.getElementById("details-name").textContent = intern.name;
	document.getElementById("details-email").textContent = intern.email;
	document.getElementById("details-age").textContent = intern.age;
	document.getElementById("details-number").textContent = intern.number;
	document.getElementById("details-track").textContent = intern.track;
	document.getElementById("details-state-of-residence").textContent = intern.location;

	let link = document.createElement("a");
	link.setAttribute("href", intern.CVlink);
	link.setAttribute("target", "_blank");
	link.textContent = intern.CVlink;
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

const populateInterns = interns =>
{
	const container = document.getElementById("intern-section");
	while(container.firstChild)
		container.removeChild(container.firstChild);
	let count = 1;
	for (let intern of interns)
	{
		let internDiv = document.createElement("div");
		internDiv.setAttribute("data-owner", intern.id);
		internDiv.classList.add("intern");
		let name = document.createElement("span");
		name.setAttribute("data-owner", intern.id);
		name.classList.add("name");
		name.textContent = `${count}. ${intern.name}`;
		let email = document.createElement("span");
		email.setAttribute("data-owner", intern.id);
		email.classList.add("email");
		email.textContent = intern.email;
		let track = document.createElement("span");
		track.setAttribute("data-owner", intern.id);
		track.classList.add("track");
		track.textContent = intern.track;

		internDiv.appendChild(name);
		internDiv.appendChild(email);
		internDiv.appendChild(track);
		internDiv.addEventListener("click", handleInternClick);

		container.appendChild(internDiv);
		count++;
	}
}

populateInterns(dummyInterns);
