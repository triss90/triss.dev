const toggles = document.querySelectorAll(".toggle-w");
let label, input;

toggles.forEach((toggleW) => {
	toggleW.addEventListener("keydown", handler, false);
	toggleW.children[1].addEventListener("click", handler, false);
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
