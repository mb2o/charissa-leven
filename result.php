<?php
session_start();
error_reporting(0);

if (isset($_QUERY["result"])) {

}

include('inc/header.php');

require('views/result.view.php');

include('inc/footer.php');
