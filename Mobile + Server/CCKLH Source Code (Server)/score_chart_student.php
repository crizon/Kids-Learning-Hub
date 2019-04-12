<?php 

include_once('connector.php');
session_start();
if(isset($_SESSION['account'])){
?>

<?php 

  $xid=$_SESSION["welcomename"];

  $kwandesu=$db->prepare("SELECT * FROM students WHERE studentID=:XxXID");
  $kwandesu->bindParam(':XxXID',$xid);
  $kwandesu->execute();
   
  $crow=$kwandesu->fetch(PDO::FETCH_ASSOC)

 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Score Charts</title>


  

  <script src="vendor/jquery-1.11.1.min.js"></script>
  
  <link href="vendor/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="vendor/own.css">

  <link rel="stylesheet" type="text/css" href="vendor/sweetalert.css">

  <link rel="stylesheet" type="text/css" href="vendor/elusive-icons.css">

  <script src="vendor/sweetalert.min.js"></script>

  <script src="vendor/own.js"></script>
  




            <!-- TO DISABLE SELECTING -->
            <style type="text/css">
              
            *
            {
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            }

            input
            {
            -webkit-user-select: auto !important;
            -khtml-user-select: auto !important;
            -moz-user-select: auto !important;
            -ms-user-select: auto !important;
            user-select: auto !important;
            }

            img { border: none; }

            button:focus {
              border: none;
              outline: none;
                }

              input:focus {
              border: none;
              outline: none;
                }


              .skwa:hover {border: 5px solid pink}

            </style>



</head>

<body style="background-image: url(media/a.gif);">








<nav class="navbar navbar-expand-lg " style="background-color: rgb(0,161,255); border: 5px ridge orange">
  <a href="dragonserver.php" rel="external" class="el el-fw" style="color: white; font-size: 17pt">&#xf188;</a>
  <a disabled style="color: white" ><?php echo $crow['Sfname'] ?></a>
</nav>


 




     

<div style="background-color: rgb(0,161,255); padding: 20px; border: 5px outset orange; border-radius: 25px; margin: 10px" >

  <div class="row">

      <div class="col"> 
          <h6>Stars Collected: </h6>
          <h3><i id="s3" class="el el-fw jellyrice" style="color: orange">&#xf1fe;</i><?php echo $crow['starpoints'] ?> </h3>
      </div>

      <div class="col"> 
          <h6>Total Points: </h6>
          <h3><img src="media/right.png" width="30px"> <?php echo $crow['totalpoints'] ?> </h3>
      </div>


  </div>

</div>



<br>

<div style="background-color: rgb(0,161,255); padding: 5px; border: 5px outset orange; border-radius: 25px; margin: 10px">



  <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#easytable" style="border: 5px ridge orange;border-radius: 25px; color: white">Easy Level Scores <i class="el el-fw" style="color: black">&#xf151;</i> </button>

  <img src="media/weak.png" width="50px">


    <div id="easytable" class="collapse" style="padding: 25px">

      <table class="table table-sm table-hover" style="background-color: white">

        <tr style="background-color: lightyellow">
            <th>Score</th>
            <th>Date</th>
        </tr>

        <?php

          $leasy=$xid;

          $kwandesueasy=$db->prepare("SELECT * FROM leveleasy WHERE student=:Leasy");
          $kwandesueasy->bindParam(':Leasy',$leasy);
          $kwandesueasy->execute();
          foreach ($kwandesueasy as $easyscores) { ?>

        <tr>
          <td><?=$easyscores['easyScore']?></td>
          <td><?=$easyscores['easyDate']?></td>
        </tr>

        <?php } ?>

      </table>
    </div>
</div>


  










<div style="background-color: rgb(0,161,255); padding: 5px; border: 5px outset orange; border-radius: 25px; margin: 10px">



  <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#normaltable" style="border: 5px ridge orange;border-radius: 25px; color: white">Normal Level Scores <i class="el el-fw" style="color: black">&#xf151;</i> </button>

  <img src="media/mejo.png" width="50px">

    <div id="normaltable" class="collapse" style="padding: 25px">

      <table class="table table-sm table-hover" style="background-color: white">

        <tr style="background-color: lightyellow">
            <th>Score</th>
            <th>Date</th>
        </tr>

        <?php

          $lnormal=$xid;

          $kwandesuhardxss=$db->prepare("SELECT * FROM levelnormal WHERE student=:Lnormzs");
          $kwandesuhardxss->bindParam(':Lnormzs',$lnormal);
          $kwandesuhardxss->execute();
          foreach ($kwandesuhardxss as $normalscores) { ?>

        <tr>
          <td><?=$normalscores['normalScore']?></td>
          <td><?=$normalscores['normalDate']?></td>
        </tr>

        <?php } ?>

      </table>
    </div>
</div>















<div style="background-color: rgb(0,161,255); padding: 5px; border: 5px outset orange; border-radius: 25px; margin: 10px">



  <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#hardtable" style="border: 5px ridge orange;border-radius: 25px; color: white">Hard Level Scores <i class="el el-fw" style="color: black">&#xf151;</i> </button>

  <img src="media/malakas.png" width="90px">

    <div id="hardtable" class="collapse" style="padding: 25px">

      <table class="table table-sm table-hover" style="background-color: white">

        <tr style="background-color: lightyellow">
            <th>Score</th>
            <th>Date</th>
        </tr>

        <?php

          $lhard=$xid;

          $kwandesuhardxss=$db->prepare("SELECT * FROM levelhard WHERE student=:Lhardzz");
          $kwandesuhardxss->bindParam(':Lhardzz',$lhard);
          $kwandesuhardxss->execute();
          foreach ($kwandesuhardxss as $hardscores) { ?>

        <tr>
          <td><?=$hardscores['hardScore']?></td>
          <td><?=$hardscores['hardDate']?></td>
        </tr>

        <?php } ?>

      </table>
    </div>
</div>





    <script src="vendor/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.min.js"></script>
</body>

</html>


<?php
}else{
  header('location:index.php');
}
?> 