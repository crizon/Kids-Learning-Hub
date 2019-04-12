<?php 

	require('connector.php');

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
  <title>EASY-Server Side Dragon</title>

<!--   <link rel="stylesheet" href="vendor/jquery.mobile-1.4.5.min.css" /> -->
  

  <script src="vendor/jquery-1.11.1.min.js"></script>
  
  
  <link href="vendor/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="vendor/own.css">


  <link rel="stylesheet" type="text/css" href="vendor/sweetalert.css">

  <link rel="stylesheet" type="text/css" href="vendor/elusive-icons.css">
  



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

<body style="background-image: url(media/loader.gif);background-size: 20%">

 





<div style="background-color: rgba(0,0,0,.8);">
 <a href="dragonserver.php" class="el el-fw" style="color: white; font-size: 20pt; margin: 20px">&#xf188;</a>
      <center>
      <!-- edit student ------------------------------------------------ -->
      <div class="col-md-4" style="width:100%;">
        <form action="process-student-update.php" method="POST" style="background-color: #ffc335;border: 5px outset orange; padding: 10px; border-radius: 25px;">

            <div class="modal-content" style="background-color: rgb(0,161,255);">


              <br>
              <center>
                <h1 style="color: white"> <i class="el el-fw">&#xf131</i> My Information </h1>
              </center>



            <div class="modal-body" style="background-color: rgb(0,161,255);">


              <br>


            <div class="form-group">
              <label style="color: lightgray; float: left;">Student ID</label>
              <input type="hidden" name="xID" value="<?=$id?>">
              <input type="text" name="xID" class="form-control"  disabled="disabled"placeholder="ID Number" required="required" style="border: 1px solid orange; border-radius: 10px"  value="<?=$id?>">
            </div>

            <div class="form-group">
              <label style="color: lightgray; float: left;">First Name</label>
              <input type="text" name="xfname" class="form-control"  disabled="disabled"placeholder="First Name" required="required" style="border: 1px solid orange; border-radius: 10px" value="<?=$row['Sfname'] ?>">
            </div>

            <div class="form-group">
              <label style="color: lightgray; float: left;">Middle Name</label>
              <input type="text" name="xmname" class="form-control"  disabled="disabled"placeholder="Middle Name" style="border: 1px solid orange; border-radius: 10px" value="<?=$row['Smname'] ?>">
            </div>

            <div class="form-group">
              <label style="color: lightgray; float: left;">Last Name</label>
              <input type="text" name="xlname" class="form-control"  disabled="disabled"placeholder="Last Name" required="required" style="border: 1px solid orange; border-radius: 10px" value="<?=$row['Slname'] ?>">
            </div>

            <div class="form-group">
              <label style="color: lightgray; float: left;">Suffix</label>
              <input type="text" name="xsuffix" class="form-control"  disabled="disabled"placeholder="Suffix" style="border: 1px solid orange; border-radius: 10px" value="<?=$row['Ssufname'] ?>">
            </div>

            <div class="form-group">
              <label style="color: lightgray; float: left;">Date of Birth</label>
              <input type="date" name="xdob" class="form-control"  disabled="disabled"required="required" style="border: 1px solid orange; border-radius: 10px" value="<?=$row['Sdob'] ?>">
            </div>


            <div class="form-group">
              <label style="color: lightgray; float: left;">Name of Guardian</label>
              <input type="text" name="xguardian" class="form-control"  disabled="disabled"placeholder="Guardian Name" required="required" style="border: 1px solid orange;border-radius: 10px" value="<?=$row['Sguardian'] ?>">
            </div>

            <div class="form-group">
              <label style="color: lightgray; float: left;">Contact No.</label>
              <input type="text" name="xcontact" class="form-control"  disabled="disabled"placeholder="Contact Number" required="required" style="border: 1px solid orange;border-radius: 10px" value="<?=$row['Sguardiannum'] ?>">
            </div>

       

              </div>

            </div>
          </form>

      </div>
      </center>
</div>



















   <!--  <script src="vendor/jquery.mobile-1.4.5.min.js"></script> -->
    <script src="vendor/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.min.js"></script>
    <script src="vendor/sweetalert.min.js"></script>
    <script src="vendor/own.js"></script>
</body>

</html>