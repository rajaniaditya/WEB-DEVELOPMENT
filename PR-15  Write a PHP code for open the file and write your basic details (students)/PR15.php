<?php
$studentName = "";
$enrollmentNo = "";
$collegeName = "";
$branchName = "";
$gender = "";
$filePath = "student_details.csv";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$studentName = $_POST["studentName"];
$enrollmentNo = $_POST["enrollmentNo"];
$collegeName = $_POST["collegeName"];
$branchName = $_POST["branchName"];
$gender = $_POST["gender"];
$file = fopen($filePath, "a");
if ($file) {
$data = [$studentName, $enrollmentNo, $collegeName, $branchName, $gender];
fputcsv($file, $data);
fclose($file);
echo "Student details have been written to $filePath successfully.";} 
else { echo "Error opening the file.";}
}
?>
<html>
<head>
<title>Student Details</title>
</head>
<body>
<h2>Enter Student Details</h2>
<form method="POST" action="">
<label for="studentName">Student Name:</label>
<input type="text" name="studentName" required><br>
<label for="enrollmentNo">Enrollment No:</label>
<input type="text" name="enrollmentNo" required><br>
<label for="collegeName">College Name:</label>
<input type="text" name="collegeName" required><br>
<label for="branchName">Branch Name:</label>
<input type="text" name="branchName" required><br>
<label for="gender">Gender:</label>
<input type="radio" name="gender" value="Male" required> Male
<input type="radio" name="gender" value="Female" required> Female<br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>