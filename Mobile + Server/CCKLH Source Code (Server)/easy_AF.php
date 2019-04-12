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
  <title>EASY-Server Side Dragon</title>

  <link rel="stylesheet" href="vendor/jquery.mobile-1.4.5.min.css" />
  

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










<script>
  
  var score = 0;
  var commentay = "";
  var ohyes = "";
  var star = 0;

  var star1;
  var star2;
  var star3;
  var star4;
  var star5;

  function add(){
    score ++;



        if (score == 20 ) {

            star1 = document.getElementById("s1");
            star1.classList.add("checked");

            star2 = document.getElementById("s2");
            star2.classList.add("checked");

            star3 = document.getElementById("s3");
            star3.classList.add("checked");

            star4 = document.getElementById("s4");
            star4.classList.add("checked");

            star5 = document.getElementById("s5");
            star5.classList.add("checked");

            commentay = "Awesome! \n You won 5 stars.";
            ohyes = "x2"
            star = 10;

        }


        else if (score >= 17 ) {

            star1 = document.getElementById("s1");
            star1.classList.add("checked");

            star2 = document.getElementById("s2");
            star2.classList.add("checked");

            star3 = document.getElementById("s3");
            star3.classList.add("checked");

            star4 = document.getElementById("s4");
            star4.classList.add("checked");

            star5 = document.getElementById("s5");
            star5.classList.add("checked");

            commentay = "Awesome! \n You won 5 stars.";
            star = 5;
         }


        else if (score >= 14) {

            star1 = document.getElementById("s1");
            star1.classList.add("checked");

            star2 = document.getElementById("s2");
            star2.classList.add("checked");

            star3 = document.getElementById("s3");
            star3.classList.add("checked");

            star4 = document.getElementById("s4");
            star4.classList.add("checked");

            commentay = "Good Job! \n You won 4 stars.";
            star = 4;
        }


        else if (score >= 10) {

            star1 = document.getElementById("s1");
            star1.classList.add("checked");

            star2 = document.getElementById("s2");
            star2.classList.add("checked");

            star3 = document.getElementById("s3");
            star3.classList.add("checked");

            commentay = "Nice! \n You won 3 stars!";
            star = 3;
        }


        else if (score >= 7) {

            star1 = document.getElementById("s1");
            star1.classList.add("checked");

            star2 = document.getElementById("s2");
            star2.classList.add("checked");

            commentay = "Cool! \n You won 2 stars.";
            star = 2;
        }


        else if (score >= 4) {

            star1 = document.getElementById("s1");
            star1.classList.add("checked");

            commentay = "Okay! \n You won 1 star.";
            star = 1;
        }


        else if (score >= 0) {

            commentay = "Sorry! \n 0 star received.";
            star = 0;
        }


        else{
            
            commentay = "Sorry! \n 0 star received.";
            star = 0;
        }











    var labas = document.getElementById('resulta').innerHTML= " \n \n \n" + score + "/20 \n score";

    var comment = document.getElementById('kumento').innerHTML=commentay;

    var bonuxs = document.getElementById('ohyessir').innerHTML=ohyes;

    var stargained = document.getElementById('gainedstar').innerHTML=star;



    document.getElementById('scorePHP').value = score;
    document.getElementById('starPHP').value = star;    




  }

</script>



<script type="text/javascript">
  function lalabas() {
swal({
  title: "Return?",
  text: "Back to level select?",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#ffc335",
  confirmButtonText: "Yes!",
  closeOnConfirm: false
},
function(){
  window.history.clear;
  window.location = "dragonserver.php";
});

  }
</script>




</head>

<body onload="ostplay()">
  
    <audio id="quizdesu" loop="true" hidden="true" src="media/quizmusic.mp3" type="audio/mp3"></audio> 

    <script>
      var crznost = document.getElementById("quizdesu");
      function ostplay() {crznost.play();}
    </script> 

<div class="se-pre-con"></div> 

<audio id="poot" hidden="true" src="media/poot.mp3"> </audio>
<audio id="goodxss" hidden="true" src="media/goodxss.mp3"> </audio>
<audio id="badxss" hidden="true" src="media/badxss.mp3"> </audio>

<script>
      var crznpoot = document.getElementById("poot");
      function pootplay() {crznpoot.play();}

      var crzngood = document.getElementById("goodxss");
      function goodplay() {crzngood.play();}

      var crznbad = document.getElementById("badxss");
      function badplay() {crznbad.play();}


</script> 
 



<?php

    $ohyeah = $_SESSION["welcomename"]; //gagamiting variable from session name ('WHERE' clause). . .
  
    $gumanaka=$db->prepare("SELECT * FROM students WHERE studentID=:welcomename");  //the query
    $gumanaka->bindParam(':welcomename',$ohyeah);  //importateng ibind muna yung variables para magamit sa querying
    $gumanaka->execute(); //the go signal

    $wee=$gumanaka->fetch(PDO::FETCH_ASSOC);  //importante to para ma output na yung laman ng database na tinawag sa query

   ?>







<!-- START of Question 1 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_1"  style="background-color: white; background-position: top;background-size: 100%">



 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">1 | 20</p>
        
      </div>

      <br>

      <div >
            <center>
                <img id="pakita1" hidden="hidden" src="media/pakita.png" width="90%">
                <h3>Which letter is correct? </h3>
                <img src="media/easy/easy-1.png" width="100%" class="jellyrice">
                <h1 style="font-size: 50pt">͟  pple</h1>            
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid1" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="goodscorexss(),goodplay(),magic1(),add()" href="#easy_page_2" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> A </a>


          <a onclick="badscorexss(),badplay(),magic1()" href="#easy_page_2" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> E </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show1" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_2" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic1(){

    setTimeout(function(){

        var xhid1 = document.getElementById("hid1");
        xhid1.hidden = "hidden";

        var xshow1 = document.getElementById("show1");
        xshow1.hidden = "";

        var xpakita = document.getElementById("pakita1");
        xpakita.hidden = "";

    },2000);
}


</script>


<!-- END of Question 1  -->



















<!-- START of Question 2 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_2"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">2 | 20</p>
        
      </div>

      <br>

      <div>
            <center>
                <img id="pakita2" hidden="hidden" src="media/pakita.png" width="90%">
                <h3>Which letter is correct? </h3>
                <img src="media/easy/easy-2.png" width="100%" class="jellyrice">
                <h1 style="font-size: 50pt">͟  anana</h1>            
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid2" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="badscorexss(),badplay(),magic2()" href="#easy_page_3" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> D </a>


          <a onclick="goodscorexss(),goodplay(),magic2(),add()" href="#easy_page_3" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> B </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show2" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_3" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic2(){

    setTimeout(function(){

        var xhid2 = document.getElementById("hid2");
        xhid2.hidden = "hidden";

        var xshow2 = document.getElementById("show2");
        xshow2.hidden = "";

        var xpakita2 = document.getElementById("pakita2");
        xpakita2.hidden = "";

    },2000);
}


</script>


<!-- END of Question 2  -->






















<!-- START of Question 3 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_3"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">3 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita3" hidden="hidden" src="media/pakita.png" width="90%">
                <h3>Which letter is correct? </h3>
                <img src="media/easy/easy-3.png" width="100%" class="jellyrice">
                <h1 style="font-size: 50pt">͟  un</h1>            
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid3" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="badscorexss(),badplay(),magic3()" href="#easy_page_4" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> Z </a>


          <a onclick="goodscorexss(),goodplay(),magic3(),add()" href="#easy_page_4" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> S </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show3" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_4" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic3(){

    setTimeout(function(){

        var xhid3 = document.getElementById("hid3");
        xhid3.hidden = "hidden";

        var xshow3 = document.getElementById("show3");
        xshow3.hidden = "";

        var xpakita3 = document.getElementById("pakita3");
        xpakita3.hidden = "";

    },2000);
}


</script>


<!-- END of Question 3  -->
















<!-- START of Question 4 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_4"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">4 | 20</p>
        
      </div>
      <br>


      <div  >
            <center>
                <img id="pakita4" hidden="hidden" src="media/pakita.png" width="90%">
                <h3>Which letter is correct? </h3>
                <img src="media/easy/easy-4.png" width="100%" class="jellyrice">
                <h1 style="font-size: 50pt">͟  ish</h1>            
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid4" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="goodscorexss(),goodplay(),magic4(),add()" href="#easy_page_5" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> F </a>


          <a onclick="badscorexss(),badplay(),magic4()" href="#easy_page_5" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> P </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show4" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_5" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic4(){

    setTimeout(function(){

        var xhid4 = document.getElementById("hid4");
        xhid4.hidden = "hidden";

        var xshow4 = document.getElementById("show4");
        xshow4.hidden = "";

        var xpakita4 = document.getElementById("pakita4");
        xpakita4.hidden = "";

    },2000);
}


</script>


<!-- END of Question 4  -->






















<!-- START of Question 5 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_5"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">5 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita5" hidden="hidden" src="media/pakita.png" width="90%">
                <h3>Which letter is correct? </h3>
                <img src="media/easy/easy-5.png" width="100%" class="jellyrice">
                <h1 style="font-size: 50pt">͟  ocket</h1>            
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid5" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="badscorexss(),badplay(),magic5()" href="#easy_page_6" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> P </a>


          <a onclick="goodscorexss(),goodplay(),magic5(),add()" href="#easy_page_6" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> R </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show5" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_6" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic5(){

    setTimeout(function(){

        var xhid5 = document.getElementById("hid5");
        xhid5.hidden = "hidden";

        var xshow5 = document.getElementById("show5");
        xshow5.hidden = "";

        var xpakita5 = document.getElementById("pakita5");
        xpakita5.hidden = "";

    },2000);
}


</script>


<!-- END of Question 5  -->
















<!-- START of Question 6 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_6"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">6 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita6" hidden="hidden" src="media/pakita.png" width="90%">
                <h3> How many balls are there? </h3>
                <img src="media/easy/easy-6.png" width="100%" class="jellyrice">
                <h1 style="font-size: 50pt">͟  <?php echo "  "; ?>Balls</h1>            
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid6" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="goodscorexss(),goodplay(),magic6(),add()" href="#easy_page_7" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> 3 </a>


          <a onclick="badscorexss(),badplay(),magic6()" href="#easy_page_7" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> 4 </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show6" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_7" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic6(){

    setTimeout(function(){

        var xhid6 = document.getElementById("hid6");
        xhid6.hidden = "hidden";

        var xshow6 = document.getElementById("show6");
        xshow6.hidden = "";

        var xpakita6 = document.getElementById("pakita6");
        xpakita6.hidden = "";

    },2000);
}


</script>


<!-- END of Question 6  -->





















<!-- START of Question 7 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_7"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">7 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita7" hidden="hidden" src="media/pakita.png" width="90%">
                <h3> How many stars are there? </h3>
                <img src="media/easy/easy-7.png" width="100%" class="jellyrice">
                <h1 style="font-size: 50pt">͟  <?php echo "  "; ?> Stars</h1>            
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid7" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="goodscorexss(),goodplay(),magic7(),add()" href="#easy_page_8" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> 5 </a>


          <a onclick="badscorexss(),badplay(),magic7()" href="#easy_page_8" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> 7 </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show7" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_8" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic7(){

    setTimeout(function(){

        var xhid7 = document.getElementById("hid7");
        xhid7.hidden = "hidden";

        var xshow7 = document.getElementById("show7");
        xshow7.hidden = "";

        var xpakita7 = document.getElementById("pakita7");
        xpakita7.hidden = "";

    },2000);
}


</script>


<!-- END of Question 7  -->











<!-- START of Question 8 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_8"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">8 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita8" hidden="hidden" src="media/pakita.png" width="90%">
                <h3> How many flowers are there? </h3>
                <img src="media/easy/easy-8.png" width="100%" class="jellyrice">
                <h1 style="font-size: 50pt">͟  <?php echo "  "; ?> Flowers</h1>            
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid8" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="badscorexss(),badplay(),magic8()" href="#easy_page_9" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> 3 </a>


          <a onclick="goodscorexss(),goodplay(),magic8(),add()" href="#easy_page_9" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> 2 </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show8" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_9" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic8(){

    setTimeout(function(){

        var xhid8 = document.getElementById("hid8");
        xhid8.hidden = "hidden";

        var xshow8 = document.getElementById("show8");
        xshow8.hidden = "";

        var xpakita8 = document.getElementById("pakita8");
        xpakita8.hidden = "";

    },2000);
}


</script>


<!-- END of Question 8  -->
















<!-- START of Question 9 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_9"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">9 | 20</p>
        
      </div>
      <br>

      <div  >
            <center>
                <img id="pakita9" hidden="hidden" src="media/pakita.png" width="90%">
                <h4> How many pizza slices are there? </h4>
                <img src="media/easy/easy-9.png" width="90%" class="jellyrice">
                <h3 style="font-size: 50pt">͟  <?php echo "  "; ?> Pizza slices</h3>            
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid9" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="goodscorexss(),goodplay(),magic9(),add()" href="#easy_page_10" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> 7 </a>


          <a onclick="badscorexss(),badplay(),magic9()" href="#easy_page_10" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> 6 </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show9" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_10" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic9(){

    setTimeout(function(){

        var xhid9 = document.getElementById("hid9");
        xhid9.hidden = "hidden";

        var xshow9 = document.getElementById("show9");
        xshow9.hidden = "";

        var xpakita9 = document.getElementById("pakita9");
        xpakita9.hidden = "";

    },2000);
}


</script>


<!-- END of Question 9  -->















<!-- START of Question 10 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_10"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">10 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita10" hidden="hidden" src="media/pakita.png" width="90%">
                <h3> How many pencils are there? </h3>
                <img src="media/easy/easy-10.png" width="90%" class="jellyrice">
                <h1 style="font-size: 50pt">͟  <?php echo "  "; ?> Pencils</h1>            
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid10" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="goodscorexss(),goodplay(),magic10(),add()" href="#easy_page_11" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> 10 </a>


          <a onclick="badscorexss(),badplay(),magic10()" href="#easy_page_11" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> 9 </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show10" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_11" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic10(){

    setTimeout(function(){

        var xhid10 = document.getElementById("hid10");
        xhid10.hidden = "hidden";

        var xshow10 = document.getElementById("show10");
        xshow10.hidden = "";

        var xpakita10 = document.getElementById("pakita10");
        xpakita10.hidden = "";

    },2000);
}


</script>


<!-- END of Question 10  -->


















<!-- START of Question 11 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_11"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">11 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita11" hidden="hidden" src="media/pakita.png" width="90%">
                <h2> What color is this ball? </h2>
                <img src="media/easy/easy-11.png" width="100%" class="jellyrice">           
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid11" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="goodscorexss(),goodplay(),magic11(),add()" href="#easy_page_12" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> Blue </a>


          <a onclick="badscorexss(),badplay(),magic11()" href="#easy_page_12" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> Violet </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show11" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_12" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic11(){

    setTimeout(function(){

        var xhid11 = document.getElementById("hid11");
        xhid11.hidden = "hidden";

        var xshow11 = document.getElementById("show11");
        xshow11.hidden = "";

        var xpakita11 = document.getElementById("pakita11");
        xpakita11.hidden = "";

    },2000);
}


</script>


<!-- END of Question 11  -->



















<!-- START of Question 12 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_12"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">12 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita12" hidden="hidden" src="media/pakita.png" width="90%">
                <h2> What color is this flower? </h2>
                <br>
                <img src="media/easy/easy-12.png" width="90%" class="jellyrice">          
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid12" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="badscorexss(),badplay(),magic12()" href="#easy_page_13" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> Violet </a>


          <a onclick="goodscorexss(),goodplay(),magic12(),add()" href="#easy_page_13" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> Pink </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show12" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_13" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic12(){

    setTimeout(function(){

        var xhid12 = document.getElementById("hid12");
        xhid12.hidden = "hidden";

        var xshow12 = document.getElementById("show12");
        xshow12.hidden = "";

        var xpakita12 = document.getElementById("pakita12");
        xpakita12.hidden = "";

    },2000);
}


</script>


<!-- END of Question 12  -->




















<!-- START of Question 13 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_13"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">13 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita13" hidden="hidden" src="media/pakita.png" width="90%">
                <h2> What color is this vase? </h2>
                <br>
                <img src="media/easy/easy-13.png" width="90%" class="jellyrice">          
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid13" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="badscorexss(),badplay(),magic13()" href="#easy_page_14" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 27pt; margin: 5px"> Orange </a>


          <a onclick="goodscorexss(),goodplay(),magic13(),add()" href="#easy_page_14" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 27pt; margin: 5px"> Red </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show13" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_14" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic13(){

    setTimeout(function(){

        var xhid13 = document.getElementById("hid13");
        xhid13.hidden = "hidden";

        var xshow13 = document.getElementById("show13");
        xshow13.hidden = "";

        var xpakita13 = document.getElementById("pakita13");
        xpakita13.hidden = "";

    },2000);
}


</script>


<!-- END of Question 13  -->




















<!-- START of Question 14 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_14"  style="background-color: white; background-position: top;background-size: 100%">

 
       <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">14 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita14" hidden="hidden" src="media/pakita.png" width="90%">
                <h2> What color is this lamp? </h2>
                <br>
                <img src="media/easy/easy-14.png" width="90%" class="jellyrice">          
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid14" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="goodscorexss(),goodplay(),magic14(),add()" href="#easy_page_15" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 27pt; margin: 5px"> Orange </a>


          <a onclick="badscorexss(),badplay(),magic14()" href="#easy_page_15" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 27pt; margin: 5px"> Yellow </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show14" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_15" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic14(){

    setTimeout(function(){

        var xhid14 = document.getElementById("hid14");
        xhid14.hidden = "hidden";

        var xshow14 = document.getElementById("show14");
        xshow14.hidden = "";

        var xpakita14 = document.getElementById("pakita14");
        xpakita14.hidden = "";

    },2000);
}


</script>


<!-- END of Question 14  -->


















<!-- START of Question 15 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_15"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">15 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita15" hidden="hidden" src="media/pakita.png" width="90%">
                <h2> What color is this apple? </h2>
                <br>
                <img src="media/easy/easy-15.png" width="90%" class="jellyrice">          
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid15" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="goodscorexss(),goodplay(),magic15(),add()" href="#easy_page_16" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> Green </a>


          <a onclick="badscorexss(),badplay(),magic15()" href="#easy_page_16" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> Blue </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show15" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_16" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic15(){

    setTimeout(function(){

        var xhid15 = document.getElementById("hid15");
        xhid15.hidden = "hidden";

        var xshow15 = document.getElementById("show15");
        xshow15.hidden = "";

        var xpakita15 = document.getElementById("pakita15");
        xpakita15.hidden = "";

    },2000);
}


</script>


<!-- END of Question 15  -->

















<!-- START of Question 16 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_16"  style="background-color: white; background-position: top;background-size: 100%">

 

      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">16 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita16" hidden="hidden" src="media/pakita.png" width="90%">
                <h2> What shape is this pyramid? </h2>
                <br>
                <img src="media/easy/easy-16.png" width="90%" class="jellyrice">          
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid16" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="badscorexss(),badplay(),magic16()" href="#easy_page_17" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 28pt; margin: 5px">☆ <small> Star</small> </a>


          <a onclick="goodscorexss(),goodplay(),magic16(),add()" href="#easy_page_17" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 28pt; margin: 5px">△ <small> Triangle </small> </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show16" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_17" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic16(){

    setTimeout(function(){

        var xhid16 = document.getElementById("hid16");
        xhid16.hidden = "hidden";

        var xshow16 = document.getElementById("show16");
        xshow16.hidden = "";

        var xpakita16 = document.getElementById("pakita16");
        xpakita16.hidden = "";

    },2000);
}


</script>


<!-- END of Question 16  -->



















<!-- START of Question 17 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_17"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">17 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita17" hidden="hidden" src="media/pakita.png" width="90%">
                <h2> What shape is this pizza box? </h2>
                <br>
                <img src="media/easy/easy-17.png" width="90%" class="jellyrice">          
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid17" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="goodscorexss(),goodplay(),magic17(),add()" href="#easy_page_18" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 22pt; margin: 5px"> ☐ <small> Square </small> </a>


          <a onclick="badscorexss(),badplay(),magic17()" href="#easy_page_18" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 22pt; margin: 5px">♢ <small> Diamond </small> </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show17" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_18" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic17(){

    setTimeout(function(){

        var xhid17 = document.getElementById("hid17");
        xhid17.hidden = "hidden";

        var xshow17 = document.getElementById("show17");
        xshow17.hidden = "";

        var xpakita17 = document.getElementById("pakita17");
        xpakita17.hidden = "";

    },2000);
}


</script>


<!-- END of Question 17  -->















<!-- START of Question 18 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_18"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">18 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita18" hidden="hidden" src="media/pakita.png" width="90%">
                <h2> What shape is this blackboard? </h2>
                <br>
                <img src="media/easy/easy-18.png" width="90%" class="jellyrice">          
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid18" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="goodscorexss(),goodplay(),magic18(),add()" href="#easy_page_19" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 22pt; margin: 5px"> ▭ <small> Rectangle</small> </a>


          <a onclick="badscorexss(),badplay(),magic18()" href="#easy_page_19" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 22pt; margin: 5px"> ☐ <small> Square  </small> </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show18" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_19" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic18(){

    setTimeout(function(){

        var xhid18 = document.getElementById("hid18");
        xhid18.hidden = "hidden";

        var xshow18 = document.getElementById("show18");
        xshow18.hidden = "";

        var xpakita18 = document.getElementById("pakita18");
        xpakita18.hidden = "";

    },2000);
}


</script>


<!-- END of Question 18  -->


















<!-- START of Question 19 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_19"  style="background-color: white; background-position: top;background-size: 100%">

 
      <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">19 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita19" hidden="hidden" src="media/pakita.png" width="90%">
                <h2> What shape is this button? </h2>
                <br>
                <img src="media/easy/easy-19.png" width="90%" class="jellyrice">          
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid19" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="badscorexss(),badplay(),magic19()" href="#easy_page_20" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> Oval </a>


          <a onclick="goodscorexss(),goodplay(),magic19(),add()" href="#easy_page_20" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 30pt; margin: 5px"> Circle </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show19" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_page_20" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic19(){

    setTimeout(function(){

        var xhid19 = document.getElementById("hid19");
        xhid19.hidden = "hidden";

        var xshow19 = document.getElementById("show19");
        xshow19.hidden = "";

        var xpakita19 = document.getElementById("pakita19");
        xpakita19.hidden = "";

    },2000);
}


</script>


<!-- END of Question 19  -->
















<!-- START of Question 20 --------------------------------------------------------------------------------------------------------- -->


<div data-role="page" id="easy_page_20"  style="background-color: white; background-position: top;background-size: 100%">

 
       <div style="width: 100%; background-color: #ffc335; padding: 5px; border-bottom: 2px outset black;">

        <button onclick="lalabas()" style="border: 5px ridge skyblue; background-color: lightblue; border-radius: 10px" class="btn-sm"> <i class="el el-fw" style="color: white">&#xf189;</i> </button>

        <p style="color: white; border: 4px ridge hotpink; float: right; background-color: lightpink;border-radius: 50%" class="btn-sm">20 | 20</p>
        
      </div>

      <br>

      <div  >
            <center>
                <img id="pakita20" hidden="hidden" src="media/pakita.png" width="90%">
                <h2> What shape is this strawberry? </h2>
                <br>
                <img src="media/easy/easy-20.png" width="90%" class="jellyrice">          
            </center>
      </div>



<!-- TO BE SEALED -->
      <div id="hid20" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> <i>Choose your answer:</i> </center>
        <center>
 
        <a onclick="goodscorexss(),goodplay(),magic20(),add(),scoredragon()" href="#easy_sum" class="btn btn-success " style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 19pt; margin: 5px">♡ Heart </a>


          <a onclick="badscorexss(),badplay(),magic20(),scoredragon()" href="#easy_sum" class="btn btn-success"  style="border-radius: 20px; color: white; font-weight: bolder;width: 45%; font-size: 19pt; margin: 5px"> ☾ Crescent </a>

        </center>
      </div>


<!-- TO BE REVEALED -->
      <div id="show20" hidden="hidden" style="position: fixed; bottom: 0; width: 100%;padding: 5px; border-top: 2px outset black; background-color: #ffc335;">
        <center> 
          <i>This question is already answered.</i> 
          <a href="#easy_sum" onclick="pootplay()" data-transition="slide" class="btn btn-info " style="border-radius: 20px; color: white; font-weight: bolder; font-size: 30pt; margin: 5px"> Next Question </a>
        </center>
      </div>




</div>


<!-- Script ng Hiding -->
<script type="text/javascript">



function magic20(){

    setTimeout(function(){

        var xhid20 = document.getElementById("hid20");
        xhid20.hidden = "hidden";

        var xshow20 = document.getElementById("show20");
        xshow20.hidden = "";

        var xpakita20 = document.getElementById("pakita20");
        xpakita20.hidden = "";

    },2000);
}


</script>


<!-- END of Question 20  -->








<style> .checked { color: orange; } </style>


<audio id="scorefeedback" hidden="true" src="media/scoredragon.mp3"> </audio>

<script>
      var crznscore = document.getElementById("scorefeedback");

      function scoredragon() {

        setTimeout(soundesu, 1000);

        function soundesu(){ crznscore.play();}

      }

      function againplease(){
        window.location.replace('easy_AF.php');
      }


</script>



<div data-role="page" id="easy_sum" style="background-image: url(media/a.gif);">

     <center>
      
      <br><br><br>

      <div style="border: 5px outset darkturquoise; border-radius: 25px; padding: 15px; margin: 5px; background-color: beige; background-image: url(media/xxx.gif); background-position: center;">
        <br><br>
        <div style="z-index: 10; width: 100%">
        <p id="s1" class="el el-fw jellyrice" style="font-size: 25px">&#xf1fe;</p>
        <p id="s2" class="el el-fw jellyrice" style="font-size: 40px">&#xf1fe;</p>
        <p id="s3" class="el el-fw jellyrice" style="font-size: 60px">&#xf1fe;</p>
        <p id="s4" class="el el-fw jellyrice" style="font-size: 40px">&#xf1fe;</p>
        <p id="s5" class="el el-fw jellyrice" style="font-size: 25px">&#xf1fe;</p>
        </div>
        <br>
        <br>


          <h1 style="width: 150px; height: 150px; border-radius: 50%; background-color: lightblue; padding: 20px" id="resulta" style="color: white; font-size-adjust: 100%"></h1>


        <h3 id="kumento" style="color: black;"></h3>
        <h1 id="ohyessir" style="color: red;"></h1>
        <br>
        <h1  hidden="" id="gainedstar" style="color: black;"></h1>

        <br>
        <br>

<form action="submit_easy.php" method="POST" rel="external">


        <input hidden type="text" name="xstudent" value="<?=$wee['studentID'] ?>" >
        <input hidden type="text" name="xteacher" value="<?=$wee['SteacherID'] ?>"  >
        <input hidden type="text" name="xscore" id="scorePHP">
        <input hidden type="text" name="xstar" id="starPHP">


        <button style="width: 45%; color: white;  font-weight: bold; box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7);" class="btn btn-warning btn-block btn-lg" type="submit" name="submit" rel="external"> <i class="el el-fw">&#xf1b3;</i> Submit </button>

</form>
        <br>

        <a onclick="againplease()" style="width: 45%; color: white;  font-weight: bold; box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7);" class="btn btn-info btn-block btn-lg" > <i class="el el-fw">&#xf1da;</i> Retry </a>

        <br>

      </div>

     </center>
</div>












    <script src="vendor/jquery.mobile-1.4.5.min.js"></script>
    <script src="vendor/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.min.js"></script>
    <script src="vendor/sweetalert.min.js"></script>
    <script src="vendor/own.js"></script>
</body>

</html>


<?php
}else{
  header('location:errorlogin.php');
}
?>  