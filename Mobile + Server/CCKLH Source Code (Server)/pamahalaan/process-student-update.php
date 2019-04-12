
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


if(isset($_POST['submit'])){
	$studenting=$db->prepare("UPDATE students SET Sfname=:Zfname,Smname=:Zmname,Slname=:Zlname,Ssufname=:Zsuffix,Sdob=:Zdob,Sgender=:Zgender,Sguardian=:Zguardian,Sguardiannum=:Zcontact WHERE studentID=:ZSID");
			

			$studenting->bindparam(':ZSID',$SSID);
			$studenting->bindparam(':Zfname',$SSfname);
			$studenting->bindparam(':Zmname',$SSmname);
			$studenting->bindparam(':Zlname',$SSlname);
			$studenting->bindparam(':Zsuffix',$SSsuffix);
			$studenting->bindparam(':Zdob',$SSdob);
			$studenting->bindparam(':Zgender',$SSgender);
			$studenting->bindparam(':Zguardian',$SSguardian);
			$studenting->bindparam(':Zcontact',$SScontact);


			$studenting->execute();






	header('location:teacherHUB.php');
}
 ?>

<!-- may error tayo sa registration pag doble primary key, kailangan ierror handling exception ek ek -->