
<?php
require_once('connector.php');

$username = $_POST['uname'];


$sql=$db->prepare("SELECT * FROM students WHERE studentID=:uname");
$sql->bindParam(':uname',$username);
$sql->execute();

$wee=$sql->fetch(PDO::FETCH_ASSOC);
$teacherZxs=$wee['SteacherID'];
	$xwxwxw = $db->prepare("UPDATE teachers SET Tnumofonline = Tnumofonline - 1 WHERE teacherID=:titzer");
	$xwxwxw->bindParam(':titzer',$teacherZxs);
	$xwxwxw->execute();







session_start();
session_destroy();

header('location:index.php');

?>

