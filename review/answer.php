
<?php
$dbh = new PDO("mysql:host=localhost; dbname=intern", "root", "");
$stat=$dbh->prepare("select * from myblob");
$stat->execute();
while($row = $stat->fetch()){
echo "<li><a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']."</a></li>";
}
?>
