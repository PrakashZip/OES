<?php
// session_start();
// if (isset($_SESSION['email'])) {
//     session_destroy();
// }
// $ref = @$_GET['q'];
// header("location:$ref");

session_start();

// Check if the 'email' session variable is set
if (isset($_SESSION['email'])) {
    // If set, destroy the session
    session_destroy();
}

// Get the value of 'q' from the URL query parameters
$ref = isset($_GET['q']) ? $_GET['q'] : '';

// Redirect the user to the specified location
header("location: $ref");
exit(); // Ensure script execution stops after redirection

?>