<?php
session_start();
?>
<!DOCTYPE html>
<html >
<head>
	<title>About Us</title>
	<meta lang="en">
	<link rel="icon" type="image/jpg" href="images/llogo.jpg">
	<link href="css/aboutus.css" rel="stylesheet">
  	<link href="hf.css" rel="stylesheet">
	<link rel="stylesheet" href="css/location.css">
	<script src="javascript/location.js"></script>

	<script>
function change(){
var k=new Date();
var d= k.getHours();
if (d<9)
{
 document.getElementById("p").style.backgroundImage="url('images/back3.png')";
}
else if (d<17) {
 document.getElementById("p").style.backgroundImage="url('images/e.jpg')";

}
else if (d<24){
 document.getElementById("p").style.backgroundImage="url('images/back2.jpg')";
}
document.getElementById("p").className = "mystyle";

}
</script>
  	<style>
  		#llogo {
margin-top:2%;
margin-left:7%;
float:left;
width:70%;
}
#imglogo {
margin-right:2%;
}
.findfooter{
margin-right:2%;
}
  	</style>
</head>
<body>
  <article id="p">
<?php require 'header.php';?>
<div style="left:-300px;">
<?php
if(isset($_SESSION['username']))
{
	$user = $_SESSION['username'];
	echo "<p><b>User:</b> $user</p>";
}
?>
</div>
<div style="margin-top:-26%;margin-bottom:17%;box-sizing:border-box;">
<p id="title" >About Us</p>
</div>
  <script> change();</script>


 <iframe width="500" height="300" class="video" src="https://www.youtube.com/embed/IQVdvGRkfKs?start=6&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>

 <h3 class="h3">Dream Travel - Who Are We</h3>
<p class="paragraf">
	We are a group of students who found Dream Travel. Our team managed to create such a site
	to discover best parts of World. We all like to travel and to discover new places so we
	thought that it is good to make a site and put in there best places all over the world.
        Maybe this site will help people to find places they like and to see their prices. </p>

     <h3 class="h3"> Why Dream Travel</h3>
<p class="paragraf">
	As we said, we put in there best places who are worthy visiting at last once in lifetime.
        Traveling these places is like like a dream which everyone wants to realize. So we thought
        this would be best name for it.
</p>
<div class="tabela">

  <table class="table">
    <caption class="caption">Places We Have Been To </caption><br>
      <tr>
        <th>Continent</th>
        <th>Contry</th>
        <th>City</th>
        <th>Place</th>
        <th>Last Time Visited</th>
        <th>Our Rate</th>
      </tr>
<tr>

    <td>Europe</td>
    <td>France</td>
    <td>Paris</td>
    <td>Eiffel Tower</td>
    <td>19/01/2008</td>
    <td>9/10</td>

</tr>

<tr>

    <td>Europe</td>
    <td>Italy</td>
    <td>Rome</td>
    <td>Colosseum</td>
    <td>11/11/2004</td>
    <td>7/10</td>

</tr>
<tr>

    <td>Europe</td>
    <td>Germany</td>
    <td>Berlin</td>
    <td>Brandenburg Gate</td>
    <td>30/8/2013</td>
    <td>8/10</td>

</tr>
<tr>

    <td>America</td>
    <td>California</td>
    <td>San Francisko</td>
    <td>Golden Gate Bridge</td>
    <td>12/2/2011</td>
    <td>9/10</td>

</tr>
<tr>

    <td>Europe</td>
    <td>France</td>
    <td>Paris</td>
    <td>Eiffel Tower</td>
    <td>19/01/2008</td>
    <td>9/10</td>

</tr>
<tr>

    <td>America</td>
    <td>New York</td>
    <td>New York City</td>
    <td>Empire State Building</td>
    <td>15/4/2016</td>
    <td>8.5/10</td>

</tr>
<tr>

    <td>Asia</td>
    <td>Japan</td>
    <td>Tokyo</td>
    <td>Tsukiji fish market</td>
    <td>19/01/2007</td>
    <td>7/10</td>

</tr>
  </table>
</div>

<div style="margin-left:3%;">

  <div class="column">
    <div class="card">
      <img src="images/adriatik.jpg" style="width:100%">
      <div class="container1">
        <h2>Adriatik Ademi</h2>
        <p class="title">Team Member</p>
        <p>Student ne Universitetin e Prishtines</p>
        <p>ademi.adriatik@gmail.com</p>
        <p><button class="button"><a href="mailto:ademi.adriatik@gmail.com?Subject=Dream%20Travel" >Contact</a></button></p>
      </div>
    </div>
</div>


  <div class="column" >
    <div class="card">
      <img src="images/besndik.jpg" style="width:100%">
      <div class="container1">
        <h2 style="padding: 0 0;margin-left:-8px;font-size:23px;">Besnik Kelmendi</h2>
        <p class="title">Team Member</p>
        <p>Student ne Universitetin e Prishtines</p>
        <p style="margin-left:-7px;">kelmendi.besnik3@gmail.com</p>
        <p><button class="button"><a href="mailto:kelmendi.besnik3@gmail.com?Subject=Dream%20Travel" >Contact</a></button></p>
      </div>
    </div>

</div>


  <div class="column">
    <div class="card">
      <img src="images/lona.jpg" style="width:100%">
      <div class="container">
        <h2>Bleona Hasanaj</h2>
        <p class="title">Team Member</p>
        <p>Studente ne Universitetin e Prishtines</p>
        <p>bleonahasanaj.b@gmail.com</p>
        <p><button class="button"><a href="mailto:bleonahasanaj.b@gmail.com?Subject=Dream%20Travel" >Contact</a></button></p>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <img src="images/brikena.jpg" style="width:100%">
      <div class="container">
        <h2>Brikena Ahmeti</h2>
        <p class="title">Team Member</p>
        <p>Studente ne Universitetin e Prishtines</p>
        <p>brikena.ba@gmail.com</p>
        <p><button class="button"><a href="mailto:brikena.ba@gmail.com?Subject=Dream%20Travel" >Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/festa.jpg" style="width:100%">
      <div class="container">
        <h2>Festin&euml; Byty&ccedil;i</h2>
        <p class="title">Team Member</p>
        <p>Studente ne Universitetin e Prishtines</p>
        <p>festinaabytyqi@gmail.com</p>
        <p><button class="button"><a href="mailto:festinabytyqi@gmail.com?Subject=Dream%20Travel" >Contact</a></button></p>
      </div>
    </div>
  </div>
</div>
<br><br><br>

<?php require 'footer.php';?>

</article>
  </body>
</html>
