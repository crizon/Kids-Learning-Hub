<?php 
include_once('connector.php');
session_start();
if(isset($_SESSION['account'])){
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Rankings</title>


<!--   <link rel="stylesheet" href="vendor/jquery.mobile-1.4.5.min.css" /> -->
  

  <script src="vendor/jquery-1.11.1.min.js"></script>
  
  
  <link href="vendor/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="vendor/own.css">


  <link rel="stylesheet" type="text/css" href="vendor/sweetalert.css">

  <link rel="stylesheet" type="text/css" href="vendor/elusive-icons.css">
  




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
  background: url(media/loader.gif) center no-repeat #fff;
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

<body style="background-image: url(media/a.gif);">










<?php

    $ohyeah = $_GET['id']; //gagamiting variable from session name ('WHERE' clause). . .
  
    $gumanakaha=$db->prepare("SELECT * FROM students WHERE SteacherID=:xteacherID");  //the query
    $gumanakaha->bindParam(':xteacherID',$ohyeah);  //importateng ibind muna yung variables para magamit sa querying
    $gumanakaha->execute(); //the go signal

    $waw=$gumanakaha->fetch(PDO::FETCH_ASSOC);  //importante to para ma output na yung laman ng database na tinawag sa query

   ?>







<nav class="navbar navbar-expand-lg " style="background-color: rgb(0,161,255); border: 5px ridge orange">
  <a href="dragonserver.php" class="el el-fw" style="color: white; font-size: 17pt">&#xf188;</a>
  <!-- <a disabled style="color: white" ><?php echo $waw['Sfname'] ?></a> -->
</nav> 



 




     





  <br>
<div style="background-color: rgb(0,161,255); padding: 10px; border: 5px ridge orange; border-radius: 25px; margin: 10px" >



  <h3 style="width: 100%">
      <i class="el el-fw">&#xf17c;</i> Section Ranking
  </h3>





  <table class="table table-sm table-hover" style="background-color: white">

        <tr style="background-color: lightyellow">
            <th>Rank</th>
            <th>Name</th>
            <th style="text-align: center;color: orange"> <i class="el el-fw bootboot">&#xf1fe;</i></th>
            <th style="text-align: center;"> <img style="margin-top: -5px;" class="bootboot" src="media/right.png" width="15px"> </th>
        </tr>





  



          <?php

              require_once('connector.php');
              $stmt = $db->prepare("SELECT * FROM students WHERE SteacherID=:xteacherID ORDER BY starpoints DESC");
              $stmt->bindParam(':xteacherID',$ohyeah); /*ginamit ko parin yung sa session para mafilter students*/
              $stmt->execute();

              $bilang = 1; //pang increment ko lang para sa ranking
              foreach($stmt as $studidents) { 

          ?>

          <tr>

              <td style="text-align: center; font-weight: bold;"><?php echo $bilang ?></td>
              <td><?=$studidents['Sfname'] . " " . $studidents['Smname'] . " " . $studidents['Slname'] . " " . $studidents['Ssufname'] ?> </td>
              <td style="text-align: center;"> <?=$studidents['starpoints']?>  </td>
              <td style="text-align: center;"> <?=$studidents['totalpoints']?>  </td>


          </tr>

        <?php $bilang++; } ?>

  </table>

</div>
































   <!--  <script src="vendor/jquery.mobile-1.4.5.min.js"></script> -->
    <script src="vendor/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.min.js"></script>
    <script src="vendor/sweetalert.min.js"></script>
    <script src="vendor/own.js"></script>
</body>

</html>


<?php
}else{
  header('location:index.php');
}
?>  