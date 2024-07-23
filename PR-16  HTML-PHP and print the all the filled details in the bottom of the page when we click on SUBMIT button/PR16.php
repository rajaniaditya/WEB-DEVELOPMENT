<html>
<head>
<title>User Details Form</title>
</head>
<body>
<h2 style="text-align: center;"><u>Class Registration Form</u></h2>
<form method="POST" action="">
<label for="name">Name:</label>
<input type="text" name="name" required><br>
<label for="email">Email:</label>
<input type="email" name="email" required><br>
<label for="age">Specific Time:</label>
<input type="text" name="age" required><br>
<label for="comments">Class details:</label>
<textarea name="comments" rows="4" cols="50"></textarea><br>
<label for="gender">Gender:</label>
<input type="radio" name="gender" value="Male" required> Male
<input type="radio" name="gender" value="Female" required> Female<br>
<input type="submit" name="submit" value="SUBMIT">
</form>
<?php
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$comments = $_POST['comments'];
$gender = $_POST['gender'];
echo "<h3>Your Given details are as:</h3>";
echo "<p>Name: $name</p>";
echo "<p>Email: $email</p>";
echo "<p>Specific Time: $age</p>";
echo "<p>Class details:</p>";
echo "<p>$comments</p>";
echo "<p>Gender: $gender</p>";
}
?>
</body>
</html>