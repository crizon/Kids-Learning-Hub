<?php  
require_once('connector.php');



$normalID = $_POST['xstudent'];
$normalteacher = $_POST['xteacher'];
$normalscore = $_POST['xscore'];
$normalstar = $_POST['xstar'];

$normalscorey = $normalscore;



if(isset($_POST['submit'])){
	$teachering=$db->prepare("INSERT INTO levelnormal(student,teacher,normalDate,normalScore)
		VALUES(:Zid,:Zteacher,NOW(),:Zscore)");
			

			$teachering->bindparam(':Zid',$normalID);
			$teachering->bindparam(':Zteacher',$normalteacher);
			$teachering->bindparam(':Zscore',$normalscore);

			$teachering->execute();



	$xwxwxw = $db->prepare("UPDATE students SET starpoints = starpoints + :starex, totalpoints = totalpoints + :scorex WHERE studentID=:studxss");
	$xwxwxw->bindParam(':starex',$normalstar);
	$xwxwxw->bindParam(':scorex',$normalscorey);
	$xwxwxw->bindParam(':studxss',$normalID);
	$xwxwxw->execute();

	
	header('location:dragonserver.php');
}else{
	header('location:x.html');
}
 ?>
