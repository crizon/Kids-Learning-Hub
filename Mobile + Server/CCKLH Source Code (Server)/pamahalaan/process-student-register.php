<?php  
require_once('../connector.php');



$SSID = $_POST['xID'];
$SSfname = $_POST['xfname'];
$SSmname = $_POST['xmname'];
$SSlname = $_POST['xlname'];
$SSsuffix = $_POST['xsuffix'];
$SSdob = $_POST['xdob'];
$SSgender = $_POST['xgender'];
$SSguardian = $_POST['xguardian'];
$SScontact = $_POST['xcontact'];
$SSteacher = $_POST['xteacher'];


if(isset($_POST['submit'])){
	$studenting=$db->prepare("INSERT INTO students(studentID,Sfname,Smname,Slname,Ssufname,Sdob,Sgender,Sguardian,Sguardiannum,SteacherID)
		VALUES(:ZSID,:Zfname,:Zmname,:Zlname,:Zsuffix,:Zdob,:Zgender,:Zguardian,:Zcontact,:Zteacher)");
			

			$studenting->bindparam(':ZSID',$SSID);
			$studenting->bindparam(':Zfname',$SSfname);
			$studenting->bindparam(':Zmname',$SSmname);
			$studenting->bindparam(':Zlname',$SSlname);
			$studenting->bindparam(':Zsuffix',$SSsuffix);
			$studenting->bindparam(':Zdob',$SSdob);
			$studenting->bindparam(':Zgender',$SSgender);
			$studenting->bindparam(':Zguardian',$SSguardian);
			$studenting->bindparam(':Zcontact',$SScontact);
			$studenting->bindparam(':Zteacher',$SSteacher);


			$studenting->execute();



	$xwxwxw = $db->prepare("UPDATE teachers SET Tnumofstud = Tnumofstud + 1");
	$xwxwxw->execute();

	header('location:registration-student-GOOD.php');
}else{
	header('location:registration-BAD.php');
}
 ?>

<!-- may error tayo sa registration pag doble primary key, kailangan ierror handling exception ek ek -->