<?php
session_start();
error_reporting(0);

if (isset($_POST["submit"])) {
	$_SESSION['age'] = $_POST['age'];
	$_SESSION['situation'] = $_POST['situation'];

	if (!$_POST['age']) {
		$errAge = 'Geef aan of je ouder bent dan 18';
	}

	if (!$_POST['situation']) {
		$errSituation = 'Geef aan of je naar school gaat, een baan hebt of beide doet';
	}

	if (intval($_POST['human']) !== 5) {
		$errHuman = 'Je anti-spam is fout';
	}

	if (!$errAge && !$errSituation && !$errHuman) {
		// Alles is OK, door naar de vragenlijst
		header('Location: questionnaire.php');
		exit();
	}
}

include('inc/header.php');

require('views/start.view.php');

include('inc/footer.php');

