<?php
$dbh= new PDO("mysql:host=localhost;dbname=intern", "root","");
if(isset($_POST['btn'])){ 
$emp_name=$_POST["emp_name"];
$emp_id=$_POST["emp_id"];
$name =$_FILES['myfile']['name'];
$type =$_FILES['myfile']['type']; 
$feedback=$_POST["feedback"];
$data = file_get_contents($_FILES['myfile']['tmp_name']);
$stmt = $dbh->prepare("insert into myblob values('',?,?,?,?,?,?)");

$stmt->bindParam(1, $name);
 $stmt->bindParam(2,$type);
$stmt->bindParam(3, $data);
$stmt->bindParam(4,$emp_name);
$stmt->bindParam(5,$emp_id);
$stmt->bindParam(6,$feedback);
$stmt->execute();
}
?>

<h1>Thank you for registration</h1>
<a href="login.html">back_to_login</a>