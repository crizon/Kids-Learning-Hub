
 <?php  
require_once('../connector.php');



$TTID = $_POST['xID'];
$TTclass = $_POST['xclass'];
$TTfname = $_POST['xfname'];
$TTlname = $_POST['xlname'];
$TTgender = $_POST['xgender'];
$TTmobile = $_POST['xmobile'];
$TTemail = $_POST['xemail'];
$TTpassword = $_POST['xpassword'];


if(isset($_POST['submit'])){
	$teachering=$db->prepare("INSERT INTO teachers(teacherID,NameOfClass,Tfname,Tlname,Tgender,Tmobilenum,Temail,Tpassword)
		VALUES(:ZTid,:ZTclass,:ZTfname,:ZTlname,:ZTgender,:ZTmobile,:ZTemail,:ZTpassword)");
			

			$teachering->bindparam(':ZTid',$TTID);
			$teachering->bindparam(':ZTclass',$TTclass);
			$teachering->bindparam(':ZTfname',$TTfname);
			$teachering->bindparam(':ZTlname',$TTlname);
			$teachering->bindparam(':ZTgender',$TTgender);
			$teachering->bindparam(':ZTmobile',$TTmobile);
			$teachering->bindparam(':ZTemail',$TTemail);
			$teachering->bindparam(':ZTpassword',$TTpassword);

			$teachering->execute();



	$xwxwxw = $db->prepare("UPDATE dashboardesu SET TotalTeachers = TotalTeachers + 1");
	$xwxwxw->execute();

	header('location:registration-GOOD.php');
}else{
	header('location:registration-BAD.php');
}
 ?>

<!-- may error tayo sa registration pag doble primary key, kailangan ierror handling exception ek ek -->