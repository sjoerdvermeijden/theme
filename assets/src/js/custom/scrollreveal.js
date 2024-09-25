import ScrollReveal from "scrollreveal";

window.addEventListener("DOMContentLoaded", () => {
	const image = document.querySelectorAll(".js-image");
	const experience = document.querySelectorAll('.js-experience');

	const leftReveal = {
		distance: "130px",
		duration: 1000,
		origin: "left",
		delay: 40,
	};

	const rightReveal = {
		distance: "80px",
		duration: 1000,
		origin: "right",
		delay: 40,
	};

	function myFunction(x) {
		if (x.matches) {
			// If media query matches
			ScrollReveal().reveal(image, leftReveal);
			ScrollReveal().reveal(experience, leftReveal);
		}
	}

	var x = window.matchMedia("(min-width: 768px)");
	myFunction(x); // Call listener function at run time
	x.addListener(myFunction); // Attach listener function on state changes
});
