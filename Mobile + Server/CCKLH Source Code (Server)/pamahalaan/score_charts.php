<?php 
include_once('../connector.php');
session_start();
if(isset($_SESSION['teacher_account'])){
?>


<?php 

  require('../connector.php');

  $id=$_GET['id'];

  $sql=$db->prepare("SELECT * FROM students WHERE studentID=:XXID");
  $sql->bindParam(':XXID',$id);
  $sql->execute();
   
  $row=$sql->fetch(PDO::FETCH_ASSOC)

 ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Teachers Portal</title>


<!--   <link rel="stylesheet" href="../vendor/jquery.mobile-1.4.5.min.css" /> -->
  

  <script src="../vendor/jquery-1.11.1.min.js"></script>
  
  
  <link href="../vendor/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="../vendor/own.css">


  <link rel="stylesheet" type="text/css" href="../vendor/sweetalert.css">

  <link rel="stylesheet" type="text/css" href="../vendor/elusive-icons.css">
  




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

              html {height: 100%};
              body {height: 100%};

              .skwa:hover {border: 5px solid pink}

            </style>

<style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(../media/loader.gif) center no-repeat #fff;
}
</style>


<script type="text/javascript">
  //paste this code under the head tag or in a separate js file.
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
  
</script>


<script type="text/javascript">
  function lalabas() {
swal({
  title: "Logout ?",
  text: "Are you sure you want to exit?",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#ffc335",
  confirmButtonText: "Yeah!!",
  closeOnConfirm: false
},
function(){
  window.location = "process-logout.php";
});

  }
</script>





</head>

<body style="background-color: skyblue">

<div class="se-pre-con"></div> 







 <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ffc335;">

  <a href="index.php" class="el el-fw" style="color: white; font-size: 20pt">&#xf188;</a>


              <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">  


                </ul>


              </div>
    </nav>


 




     

<div style="background-color: rgb(0,161,255); padding: 20px; border: 5px outset orange; border-radius: 25px; margin: 10px" >

  <div class="row">


      <div class="col"> 
          <h6>Student Name: </h6>
          <h3><?php echo $row['Sfname'] . " " .  $row['Slname'] . " " . $row['Ssufname'] ?> </h3>
      </div>


      <div class="col"> 
          <h6>Stars Collected: </h6>
          <h3><i id="s3" class="el el-fw jellyrice" style="color: orange">&#xf1fe;</i><?php echo $row['starpoints'] ?> </h3>
      </div>

      <div class="col"> 
          <h6>Total Points: </h6>
          <h3><img src="../media/right.png" width="30px"> <?php echo $row['totalpoints'] ?> </h3>
      </div>


  </div>

</div>



<br>

<div style="background-color: rgb(0,161,255); padding: 25px; border: 5px outset orange; border-radius: 25px; margin: 10px">



  <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#easytable">Easy Level Scores <i class="el el-fw">&#xf151;</i> </button>

  <img src="../media/weak.png" width="50px">


    <div id="easytable" class="collapse" style="padding: 25px">

      <table class="table table-sm table-hover" style="background-color: white">

        <tr style="background-color: lightyellow">
            <th>Score</th>
            <th>Date</th>
        </tr>

        <?php

          $leasy=$id;

          $sqleasy=$db->prepare("SELECT * FROM leveleasy WHERE student=:Leasy");
          $sqleasy->bindParam(':Leasy',$leasy);
          $sqleasy->execute();
          foreach ($sqleasy as $easyscores) { ?>

        <tr>
          <td><?=$easyscores['easyScore']?></td>
          <td><?=$easyscores['easyDate']?></td>
        </tr>

        <?php } ?>

      </table>
    </div>
</div>


  










<div style="background-color: rgb(0,161,255); padding: 25px; border: 5px outset orange; border-radius: 25px; margin: 10px">



  <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#normaltable">Normal Level Scores <i class="el el-fw">&#xf151;</i> </button>

  <img src="../media/mejo.png" width="50px">

    <div id="normaltable" class="collapse" style="padding: 25px">

      <table class="table table-sm table-hover" style="background-color: white">

        <tr style="background-color: lightyellow">
            <th>Score</th>
            <th>Date</th>
        </tr>

        <?php

          $lnormal=$id;

          $sqlhardxss=$db->prepare("SELECT * FROM levelnormal WHERE student=:Lnormzs");
          $sqlhardxss->bindParam(':Lnormzs',$lnormal);
          $sqlhardxss->execute();
          foreach ($sqlhardxss as $normalscores) { ?>

        <tr>
          <td><?=$normalscores['normalScore']?></td>
          <td><?=$normalscores['normalDate']?></td>
        </tr>

        <?php } ?>

      </table>
    </div>
</div>















<div style="background-color: rgb(0,161,255); padding: 25px; border: 5px outset orange; border-radius: 25px; margin: 10px">



  <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#hardtable">Hard Level Scores <i class="el el-fw">&#xf151;</i> </button>

  <img src="../media/malakas.png" width="80px">

    <div id="hardtable" class="collapse" style="padding: 25px">

      <table class="table table-sm table-hover" style="background-color: white">

        <tr style="background-color: lightyellow">
            <th>Score</th>
            <th>Date</th>
        </tr>

        <?php

          $lhard=$id;

          $sqlhardxss=$db->prepare("SELECT * FROM levelhard WHERE student=:Lhardzz");
          $sqlhardxss->bindParam(':Lhardzz',$lhard);
          $sqlhardxss->execute();
          foreach ($sqlhardxss as $hardscores) { ?>

        <tr>
          <td><?=$hardscores['hardScore']?></td>
          <td><?=$hardscores['hardDate']?></td>
        </tr>

        <?php } ?>

      </table>
    </div>
</div>











   <!--  <script src="../vendor/jquery.mobile-1.4.5.min.js"></script> -->
    <script src="../vendor/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery.min.js"></script>
    <script src="../vendor/sweetalert.min.js"></script>
    <script src="../vendor/own.js"></script>
</body>

</html>


<?php
}else{
  header('location:index.php');
}
?> 