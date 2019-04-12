<?php 

require('../connector.php');
$studendesu=$_GET['idx'];
$stmt=$db->prepare("DELETE FROM students WHERE studentID=:ZSID");
$stmt->bindparam(':ZSID',$studendesu);

$stmt->execute();

	$xwxwxw = $db->prepare("UPDATE teachers SET Tnumofstud = Tnumofstud - 1");
	$xwxwxw->execute();

header('location:teacherHUB.php');


 ?>  