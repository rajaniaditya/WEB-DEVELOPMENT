<?php
error_reporting(0);
include"connection.inc"; 
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="form.php" method="post">
<h2 style="text-align: center;">Student details- INSERT</h2>
<h2>Insert new student details.</h2>
Enrollment No: <input type="text" name="eno">
<br>
Name: <input type="text" name="name">
<br>
contect No: <input type="text" name="cno">
<br>
Email id: <input type="text" name="eid">
<br>
<input style="margin-left: 60px; margin-top: 20px; border-color: red;" type="submit" name="INSERT" value="INSERT">
<br>
<br>
<h2>Inserted Student Details</h2>
<table border="1" align="center" style="">
<tr>
<th>Enrollment No</th>
<th>Name</th>
<th>Contect No</th>
<th>Email id</th>
<th>Action</th>
</tr>
<?php
$qry = "select * from studentdetails";
$data = mysqli_query($conn,$qry);
$total = mysqli_num_rows($data);
//echo $total;
if($total!=0)
while ($row=$data->fetch_assoc()) 
echo "
<tr>
<td>".$row['eno']."</td>
<td>".$row['name']."</td>
<td>".$row['cno']."</td>
<td>".$row['eid']."</td>
<td><a href='update.php?rn=$row[eno] & nm=$row[name] & cn=$row[cno] & ei=$row[eid]'>update</a>|<a href='delete.php?rn=$row[eno]'>Delete</a></td>
</tr>
"
?>
</form>
</body>
</html>
<?php
$eno=($_POST['eno']);
$name=($_POST['name']);
$cno=($_POST['cno']);
$eid=($_POST['eid']);
//echo $eno;
//echo $name;
//echo $cno;
//echo $eid;
$qry1="insert into studentdetails values($eno,'$name','$eid',$cno)";
//echo $qry1."<BR>";
$result1=$conn->query($qry1);
?>