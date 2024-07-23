<html>
<head>
<title>Cookie Example</title>
</head>
<body>
<h2>Set and Access Cookies</h2>
<?php
if (isset($_COOKIE['user'])) {
$username = $_COOKIE['user'];
echo "<p>Welcome back, $username!</p>";
}
else {
echo "<p>Enter your username to set a cookie:</p>";
echo '<form method="POST" action="">
<input type="text" name="username" placeholder="Enter your username">
<input type="submit" name="setCookie" value="Set Cookie">
</form>';
if (isset($_POST['setCookie'])) {
$username = $_POST['username'];
setcookie('user', $username, time() + 3600); // Set a cookie for 1 hour
echo "<p>Cookie set successfully! Please refresh the page.</p>";
}
}
?>
</body>
</html>