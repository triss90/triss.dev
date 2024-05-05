// Initialize core app functionality
function init() {
	loadTheme();
	loadLayout();
	loadFont();
	loadFontsize();
	loadMotionPreference();
	saveFontSize();
	saveMotionPreference();
	tooltip();
	toggleButtons();
}

// Load the theme from local storage
function loadTheme() {
	const theme = localStorage.getItem("theme");
	const themeElements = document.querySelectorAll(".theme-list-item");
	if (theme) {
		document.documentElement.setAttribute("data-theme", theme);
		themeElements.forEach((element) => {
			element.classList.remove("active");
		});
		const currentThemeElement = document.querySelector(
			`button[data-theme="${theme}"]`
		);
		currentThemeElement.parentElement.classList.add("active");
	}
}

// Load the font from local storage
function loadFont() {
	const font = localStorage.getItem("font");
	const fontElements = document.querySelectorAll(".font-list-item");
	if (font) {
		document.documentElement.setAttribute("data-font", font);
		fontElements.forEach((element) => {
			element.classList.remove("active");
		});
		const currentFontElement = document.querySelector(
			`button[data-font="${font}"]`
		);
		currentFontElement.parentElement.classList.add("active");
	}
}

// Load the layout from local storage
function loadLayout() {
	const layout = localStorage.getItem("layout");
	const layoutElements = document.querySelectorAll(".layout-list-item");
	if (layout) {
		document.documentElement.setAttribute("data-layout", layout);
		layoutElements.forEach((element) => {
			element.classList.remove("active");
		});
		const currentLayoutElement = document.querySelector(
			`button[data-layout="${layout}"]`
		);
		currentLayoutElement.parentElement.classList.add("active");
	}
}

// Load the layout from local storage
function loadFontsize() {
	const fontsize = localStorage.getItem("fontsize");
	const fontsizeElement = document.querySelector("#fontSizeSlider");
	const fontsizeValue = document.querySelector(".fontsize-value");
	if (fontsize) {
		fontsizeValue.innerHTML = fontsize + "%";
		document.documentElement.setAttribute("data-fontsize", fontsize);
		fontsizeElement.value = fontsize;
	}
}

// Load Motion preference from local storage
function loadMotionPreference() {
	const motionValue = localStorage.getItem("motion");
	const motionToggle = document.querySelector("#motionPreferenceToggle");
	const motionToggleLabel = motionToggle.querySelector("label");
	const motionToggleInput = motionToggle.querySelector("input");

	console.log(motionValue);

	if (motionValue != "reduced") {
		document.documentElement.setAttribute("data-motion", "enabled");
		motionToggleLabel.setAttribute("aria-checked", "true");
		motionToggleLabel.setAttribute("aria-labelledby", "checked");
		motionToggleInput.checked = true;
	} else {
		document.documentElement.setAttribute("data-motion", "reduced");
		motionToggleLabel.setAttribute("aria-checked", "false");
		motionToggleLabel.setAttribute("aria-labelledby", "unchecked");
		motionToggleInput.checked = false;
	}
}

// Save the theme to local storage
function saveTheme(theme, e) {
	const activeElement = e.parentElement;
	const themeElements = document.querySelectorAll(".theme-list-item");
	themeElements.forEach((element) => {
		element.classList.remove("active");
	});
	activeElement.classList.add("active");
	localStorage.setItem("theme", theme);
	document.documentElement.setAttribute("data-theme", theme);
}

// Save the font to local storage
function saveFont(font, e) {
	const activeElement = e.parentElement;
	const fontElements = document.querySelectorAll(".font-list-item");
	fontElements.forEach((element) => {
		element.classList.remove("active");
	});
	activeElement.classList.add("active");
	localStorage.setItem("font", font);
	document.documentElement.setAttribute("data-font", font);
}

// Save custom font size to local storage
function saveFontSize() {
	const fontsizeSlider = document.querySelector("#fontSizeSlider");
	const fontsizeValue = document.querySelector(".fontsize-value");
	fontsizeSlider.addEventListener("input", function () {
		document.documentElement.setAttribute(
			"data-fontsize",
			fontsizeSlider.value
		);
		localStorage.setItem("fontsize", fontsizeSlider.value);
		fontsizeValue.innerHTML = fontsizeSlider.value + "%";
	});
}

// Save the layout to local storage
function saveLayout(layout, e) {
	const activeElement = e.parentElement;
	const layoutElements = document.querySelectorAll(".layout-list-item");
	layoutElements.forEach((element) => {
		element.classList.remove("active");
	});
	activeElement.classList.add("active");
	localStorage.setItem("layout", layout);
	document.documentElement.setAttribute("data-layout", layout);
}

// Save motion preference to local storage
function saveMotionPreference() {
	const toggles = document.querySelectorAll("#motionPreferenceToggle");
	let label, input;

	toggles.forEach((toggle) => {
		toggle.addEventListener("keydown", handler, false);
		toggle.children[1].addEventListener("click", handler, false);
	});

	function handler(e) {
		label = e.srcElement;
		input = label.previousElementSibling;

		if (
			(e.type == "keydown" && e.keyCode == 32 && input.disabled == false) ||
			(e.type == "click" && input.disabled == false)
		) {
			e.preventDefault();
			if (input.checked == true) {
				console.log("Checkbox is checked");
				localStorage.setItem("motion", "reduced");
				document.documentElement.setAttribute("data-motion", "reduced");
			} else {
				console.log("Checkbox is unchecked");
				localStorage.setItem("motion", "enabled");
				document.documentElement.setAttribute("data-motion", "enabled");
			}
		}
	}
}

// Toggle theme menu
function toggleThemeMenu() {
	const themeMenu = document.querySelector(".themes");
	const themeMenuClose = themeMenu.querySelector(".close");
	const themeElements = document.querySelectorAll(".themes .focus");
	const newFocus = document.querySelector(".themes .focus");
	const oldFocus = document.querySelector("#theme-toggle");

	themeMenu.classList.toggle("active");

	if (themeMenu.classList.contains("active")) {
		setTimeout(() => {
			themeElements.forEach((element) => {
				element.tabIndex = 0;
			});
			themeMenuClose.tabIndex = 0;
			newFocus.focus();
		}, 400);
		themeMenu.setAttribute("hidden", "false");
	} else {
		setTimeout(() => {
			themeElements.forEach((element) => {
				element.tabIndex = -1;
			});
			themeMenuClose.tabIndex = -1;
			oldFocus.focus();
		}, 400);
		themeMenu.setAttribute("hidden", "true");
	}
}

// Tooltip
function tooltip() {
	const tooltipElements = document.querySelectorAll("[data-tooltip]");

	tooltipElements.forEach((element) => {
		const tooltipDirection =
			element.getAttribute("data-tooltip-direction") || "top";
		const tooltipDelay =
			parseInt(element.getAttribute("data-tooltip-delay")) || 0;
		let timeoutId;

		element.addEventListener("mouseenter", handlerOn, false);
		element.addEventListener("focus", handlerOn, false);
		element.addEventListener("mouseleave", handlerOff, false);
		element.addEventListener("focusout", handlerOff, false);

		function handlerOn() {
			const tooltipText = element.getAttribute("data-tooltip");
			const tooltip = document.createElement("div");
			tooltip.classList.add("tooltip");
			tooltip.textContent = tooltipText;
			tooltip.style.transitionDelay = `${tooltipDelay}ms`;

			timeoutId = setTimeout(() => {
				switch (tooltipDirection) {
					case "left":
						tooltip.classList.add("tooltip-left");
						break;
					case "right":
						tooltip.classList.add("tooltip-right");
						break;
					case "top":
						tooltip.classList.add("tooltip-top");
						break;
					case "bottom":
						tooltip.classList.add("tooltip-bottom");
						break;
					default:
						tooltip.classList.add("tooltip-top");
						break;
				}

				element.appendChild(tooltip);
			}, tooltipDelay);
		}

		function handlerOff() {
			const tooltip = element.querySelector(".tooltip");
			if (tooltip) {
				tooltip.remove();
			}
		}
	});
}

// Smooth scroll to top
function scrollToTop() {
	window.scrollTo({
		top: 0,
		left: 0,
		behavior: "smooth",
	});
}

// Copy Content
function copyContent(elementId) {
	const content = document.getElementById(elementId).innerText;
	const textarea = document.createElement("textarea");
	textarea.value = content;
	document.body.appendChild(textarea);
	textarea.select();
	textarea.setSelectionRange(0, 99999);
	document.execCommand("copy");
	document.body.removeChild(textarea);
	console.log(content);
}

// Toggle buttons
function toggleButtons() {
	const toggles = document.querySelectorAll(".toggle");
	let label, input;

	toggles.forEach((toggle) => {
		toggle.addEventListener("keydown", handler, false);
		toggle.children[1].addEventListener("click", handler, false);
	});

	function handler(e) {
		label = e.srcElement;
		input = label.previousElementSibling;

		if (
			(e.type == "keydown" && e.keyCode == 32 && input.disabled == false) ||
			(e.type == "click" && input.disabled == false)
		) {
			e.preventDefault();
			if (input.checked == true) {
				label.setAttribute("aria-checked", "false");
				label.setAttribute("aria-labelledby", "unchecked");
				input.checked = false;
			} else {
				label.setAttribute("aria-checked", "true");
				label.setAttribute("aria-labelledby", "checked");
				input.checked = true;
			}
		}
	}
}

// Initialize the app
init();
