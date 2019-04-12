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
  <title>SAD-Server Side Dragon</title>


<link rel="stylesheet" href="vendor/jquery.mobile-1.4.5.min.css">
<script src="vendor/jquery.mobile-1.4.5.min.js"></script>

  <script src="vendor/jquery-1.11.1.min.js"></script>


  
  <link href="vendor/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="vendor/own.css">
  
  <script src="vendor/own.js"></script>
  <link rel="stylesheet" type="text/css" href="vendor/sweetalert.css">
  <script src="vendor/sweetalert.min.js"></script>

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


html {height: 100%}

body {height: 100%}

.tangkad {height: 100%}

            </style>



<style> .checked { color: orange; } </style>



</head> 

<body style="background-image: url(media/a.gif); background-position: center;" onload="ostplay()">



    <audio id="quizdesu" loop="true" hidden="true" src="media/quizmusic.mp3" type="audio/mp3"></audio> 

    <script>
      var crznost = document.getElementById("quizdesu");
      function ostplay() {crznost.play();}
    </script> 


<audio id="poot" hidden="true" src="media/poot.mp3"> </audio>
<script>
      var crznpoot = document.getElementById("poot");
      function pootplay() {crznpoot.play();}
</script> 
 


<?php

    $ohyeah = $_SESSION["welcomename"]; //gagamiting variable from session name ('WHERE' clause). . .
  
    $gumanaka=$db->prepare("SELECT * FROM students WHERE studentID=:welcomename");  //the query
    $gumanaka->bindParam(':welcomename',$ohyeah);  //importateng ibind muna yung variables para magamit sa querying
    $gumanaka->execute(); //the go signal

    $wee=$gumanaka->fetch(PDO::FETCH_ASSOC);  //importante to para ma output na yung laman ng database na tinawag sa query

   ?>


<div style="background-image: url(media/a.gif); background-position: center;">

  <div style="background-color: rgb(0,161,255); border: 5px ridge orange; border-radius: 5px; color: white; position: fixed;width: 100%; z-index: 5; top: 0">

<!--     <a href="logout_process.php?uname=<?=$wee['studentID']?>" onclick="pootplay()" class="jello btn-sm" style="color: white; right: 0; position: fixed;margin-top: 8px; background-color: rgb(0,161,255); border-right: 5px ridge orange"> <i class="el el-fw" style="transform: rotate(270deg);">&#xf145;</i> Logout</a> -->

      <h2 style="color: white;"> <b> <small> <i class=" el el-fw">&#xf131;</i> </small> <?php echo " " . $wee['Sfname'] ?> </b> </h2>

  </div>


 <?php
$starring = $wee['starpoints'];
$totalpointing = $wee['totalpoints'];

   ?>

        <!-- Jumbotron Header -->
        <div style="background-color: rgb(0,161,255); border: 4px ridge orange;border-radius: 15px; padding: 15px; margin: 25px">

              <br>

              <div class="row">

                <div class="col">
                  <h2><i id="s3" class="el el-fw checked bootboot">&#xf1fe;</i> <?php echo " " . $starring ?></h2>
                </div> 

                <div class="col">
                  <h2> <img class="bootboot" src="media/right.png" width="27.5px"> <?php echo " " . $totalpointing ?></h2>
                </div> 

              </div>
              <br>

              <center>
                <a href="score_chart_student.php" rel="external" onclick="pootplay()" class="jello btn-success btn" style="width: 32%; border: 5px ridge orange;border-radius: 25px; color: white"><i class="el el-fw">&#xf12a;</i> Scores</a>

                <a href="student_rankings.php?id=<?=$wee['SteacherID']?>" rel="external" onclick="pootplay()" class="jello btn-success btn" style="width: 32%; border: 5px ridge orange;border-radius: 25px; color: white"> <i class="el el-fw">&#xf1ae;</i> Rank</a>

                <a href="student_info.php?id=<?=$ohyeah?>" rel="external" onclick="pootplay()" class="jello btn-success btn" style="width: 32%; border: 5px ridge orange;border-radius: 25px; color: white"> <i class="el el-fw">&#xf131;</i> Info</a>
              </center>
           

        </div>

        <center> <h6 style="color: lightgray">……choose difficulty……</h6> </center>




        <div style="padding: 5px;">





                  <div style="margin: 30px;padding: 15px; background-color: lemonchiffon; border: 5px outset darkorange; border-radius: 10px">
                  
                    
                      <div class="row">

                        <div style="width: 30%">
                          <img class="jellyrice" width="80%" src="media/weak.png" style="z-index: 5; margin-left: -20%; margin-top: -20%">
                        </div>
                        

                        <div style="width: 70%;"> 
                          <h3>Easy Level </h3>
                          <p> Test your knowledge in easy level.</p>
                        </div>

                      </div>
 
                      <center> <a rel="external" href="easy_AF.php" onclick="pootplay()" class="btn btn-success jello" style="color: white;box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7); border: 5px ridge orange; border-radius: 15px; float: right;"> <i class="el el-fw">&#xf1c6;</i> Play</a> </center>

                  </div>
                  <br>

















                  <div style="margin: 30px;padding: 15px; background-color: lemonchiffon; border: 5px outset darkorange; border-radius: 10px">
                  
                    
                      <div class="row">

                        <div style="width: 30%">
                          <img class="jellyrice" width="85%" src="media/mejo.png" style="z-index: 5; margin-left: -20%; margin-top: -20%">
                        </div>
                        

                        <div style="width: 70%;"> 
                          <h3>Normal Level </h3>
                          <p> Test your knowledge in normal level. Requires 25 Star points or more to play this level.</p>
                        </div>

                      </div>
 
                      <center> <a rel="external" class="btn btn-success jello" style="color: white;box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7); border: 5px ridge orange; border-radius: 15px; float: right;" 

                        <?php //my code para ilock yung level depende sa star na nagain.
                            if ($starring >= 25) {
                            echo 'href="normal_AF.php" onclick="pootplay()"> <i class="el el-fw">&#xf1c6;</i> Play';}

                            else
                              echo 'onclick="normalcannot()"> <i class="el el-fw" style="color:white">&#xf1a2;</i> Locked';
                          ?>

                      </a> </center>

                  </div>
                  <br>



                     <script> //pang alert ko para sa normal level if nakalock pa
                        function normalcannot(){
                            swal({
                                    title: "Need more stars!",
                                    text: "You need 25 Stars or more to play this level.",
                                    imageUrl: "media/startar.png",
                                    showConfirmButton: true,
                                })
                          }
                    </script>
















                  <div style="margin: 30px;padding: 15px; background-color: lemonchiffon; border: 5px outset darkorange; border-radius: 10px">
                  
                    
                      <div class="row">

                        <div style="width: 30%">
                          <img class="jellyrice" width="120%" src="media/malakas.png" style="z-index: 5; margin-left: -30%; margin-top: -30%">
                        </div>
                        

                        <div style="width: 70%;"> 
                          <h3>Hard Level </h3>
                          <p> Test your knowledge in hard level. Requires 50 Star points or more to play this level.</p>
                        </div>

                      </div>
 
                      <center> <a rel="external" class="btn btn-success jello" style="color: white;box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7); border: 5px ridge orange; border-radius: 15px; float: right;" 


                          <?php //my code para ilock yung level depende sa star na nagain.
                            if ($starring >= 50) {
                            echo 'href="hard_AF.php" onclick="pootplay()"> <i class="el el-fw">&#xf1c6;</i> Play';}

                            else
                              echo 'onclick="hardcannot()"> <i class="el el-fw" style="color:white">&#xf1a2;</i> Locked';
                          ?>
                        

                      </a> </center>

                  </div>

                    <script> //pang alert ko para sa hard level if nakalock pa
                        function hardcannot(){
                            swal({
                                    title: "Need more stars!",
                                    text: "You need 50 Stars or more to play this level.",
                                    imageUrl: "media/startar.png",
                                    showConfirmButton: true,
                                })
                          }
                    </script>











                  <br>


        </div>



</div>









<!-- 
    <script src="vendor/jquery.min.js"></script> -->
    <script src="vendor/bootstrap.bundle.min.js"></script>
</body>

</html>


<?php
}else{
  header('location:errorlogin.php');
}
?>   