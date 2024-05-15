<?php
// session_start();
// if (isset($_SESSION["email"])) {
// 	session_destroy();
// }
// include_once 'dbConnection.php';
// $ref = @$_GET['q'];
// $email = $_POST['email'];
// $password = $_POST['password'];

// $email = stripslashes($email);
// $email = addslashes($email);
// $password = stripslashes($password);
// $password = addslashes($password);
// $password = md5($password);
// $result = mysqli_query($con, "SELECT name FROM user WHERE email = '$email' and password = '$password'") or die('Error');
// $count = mysqli_num_rows($result);
// if ($count == 1) {
// 	while ($row = mysqli_fetch_array($result)) {
// 		$name = $row['name'];
// 	}
// 	$_SESSION["name"] = $name;
// 	$_SESSION["email"] = $email;
// 	header("location:account.php?q=1");
// } else
// 	header("location:$ref?w=Wrong Username or Password");


session_start();

if (isset($_SESSION["email"])) {
    session_destroy();
}

include_once 'dbConnection.php';

$ref = $_GET['q'] ?? null; // Null coalescing operator for better readability
$email = $_POST['email'] ?? null; // Null coalescing operator for better readability
$password = $_POST['password'] ?? null; // Null coalescing operator for better readability

if (!($email && $password)) {
    // Handle missing email or password
    header("location: $ref?w=Missing email or password");
    exit;
}

$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitize email
$password = filter_var($password, FILTER_SANITIZE_STRING); // Sanitize password
$password = md5($password); // Using md5 for hashing (not recommended, consider using stronger hashing algorithms)

// Using prepared statements to prevent SQL injection
$stmt = mysqli_prepare($con, "SELECT name FROM user WHERE email = ? AND password = ?");
mysqli_stmt_bind_param($stmt, 'ss', $email, $password);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
$count = mysqli_stmt_num_rows($stmt);

if ($count == 1) {
    mysqli_stmt_bind_result($stmt, $name);
    mysqli_stmt_fetch($stmt);
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    header("location: account.php?q=1");
    exit;
} else {
    header("location: $ref?w=Wrong Username or Password");
    exit;
}



?>
