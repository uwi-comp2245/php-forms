<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$yearOfStudy = $_POST['year_of_study'];
	$faculty = $_POST['faculty'];
	$comments = $_POST['comments'];

	include_once 'letter.view.php';
} else {
	include_once 'no-submission.view.php';
	// You could also display the form again or redirect the user to the form.
	// header('Location: index.html');
}
