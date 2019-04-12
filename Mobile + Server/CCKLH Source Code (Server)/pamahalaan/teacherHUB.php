<?php 
include_once('../connector.php');
session_start();
if(isset($_SESSION['teacher_account'])){
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

 

<?php

    $ohyeah = $_SESSION['xteacherID']; //gagamiting variable from session name ('WHERE' clause). . .
  
    $gumanakaha=$db->prepare("SELECT * FROM teachers WHERE teacherID=:xteacherID");  //the query
    $gumanakaha->bindParam(':xteacherID',$ohyeah);  //importateng ibind muna yung variables para magamit sa querying
    $gumanakaha->execute(); //the go signal

    $waw=$gumanakaha->fetch(PDO::FETCH_ASSOC);  //importante to para ma output na yung laman ng database na tinawag sa query

   ?>









 <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ffc335;">

    <h3 class="navbar-brand" style="font-weight: bold"> <img src="../media/bulb.png"> CCKLH Teachers Portal</h3>

      <button class="navbar-toggler btn-info btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: 2px outset skyblue; border-radius: 10px">
            <span class="navbar-toggler-icon"></span>   
      </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">  
                      
                      <li class="nav-item dropdown">

                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-weight: bold"> <i class="el el-fw">&#xf229</i> </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                              <a class="dropdown-item" href="#">Action</a>

                              <a class="dropdown-item" href="#">Another action</a>

                              <div class="dropdown-divider"></div>

                              <a class="dropdown-item" href="#">Something else here</a>
                  
                            </div>
                       </li>

                </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <a onclick="lalabas()" style="color: white; font-weight: bold;">  Logout <span style="transform: rotate(270deg);" class="el el-fw">&#xf145</span></a>
                    </form>


              </div>
    </nav>


 




     

<div style="background-color: rgb(0,161,255); padding: 20px; border: 5px outset orange; border-radius: 25px; margin: 10px" >

  <div class="row">


      <div class="col-md-3"> 
        <table>

            <tr>
              <td> <h6>Teacher: </h6> </td>
              <td> <h5 style="color: rgba(0,0,0,0);">lol</h5> </td>
              <td> <h5><?php echo $waw['Tfname'] . " " .  $waw['Tlname'] ?> </h5> </td>
            </tr>

            <tr>
              <td> <h6>ID number: </h6> </td>
              <td> <h5 style="color: rgba(0,0,0,0);">lol</h5> </td>
              <td> <h5><?php echo $waw['teacherID']?> </h5> </td>
            </tr>

            <tr>
              <td> <h6>Class Name: </h6> </td>
              <td> <h5 style="color: rgba(0,0,0,0);">lol</h5> </td>
              <td> <h5><?php echo  $waw['NameOfClass']  ?> </h5> </td>
            </tr>
        </table>
      </div>



      <a class="col-md-2 btn skwa"  style="color: white; margin: 5px; background-color: orangered; border-radius: 25px; border: 5px ridge orangered">
          <h1><?php echo  $waw['Tnumofstud']  ?></h1>

          <div style="bottom: 0; border-top: 1px solid white">
            <h4><i class="el el-fw jellyrice" >&#xf17c;</i> Students </h4>
          </div>
      </a>



      <a class="col-md-2 btn skwa"  style="color: white; margin: 5px; background-color: turquoise; border-radius: 25px; border: 5px ridge turquoise">
          <h1><?php echo  $waw['Tnumofonline']  ?></h1>

          <div style="bottom: 0; border-top: 1px solid white">
            <h4><i class="el el-fw jellyrice" >&#xf18c;</i> Logins </h4>
          </div>
      </a>


      <a class="col-md-2 btn skwa"  style="color: white; margin: 5px; background-color: orange; border-radius: 25px; border: 5px ridge orange">
          <h1><?php echo  "0"  ?></h1>

          <div style="bottom: 0; border-top: 1px solid white">
            <h4><i class="el el-fw jellyrice" >&#xf14b;</i> Messages </h4>
          </div>
      </a>



      <a class="col-md-2 btn skwa"  style="color: white; margin: 5px; background-color: violet; border-radius: 25px; border: 5px ridge violet">
          <h1><?php echo   "0" ?></h1>

          <div style="bottom: 0; border-top: 1px solid white">
            <h4><i class="el el-fw jellyrice" >&#xf20d;</i> Likes </h4>
          </div>
      </a>

  </div>

</div>



  <br>
<div style="background-color: rgb(0,161,255); padding: 10px; border: 5px outset orange; border-radius: 25px; margin: 10px" >



  <h3 style="width: 100%">
      <i class="el el-fw">&#xf17c;</i> List of Students <small>(<i class="el el-fw bootboot">&#xf1fe;</i> Ranked)</small>
    <small>
       <a href="#" id="yay" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="el el-fw" style="color: gray;font-size: 10pt">&#xf1d0;</a>
        <div class="dropdown-menu" aria-labelledby="yay" style="padding: 5px">

          <a class="btn btn-sm btn-success"><i class="el el-fw" style="color: white">&#xf1ca;</i></a> <?php echo "  = "  ?> Add New Student
          <br><br>
          <a class="btn btn-sm btn-warning"> <i class="el el-fw" style="color: white"> &#xf1fe; </i>  </a> <?php echo "  = "  ?> Show Student's Scores
          <br><br>
          <a class="btn btn-sm btn-info"> <i class="el el-fw" style="color: white"> &#xf19b; </i>  </a> <?php echo "  = "  ?> Show Student's Information
          <br><br>
          <a class="btn btn-sm btn-secondary"> <i class="el el-fw" style="color: white"> &#xf1da; </i>  </a> <?php echo "  = "  ?> Refresh Window

        </div>
    </small>

      <button class="btn btn-success btn-sm" style="float: right;margin-bottom: 10px" data-toggle="modal" data-target="#signupmodal"><i class="el el-fw">&#xf1ca;</i></button>

      <button onclick="location.reload()" class="btn btn-secondary btn-sm" style="float: right;margin-bottom: 10px; margin-right: 5px"><i class="el el-fw">&#xf1da;</i></button>

  </h3>





  <table class="table table-sm table-hover" style="background-color: white">

        <tr style="background-color: lightyellow">
            <th>Student ID</th>
            <th>Name</th>
            <!-- <th>Middle Name</th>
            <th>Last Name</th>
            <th>Suffix</th> -->
            <!-- <th>Date of Birth</th> -->
            <th>Gender</th>
      <!--  <th>Guardian</th>
            <th>Contact Number</th> -->
            <th style="text-align: center;color: orange"> <i class="el el-fw bootboot">&#xf1fe;</i></th>
            <th style="text-align: center;"> <img style="margin-top: -5px;" class="bootboot" src="../media/right.png" width="15px"> </th>
            <th>Action</th>
        </tr>





  



          <?php

              require_once('../connector.php');
              $stmt = $db->prepare("SELECT * FROM students WHERE SteacherID=:xteacherID ORDER BY starpoints DESC");
              $stmt->bindParam(':xteacherID',$ohyeah); /*ginamit ko parin yung sa session para mafilter students*/
              $stmt->execute();

              foreach($stmt as $studidents) { 
          ?>

          <tr>

              <td><?=$studidents['studentID']?></td>
        <td><?=$studidents['Sfname'] . " " . $studidents['Smname'] . " " . $studidents['Slname'] . " " . $studidents['Ssufname'] ?> </td>
              <!-- <td><?=$studidents['Sdob']?></td> -->
              <td>
                <?php
                      if ($studidents['Sgender']==0) { echo "♀ Girl"; }

                      elseif ($studidents['Sgender']==1) { echo "♂ Boy"; }

                      else echo "Alien";
                ?>
    
                  
              </td>
              <!-- <td><?=$studidents['Sguardian']?></td>
              <td><?=$studidents['Sguardiannum']?></td> -->

              <td style="text-align: center;"> <?=$studidents['starpoints']?>  </td>
              <td style="text-align: center;"> <?=$studidents['totalpoints']?>  </td>

              <td>
                <a href="score_charts.php?id=<?=$studidents['studentID']?>" class="btn btn-sm btn-warning" style="color: white"><i class="el el-fw"> &#xf1fe; </i>  </a>
                <a href="student-details.php?id=<?=$studidents['studentID']?>" class="btn btn-sm btn-info"><i class="el el-fw"> &#xf19b; </i>  </a>
              </td>

          </tr>

        <?php } ?>

  </table>

</div>






































<!-- student register modal ------------------------------------------------ -->
  <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" arialabelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

      <form action="process-student-register.php" method="POST" style="background-color: #ffc335;border: 5px outset orange; padding: 10px; border-radius: 25px;">

      <div class="modal-content" style="background-color: rgb(0,161,255);">


        <br>
        <center>
          <h1 style="color: white; margin-top: 10px"> <i class="el el-fw">&#xf131</i> Student Registration </h1>
        </center>



      <div class="modal-body" style="background-color: rgb(0,161,255);">


        <br>


      <div class="form-group">
        <input type="text" name="xID" class="form-control" placeholder="ID Number" required="required" style="border: 1px solid orange; border-radius: 10px">
      </div>

      <div class="form-group">
        <input type="text" name="xfname" class="form-control" placeholder="First Name" required="required" style="border: 1px solid orange; border-radius: 10px">
      </div>

      <div class="form-group">
        <input type="text" name="xmname" class="form-control" placeholder="Middle Name" style="border: 1px solid orange; border-radius: 10px">
      </div>

      <div class="form-group">
        <input type="text" name="xlname" class="form-control" placeholder="Last Name" required="required" style="border: 1px solid orange; border-radius: 10px">
      </div>

      <div class="form-group">
        <input type="text" name="xsuffix" class="form-control" placeholder="Suffix" style="border: 1px solid orange; border-radius: 10px">
      </div>

      <div class="form-group">
        <input type="date" name="xdob" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px">
      </div>

      <div class="form-group">
        <select name="xgender" class="form-control" required="required" style="border: 1px solid orange;border-radius: 10px">
          <option value="0">♀ Female</option>
          <option value="1">♂ Male</option>
        </select>
      </div>

      <div class="form-group">
        <input type="text" name="xguardian" class="form-control" placeholder="Guardian Name" required="required" style="border: 1px solid orange;border-radius: 10px">
      </div>

      <div class="form-group">
        <input type="text" name="xcontact" class="form-control" placeholder="Contact Number" required="required" style="border: 1px solid orange;border-radius: 10px">
      </div>

      <div class="form-group">
        <input type="text" name="xteacher" class="form-control" hidden="hidden"  value="<?=$waw['teacherID']?>">
      </div>


      <center><div class="form-group">
        <input type="checkbox" required="required" style="border: 2px solid orange;"> I agree to the <a href="" style="color: white"> <u> Terms and Data Use Policy </u> </a>.
      </div></center>



         <center>

        <button style="width: 45%; color: white; font-size: 15pt; font-weight: bold; box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7);" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

        <button style="width: 45%; color: white; font-size: 15pt; font-weight: bold; box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7);" type="submit" name="submit" class="btn btn-success"  onclick="return validate();">Register</button>

      </center>
  

        </div>

      </div>
    </form>
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