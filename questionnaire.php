<?php

if (isset($_POST["submit"])) {
    if (1 === 1) {
		// Alles is OK, door naar het resultaat
        header('Location: result.php');
        exit();
    }
}

include('inc/header.php');

require('views/questionnaire.view.php');

include('inc/footer.php');
