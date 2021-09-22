 <?php include"theme.php";?>
<!-- https://www.funtrivia.com/playquiz/quiz2706001efb0c8.html -->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/logo.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  /*background: rgb(250 0 12 / 83%);*/
  background: linear-gradient(rgb(0 0 0 / 88%),rgb(0 0 0 / 83%),<?php echo $theme['color']?>);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  width: 100%;
  color: white;
  top: 5%;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: green;
}

.overlay .closebtn {
  position: absolute;
    top: -26px;
    right: 11px;
    font-size: 50px;
    color: white;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 5px;
  right: 35px;
  }
}
@media(max-width:750px){
 .overlay-content {
  padding: 2%;
  top: 5%;
} 
}
</style>
</head>
<body>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <div class="container" style="border: 2px solid white;padding: 2%">
      <div class="row">
        <div class="col-md-3" align="center">
          <img src="images/logo.png" height="100px" width="190px" style="margin-top: -13px">
        </div>
        <div class="col-md-6">
          <h2 align="center"><i class="fas fa-user-edit"></i> Zayaka Quiz Test</h2>
          <h3 class="result" align="center">Your Score :<span class="fa">0</span> <i class="far fa-smile-beam"></i></h3>
        </div>
        <div class="col-md-3" align="center">
          <?php
                  if(isset($_GET['username'])){
                      $name=$_GET['username'];
                  }
                  else{
                      $name="You Are Not Logged in ";
                  }
                  ?>
          <h5><i class="fas fa-user"style="color:<?php echo $theme['color']?>!important; font-size: 20px;"></i>
                  <span><?php echo $name;?></span></h5>
        </div>
      </div>
<br>
<p style="border-bottom-style: ridge;border-bottom-color:white"></p>  
<form name="quiz" method="post" onsubmit="return ready()">
<h5>1.This sweet is made from deep-fried, thick sugar syrup and shaped into a large, pretzel-like shape, usually orange in color ?</h5>
<input type="radio" name="q1" value="a" id="q1a">Rasgulla<br />
<input type="radio" name="q1" value="b" id="q1b">Gajar ka halwa<br />
<input type="radio" name="q1" value="c" id="q1c">Jalebi<br />
<input type="radio" name="q1" value="d" id="q1d">Bhakarwadi<br />
<br>
<h5>2.This South Indian curry is prepared mainly with the juices of tamarind or tomato along with a few spices ?</h5>
<input type="radio" name="q2" value="a" id="q2a">Rasam<br />
<input type="radio" name="q2" value="b" id="q2b">Kadi<br />
<input type="radio" name="q2" value="c" id="q2c">Sambar<br />
<input type="radio" name="q2" value="d" id="q2d">Raita<br />
<br>
<h5>3.Which of these is a popular dish from the Udupi cuisine ?</h5>
<input type="radio" name="q3" value="a" id="q3a">Poha<br />
<input type="radio" name="q3" value="b" id="q3b">Dosa<br />
<input type="radio" name="q3" value="c" id="q3c">Wada<br />
<input type="radio" name="q3" value="d" id="q3d">Puri<br />
<br>
<h5>4.What is a bhatura ?</h5>
<input type="radio" name="q4" value="a" id="q4a">A type of dal with mixed pulses<br />
<input type="radio" name="q4" value="b" id="q4b">A type of egg soup<br />
<input type="radio" name="q4" value="c" id="q4c">A type of utensil used in North Indian cooking<br />
<input type="radio" name="q4" value="d" id="q4d"> A type of bread<br />
<br>
<h5>5.Which of these is a Bengali sweet ?</h5>
<input type="radio" name="q5" value="a" id="q5a">Rasgulla<br />
<input type="radio" name="q5" value="b" id="q5b">Kulfi<br />
<input type="radio" name="q5" value="c" id="q5c">Kheer<br />
<input type="radio" name="q5" value="d" id="q5d">Payasam<br />
<br>
<input type="submit" name="submit" style="font-weight: bold;" value="Submit Quize" class="btn btn-success btn-block">

    </form>
    </div>
    <br>
  </div>
</div>
<?php include"activity_front.php";?>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
// quize js
function ready(){
const total = 5;
var score = 0;
var count;
const res = document.querySelector('.result');
// console.log(res);
//Get the data
const q1 = document.forms['quiz']["q1"].value;
const q2 = document.forms['quiz']["q2"].value;
const q3 = document.forms['quiz']["q3"].value;
const q4 = document.forms['quiz']["q4"].value;
const q5 = document.forms['quiz']["q5"].value;
const fa = document.querySelector('.fa');
//console.log(fa);
//set answers
const ans = ['c','a','b','d','a'];
//check answers
for(i=1;i<=total;i++){
    if(eval('q'+i) == ans[i-1]){
        score++;
    }
}
// alert(score);
fa.innerHTML = score;
return false;
}
</script>
</script>     
</body>
</html>
