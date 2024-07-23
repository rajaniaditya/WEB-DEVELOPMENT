<?php
include"connection.inc";
error_reporting(0);
$eno = intval($_GET['rn']);
$qry="select * from studentdetails where eno = $eno";
$result = $conn->query($qry);
$row = $result->fetch_assoc();
$eno = $row['eno'];
$name = $row['name'];
$cno = $row['cno'];
$eid = $row['eid'];

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="update.php" method="post">
<h2 style="text-align: center;">Student details- UPDATE</h2>
<h2>Update student details.</h2>
Enrollment No: <input type="text" name="eno" value="<?php echo $eno; ?>" readonly>
<br>
Name: <input type="text" name="name1" value="<?php echo $name; ?>">
<br>
contect No: <input type="text" name="cno1" value="<?php echo $cno; ?>">
<br>
Email id: <input type="text" name="eid1" value="<?php echo $eid; ?>">
<br>
<input style="margin-left: 60px; margin-top: 20px; border-color: red;" type="submit" name="UPDATE" value="Update"><br>
</body>
</html>
<?php

$eno=($_POST['eno']);
$name=($_POST['name1']);
$cno=($_POST['cno1']);
$eid=($_POST['eid1']);
//echo $eno;
//echo $name;
//echo $cno;
//echo $eid;

$qry1="update studentdetails set name='$name', eid='$eid', cno=$cno where eno = $eno";
//echo $qry1;
$data = mysqli_query($conn,$qry1);
//echo $data;
if($data=0)
echo "data not updated!";
else 
echo "data updated sucessfully!";
?>