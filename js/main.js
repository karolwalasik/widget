$(document).ready(function () {
	$.ajax({
		method: 'GET',
		url: '../dbh.php',
		dataType: 'json'
	}).done(function (data) {
		var random = Math.floor(Math.random() * data.users.length);
		$("#name").text(data.users[random].name);
		$("#lastname").text(data.users[random].lastname);
		$("#company").text(data.users[random].company);

	});
});
