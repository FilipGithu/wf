
<?php

session_start();

echo 'Name for session' . $_GET['nameforsession'];
$_SESSION['nameforsession'] = $_GET['nameforsession'];