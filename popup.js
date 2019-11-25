function toggleNav(navid) {
	var display = document.getElementById(navid).style.display;
	if (display == "none" || !display)
		document.getElementById(navid).style.display = "initial";
	else
		document.getElementById(navid).style.display = "none";
}
