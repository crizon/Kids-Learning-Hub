
<?php
require_once('connector.php');

$username = $_GET['uname'];
								
								/*pang reset ng stats ng guest account*/
								$guestie = '87654321';
								$comparator = $username;


								if ($comparator == $guestie) {

									$meowming = $db->prepare("UPDATE students SET starpoints=0,totalpoints=0 WHERE studentID=:guester");
									$meowming->bindParam(':guester',$guestie);
									$meowming->execute();
								} 
								/*pang reset ng stats ng guest account*/
								/* if ($comparator = $guestie) {    ONLY mali sabi ng PHP Checker*/






$sql=$db->prepare("SELECT * FROM students WHERE studentID=:uname");
$sql->bindParam(':uname',$username);
$sql->execute();

$wee=$sql->fetch(PDO::FETCH_ASSOC);
$teacherZxs=$wee['SteacherID'];


if($row=$sql->rowCount()<>0){

	session_start();

	$_SESSION['account']=true;

	$_SESSION['welcomename']= $username;

		/*para pumalo sa dashboard ng teacher yung login*/
			$xwxwxw = $db->prepare("UPDATE teachers SET Tnumofonline = Tnumofonline + 1 WHERE teacherID=:titzer");
			$xwxwxw->bindParam(':titzer',$teacherZxs);
			$xwxwxw->execute();
		/*para pumalo sa dashboard ng teacher yung login*/


	header('location:dragonserver.php');
}

else{
			header('location:errorlogin.php');
	}



?>

 