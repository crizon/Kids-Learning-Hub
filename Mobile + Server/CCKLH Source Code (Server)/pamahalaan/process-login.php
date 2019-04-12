<?php

	require_once('../connector.php');

	$Tusername = $_POST['txtTemail'];
	$Tpassword = $_POST['txtTpassword'];


	$sql=$db->prepare("SELECT * FROM teachers WHERE Temail=:txtTemail AND Tpassword=:txtTpassword");
	$sql->bindParam(':txtTemail',$Tusername);
	$sql->bindParam(':txtTpassword',$Tpassword);
	$sql->execute();


	$wee=$sql->fetch(PDO::FETCH_ASSOC); /*ibabato ko kasi sa xteacher session yung teacher ID*/



	if($row=$sql->rowCount()<>0){
		session_start();
		$_SESSION['teacher_account']=true;

		$_SESSION['xteacherID']= $wee['teacherID']; /*galing sa table yung teacher ID*/

		header('location:teacherHUB.php');
	}else{
		header('location:login-BAD.php');
	}



?>

