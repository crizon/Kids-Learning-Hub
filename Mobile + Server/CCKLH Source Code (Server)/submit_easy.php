<?php  
require_once('connector.php');



$easyID = $_POST['xstudent'];
$easyteacher = $_POST['xteacher'];
$easyscore = $_POST['xscore'];
$easystar = $_POST['xstar'];

$easyscorey = $easyscore;



if(isset($_POST['submit'])){
	$teachering=$db->prepare("INSERT INTO leveleasy(student,teacher,easyDate,easyScore)
		VALUES(:Zid,:Zteacher,NOW(),:Zscore)");
			

			$teachering->bindparam(':Zid',$easyID);
			$teachering->bindparam(':Zteacher',$easyteacher);
			$teachering->bindparam(':Zscore',$easyscore);

			$teachering->execute();



	$xwxwxw = $db->prepare("UPDATE students SET starpoints = starpoints + :starex, totalpoints = totalpoints + :scorex WHERE studentID=:studxss");
	$xwxwxw->bindParam(':starex',$easystar);
	$xwxwxw->bindParam(':scorex',$easyscorey);
	$xwxwxw->bindParam(':studxss',$easyID);
	$xwxwxw->execute();

	
	header('location:dragonserver.php');
}else{
	header('location:x.html');
}
 ?>
