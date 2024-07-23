<?php
session_start();
if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];
echo "Welcome back, $username!";
} else {
if (isset($_POST['login'])) {
$enteredUsername = $_POST['username'];
if ($enteredUsername === "adityarajani") {
$_SESSION['username'] = $enteredUsername;
$username = $enteredUsername;
echo "Login successful. Welcome, $username!";
} else {
echo "Invalid username. Please try again.";
}
} else {
echo '<h2>Login</h2>';
echo '<form method="POST" action="">
<label for="username">Username:</label>
<input type="text" name="username" required>
<input type="submit" name="login" value="Login">
</form>';
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Session Example</title>
</head>
<body>
</body>
</html>