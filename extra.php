<!DOCTYPE html>
<html >
    <head>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta lang="en">
        <title>Extras</title>
		<link rel="icon" type="image/jpg" href="images/llogo.jpg">
        <link rel="stylesheet" href="css-tour.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
              $(".sidebarBtn").click(function(){
              $(".sidebar").toggleClass('active');
              $(".sidebarBtn").toggleClass('toggle');
              });
			  });
		</script>

		<style>

	/*	#body {
      background: url(images/extra5.jpg) 35% 7% no-repeat, url(images/extra3.jpg) 35% 45% no-repeat, url(images/extra4.jpg) 35% 87% no-repeat;

    background-size: 1200px, 1200px, 1200px;

}*/

#Clock{
font-size:15px;
transform: translateX(100%);
background-color:#111;
 color:#fff;
padding: 10px ;
max-width:25%;
}
.repeating-linear {
  color: grey;
  border: 5px solid grey;

  max-width:30%;
  height:244px;
  float:left;
  margin-left:15%;

}


.un {
border-style: solid;
border-width: 5px 5px 5px;

width:30%;
height:244px;
margin-left:7%;
float:left;

}
.audio{
margin-top:2%;
margin-left:13%;
float:left;
width:35%;
height:33px;
border: 2px solid rgb(140,140,140);
box-shadow: 5px 7px rgb(120,120,120);
margin-bottom:5%;
}
table {
    border: 1px solid grey;
    width: 80%;
	margin:5% 10% 5% 10%;

}

th, td {

    padding: 4px;
	text-align:center;
}

tr:nth-child(even){background-color: #ccc;}
tr:nth-child(odd){background-color: #e7e8ed;}
th {
    background-color: rgb(120,120,120);
    color: white;
	font-size:14px;
}
.th {
background-color: rgb(180,180,180);
color:black;
}
caption{
color:white;
font-size:27px;
font-family:Tahoma;
text-shadow: 2px 2px rgb(130,130,130);
}
mark{
background-color: #404040;
color:white;
font-size:19px;
display:flex;
width:18%;
margin-left:10%;
font-family:MyFont;
padding:3px;
margin-bottom:1%;
}
@font-face {
   font-family: MyFont;
   src: url(font/Quicksand-Bold.otf);
   font-weight:bold;

}
#reg {
background-color: rgb(62,62,62);
background-clip: content-box;

}
#uw {
width:78%;
margin-left:10%;
margin-top:4%;
font-family:MyFont;
color:white;

font-size:17px;
 padding:18px;
    border:8px double black;
    background-image:url('images/origin.jpg');
    background-origin:padding-box;
    background-repeat:no-repeat;
}
.bar {
  fill: #aaa;
  height: 21px;
  transition: fill .3s ease;
  cursor: pointer;
  font-family: Cambria;
    font-weight:bold;
  text {
    fill: #555;
  }
}
.bar1 {
  fill: #606060;
  height: 21px;
  transition: fill .3s ease;
  cursor: pointer;
  font-family:Cambria;
    font-weight:bold;
  text {
    fill: #555;
  }
}

.bar:hover,
.bar:focus {
  fill: white ;


  text {
    fill: white;

  }
}
.bar1:hover,
.bar1:focus {
  fill: white !important;


  text {
    fill: white;

  }
}
@font-face{
	font-family: "beautiful_holiday";
	src: url(font/holiday.ttf);
}
#h {
	text-align: center;
	font-family: "beautiful_holiday";
	margin-bottom: 5%;
	font-size:40px;
	color:white;
}
.div {
	margin-left: 4%;
	margin-right: 4%;

}
.div1 {
 	float: left;
 	margin-left: 5%;
	margin-right: 5%;

}
.div2 {
float: right;

margin-left: 5%;
	margin-right: 5%;

}
.div3 {
float: left;

margin-left: 5%;
	margin-right: 5%;


}
.div4 {
float:right;

margin-left: 7%;
	margin-right: 7%;

}
input[type=button]{
margin-top: 15%;
width: 170px;
height: 70px;
outline: none;
background-color: white;
border-radius: 15px;
color: #282e34;
font-size: 47px;
font-family: "beautiful_holiday";
font-weight: bold;

}

</style>


    </head>
    <body  style="background-color:#282e34;">


        <div class="foto1" style="background-image:url('images/dubai.jpg');">
          <div class="sidebar">
               <ul>
                   <li><a href="home.php">Home</a></li>
                   <li><a href="tour.html">Tour<span></span></a></li>
                   <li><a href="stats.php">Stats</a></li>
                   <li><a href="kosova.php">Kosova</a></li>
                   <li><a href="aboutus.php">About us</a></li>
                   <li><a href="form1.php">Contact us</a></li>
                   <li><a href="extra.php">Extras</a></li>
                   <li><a href="game.php">Game</a></li
               </ul>
			   <button class="sidebarBtn"><span></span></button>
           </div>
            <div class="text1">
                <spam class="korniza">
                    Extra
                </spam>
            </div>
        </div>
  <article id="body">
  <br><br>
<section >
<div >
<p class="repeating-linear" ><video width="100%" height="100%" controls style="margin-top:-1%" >
  <source src="video/placetotravel.mp4" type="video/mp4"><img src="images/antalya.jpg" width="300" height="250" alt="antalya" title="Video doesnt work" /></video>
</p>
<p class="un" ><video width="100%" height="100%" controls poster="images/albania.jpg" style="margin-top:-1%">
  <source src="video/albaniaa.mp4" type="video/mp4">
  <img src="images/albania.jpg" width="300" height="250" alt="albania" title="Video doesnt work" /></video></p>

 <p class="audio"> <audio controls style="width:100%;">
  <source src="audio/sound.mp3" type="audio/mp3"></audio></p>
  <p class="audio" style="margin-left:3%;"> <audio controls style="width:100%;">
  <source src="audio/niagara.mp3" type="audio/mp3"></audio></p></div>
</section>
<section>
  <p><mark>Why we chose Kosova?</mark></p>
<?php
$string="As you saw we left a special place for kosovo on our site because it is a new country with natural and cultural potential for tourism,
  maybe it is a small country but you can find all the types of tourism  in few kilometers.kosovo is situated in south-eastern Europe.
  The New York Times included kosovo on the list of 41 Places to go in 2011.In the same year, kosovo saw a jump of about
  40 places on the Skyscanner flight search engine which rates global tourism growth.The bulk of international tourists going to kosovo are from Albania,
  Germany, Italy, the United States, the United Kingdom, Croatia and Austria.
  Tourism is a growing sector with more tourists visiting the country every year.";
$string1=str_replace("kosovo","Kosova",$string);
echo '<p id="reg"  style="display:flex;width:80%;margin-left:10%;font-family:MyFont;font-size:17px;color:white;">'.$string1
  .'</p>';

  ?>
</section>
<section>

<script>
var e;  /* variabla globale pasi do te mund te shfrytezohen ne dy e me shume funksione*/
var f;
function table(a){
 const f=12;                         /*nese merret se shteti duhet te shpenzoj 12% per turistet qe vin duke angazhuar me shum punetor neper hapsirat publike , transporti dhe disa shpenzime tjera */
 var s=(100*a)-(100*a*12/100);

return  s.toExponential();/* merret se te ardhurat me te ulta per person qe viziton jane 100$ athere gjejme te ardhurat qe shkojne ne buxhet */
}
function diferenca(a,b,c,d){

var c1=parseFloat(c);
var d1=parseFloat(d);
if(a<Number.MAX_VALUE ){
  e=(b-a);
   f=(d1-c1);

var w=e+"/ "+f;

  return w;
  }
  }
function pritjet(ketevT,ketevI)
{
 var ketevI1= parseFloat(ketevI);
if(!isNaN(ketevT) && !isNaN(ketevI)){
var vitinTjeterT=ketevT+e;
var vitinTjeterI=ketevI1+f;

var I=vitinTjeterI.toString();
var T=vitinTjeterT.toString();
var q=I + " / " + T;
return q;
}
}

</script>

<table cellspacing="5">
  <caption>Most visited place 2016 & 2017</caption>
  <tr>
  <th style="background-color: #ccc;color:black;">Name of Place</th>
    <th>Tourists(2016)</th>
    <th>Income(2016)</th>
    <th>Tourists(2017)</th>
	<th>Income(2017)</th>
	<th>Difference (2017/2016)</th>
	<th>Expectations 2018 (I/T)</th>
  </tr>
  <tr>
    <th class="th">Hong Kong</th>
    <td id="1">26550000</td>
    <td id="2"><script>document.write(table(26550000));</script> </td>
	<td id="3">25700000</td>
	<td id="4"> <script>document.write(table(25700000));</script></td>
	<td><script>document.write(diferenca(26550000,25700000,table(26550000),table(25700000)));</script> </td>
    <td><script>document.write(pritjet(25700000,table(25700000)));</script></td>
  </tr>
  <tr>
    <th class="th">Bangkok</th>
    <td id="5">21250000</td>
    <td  id="6"><script>document.write(table(21250000));</script> </td>
	<td id="7">23270000</td>
	<td id="8"><script>document.write(table(23270000));</script> </td>
	<td><script>document.write(diferenca(21250000,23270000,table(21250000),table(23270000)));</script> </td>
     <td><script>document.write(pritjet(23270000,table(23270000)));</script></td>
  </tr>
  <tr>
  <th class="th">London</th>
  <td id="9">19190000</td>
    <td id="10"><script>document.write(table(19190000));</script> </td>
    <td id="11">19180000</td>
    <td id="12"><script>document.write(table(19180000));</script> </td>
	<td><script>document.write(diferenca(19190000,19180000,table(19190000),table(19180000)));</script> </td>
    <td><script>document.write(pritjet(19180000,table(19180000)));</script></td>
  </tr>
  <tr>
  <th class="th">Singapore</th>
  <td id="13">16600000</td>
    <td id="14"><script>document.write(table(16600000));</script> </td>
    <td id="15">17600000</td>
    <td id="16"><script>document.write(table(17600000));</script> </td>
	<td><script>document.write(diferenca(16600000,17600000,table(16600000),table(17600000)));</script> </td>
    <td><script>document.write(pritjet(17600000,table(17600000)));</script></td>
  </tr>
<tr>
  <th class="th">Dubai</th>
    <td id="17">14900000</td>
    <td id="18"><script>document.write(table(14900000));</script> </td>
    <td id="19">16000000</td>
	<td id="20"><script>document.write(table(16000000));</script> </td>
	<td><script>document.write(diferenca(14900000,16000000,table(14900000),table(16000000)));</script> </td>
	<td><script>document.write(pritjet(16000000,table(16000000)));</script></td>
</tr>
<tr>
  <th class="th">Paris</th>
  <td id="21">14390000</td>
    <td id="22"><script>document.write(table(14390000));</script> </td>
    <td id="23">14260000</td>
    <td id="24"><script>document.write(table(14260000));</script> </td>
	<td><script>document.write(diferenca(14390000,14260000,table(14390000),table(14260000)));</script> </td>
	<td><script>document.write(pritjet(14260000,table(14260000)));</script></td>
</tr>
<tr>
  <th class="th">New York City</th>
  <td id="25">12650000</td>
    <td id="26"><script>document.write(table(12650000));</script> </td>
    <td id="27">13100000</td>
    <td id="28"><script>document.write(table(13100000));</script> </td>
	<td><script>document.write(diferenca(12650000,13100000,table(12650000),table(13100000)));</script> </td>
	<td><script>document.write(pritjet(13100000,table(13100000)));</script></td>
</tr>
</table>
</section>
<section>
<div  style="margin-left:5%;display:flex;">

<div style="background:#404040;max-width:26%;padding:3%;margin-left:10%;float:left;">
<svg width="400" height="110" >
<g class="bar" >
    <rect width="160" height="15"></rect>
    <text x="162" y="8.6" dy=".30em">2016 </text>
	<text x="204" y="16" dy=".32em" style="fill:#aaa;"> HONG KONG</text>
  </g>
  <g class="bar1">
    <rect width="150" height="15" y="17"></rect>
    <text x="159" y="25" dy=".30em">2017 </text>
  </g>
  <g class="bar">
    <rect width="140" height="15" y="40"></rect>
    <text x="147" y="48" dy=".30em">2016</text>
	<text x="200" y="54" dy=".32em" style="fill:#aaa;">BANGKOK</text>
  </g>
  <g class="bar1">
    <rect width="150" height="15" y="57"></rect>
    <text x="155" y="64" dy=".30em">2017</text>

  </g>
  <g class="bar">
    <rect width="134" height="15" y="80"></rect>
    <text x="141" y="88" dy=".30em">2016</text>
	<text x="190" y="96" dy=".32em" style="fill:#aaa;">LONDON</text>
  </g>
  <g class="bar1">
    <rect width="130" height="15" y="97"></rect>
    <text x="137" y="106" dy=".30em">2017</text>

  </g>
</svg>
</div>
 <div style="background:#404040;max-width:27%;padding:3%;float:left;margin-left:10%;">
      <svg width="400" height="110" >
        <g class="bar" >
         <rect width="140" height="15"></rect>
         <text x="151" y="8.6" dy=".30em">2016 </text>
	     <text x="197" y="16" dy=".32em" style="fill:#aaa;">SINGAPORE</text>
        </g>
       <g class="bar1">
          <rect width="145" height="15" y="17"></rect>
          <text x="156" y="25" dy=".30em">2017 </text>
        </g>
       <g class="bar">
           <rect width="137" height="15" y="40"></rect>
           <text x="144" y="48" dy=".30em">2016</text>
	       <text x="200" y="54" dy=".32em" style="fill:#aaa;">DUBAI</text>
        </g>
        <g class="bar1">
         <rect width="143" height="15" y="57"></rect>
         <text x="150" y="64" dy=".30em">2017</text>

        </g>
        <g class="bar">
         <rect width="131" height="15" y="80"></rect>
         <text x="141" y="88" dy=".30em">2016</text>
	     <text x="190" y="96" dy=".32em" style="fill:#aaa;">PARIS</text>
        </g>
        <g class="bar1">
          <rect width="129" height="15" y="97"></rect>
          <text x="137" y="106" dy=".30em">2017</text>
        </g>
      </svg>
     </div>
</div>
</section>

<section>

<div id="uw" >
<p ><dl>
  <dt >UNWTO</dt>
  <dd >United Nations World Tourism Organization</dd></dl>
  </p>
<p  >UNWTO generates market knowledge, promotes competitive and sustainable tourism policies and instruments, fosters tourism education and training, and works to make
 tourism an effective tool for development through technical assistance projects in over 100 countries around the world.
UNWTO’s membership includes 156 countries, 6 territories and over 500 affiliate members representing the private sector,
 educational institutions, tourism associations and local tourism authorities. Its headquarters are located in Madrid.</p>

</div>
<div id="uw">
<p >WTTC</p>
<p >The World Travel and Tourism Council</p>
<p  id="f">WTTC is the only global body that brings together all major players in the Travel and
 Tourism sector, enabling them to speak with One Voice to governments and international bodies.
 WTTC works to raise awareness of Travel and Tourism as one of the world's largest economic sectors,
 supporting 292 million jobs and generating 10.2% of global GDP.
</div>
 </section>
 <script>
var a=document.getElementById("f").innerHTML;
const s=/WTTC/g;
if (s.exec(a)!= null){
document.getElementById("f").setAttribute("title","The World Travel and Tourism Council");
}
 </script>
<section>
<?php

$c=0;
function travellers($n,$d)
{
	global $c;

	if($c==0){
	$db=substr($d,0,4);
	$dd=substr($d,strlen($db)+1,4);
	$GLOBALS['all']=" ".$n." Birth:".$db." Death:".$dd.",";
	$c=1;
	}
	else
	{
    $db=substr($d,0,4);
	$dd=substr($d,strlen($db)+3);
	$GLOBALS['all']=$GLOBALS['all']." ".$n." Birth:".$db." Death:".$dd.",";
	}

}
travellers("Marco Polo","1254-1324");
travellers("John Cabot","1450–1500");
travellers("Christopher Columbus","1451–1506");
travellers("Ibn Battuta","1304–1369");
travellers("Amerigo Vespucci","1454–1512");
travellers("Xuanzang(Hsuan Tsang)","0602–0664");
travellers("Ferdinand Magellan","1480–1521");
travellers("Bartolomeu Dias","1450-1500");
travellers("Jacques Cartier","1491–1557");
travellers("Herodotus","484B–425B");
echo '<div id="uw">
<div style="font-family:MyFont;font-size:16px;margin-top:4%;">10 Famous Travellers Who Changed The World</div>
<div style="font-family:MyFont;;font-size:14px;margin-bottom:-3%;" id="ob">'.$all.'</div><br><br>';

?>


</div>
</section>

</article>

  <footer>

         <div class="foto8" style="background-image:url('images/mon.jpg');margin-top:5%;">
                 <canvas></canvas>
                <script src="javascript/canvas1.js"></script>
                  <div class="text1">
                 <spam class="korniza">
                 Dream Travel
                 </spam>
                </div>
				<p  id="Clock" style="float:right;margin-top:-5%;margin-right:22%;"></p>
	<script src="javascript/clock.js"></script>
</footer>
    </body>
</html>
