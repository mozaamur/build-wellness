<?php
// Retrieve the page name from the form submission 
$pageName = $_GET['page'];

// Assuming you have found the desired page, redirect the user to it
header("Location: $pageName.html");
exit;
?>
