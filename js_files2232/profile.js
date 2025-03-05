$("#logout_button").on('click', (e) => {
	document.cookie = "__user_token__ssid=; max-age=0; path=/;";
	window.location = "login.php";
})