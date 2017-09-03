<html>
<head>
  <link rel="stylesheet" type="text/css" href="main_style.css"></link>  
    <meta http-equiv="content-type" content="text/html; charset=utf-8">       
    <meta name="generator" content="PSPad editor, www.pspad.com">       
    <title> Saison </title> 
</head>

<!-- Beginn Body 
--------------- -->
<body>

  <!-- Script Fancybox -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <link rel="stylesheet" href="fancy/source/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="fancy/source/jquery.fancybox.pack.js"></script>

    <script type="text/javascript">
  	$(document).ready(function() {
		$(".fancybox").fancybox();
  	});
    </script>
    
    
<div class="container">
<!-- Beginn container - schließt erst ganz am Ende -->
  <!-- Beginn Header -->
  <header>
  
    <div class ="banner">
      <a href="index.php"> <img src="Galerie/banner_Logo.png"> </a>
    </div>

  </header>
  <!-- ------------------------------------------------------------------------------------------------->
  
  <!-- Beginn Navigation -->
 <?php
 include ('menue.html');
 ?>
  <!-- Navigation Ende ------------------------------------------------------------------------------->
  
  
    <div class = "wrapper">
    
    <!-- Spielplan links -->
    <div class = "box_spielplan_saison"> <!-- Komplette Box -->
     <div id ="saison_schrift">  <!-- Überschrift -->
     Spielplan: Bezirksliga BB 2017
     <hr>
     </div> <!-- Überschrift Ende -->
     <div> <!-- Tabelle -->
     <table border="1" width="100%">
   <colgroup>
   <col width="1*">
   <col width="1*">
   <col width="3*">
   <col width="3*">
   </colgroup> 
   <tr>
     <td>Datum</td>
     <td>Uhrzeit</td>
     <td>Heim</td>
     <td>Gast</td>
    </tr>
    <tr>
     <td>30.04.2017</td>
     <td>15:00</td>
	 <td id="leps">Ravensburg</td>
     <td>Aichelberg</td>
    </tr>
    <tr>
     <td>07.05.2017</td>
     <td>15:00</td>
     <td id="leps">Ravensburg</td>
     <td>Gammertingen</td>
    </tr>
    <tr>
     <td>14.05.2017</td>
     <td>15:00</td>
     <td id="leps">Ravensburg</td>
     <td>Nagold/Herrenberg</td>
    </tr>
    <tr>
     <td>21.05.2017</td>
     <td>15:00</td>
     <td>Ulm</td>
     <td id="leps">Ravensburg</td>
    </tr>
    <tr>
     <td>18.06.2017</td>
     <td>16:00</td>
     <td>Aichelberg</td>
     <td id="leps">Ravensburg</td>
    </tr>
    <tr>
     <td>02.07.2017</td>
     <td>15:00</td>
     <td>Nagold/Herrenberg</td>
     <td id="leps">Ravensburg</td>
    </tr>
    <tr>
     <td>09.07.2017</td>
     <td>15:00</td>
	 <td id="leps">Ravensburg</td>
     <td>Ulm</td>
    </tr>
    <tr>
     <td>23.07.2017</td>
     <td>11:00</td>
	 <td>Gammertingen</td>
     <td id="leps">Ravensburg</td>
    </tr>
     </table> <!-- Tabellen Inhalt Ende -->
     </div> <!-- Tabelle Ende -->
    </div> <!-- Box Tabelle Ende -->
    
    
    <div class ="box_saison_tabelle">
     <div id ="saison_schrift">
     Ligatabelle 2017
     <hr>
     </div>
     <table border="1" width="100%">
  <colgroup>
  <col width="2*">
   <col width="3.5*">
   <col width="1*">
   <col width="1*">
   <col width="1.5*">
   </colgroup> 
    <tr>
     <td> <b> Pl. </b></td>
     <td> <b>Team </b></td>
     <td> <b>G </b></td>
     <td> <b>V </b></td>
     <td> <b> .pct </b></td>
    </tr>
	<tr>
	  <td>1.</td>
     <td id ="team">Aichelberg Indians</td>
     <td>0</td>
     <td>0</td>
     <td>.000 </td>
     </tr>
	 	<tr id="leps">
     <td>2.</td>
     <td id ="team">Ravensburg Leprechauns</td>
     <td>0</td>
     <td>0</td>
     <td>.000 </td>
    </tr>
       <tr>
     <td>3.</td>
     <td id ="team">Gammertinger Royals 2</td>
     <td>0</td>
     <td>0</td>
     <td>.000 </td>
    </tr>
	   <tr>

     <td>4.</td>
     <td id ="team">SG Nagold/Herrenberg</td>
     <td>0</td>
     <td>0</td>
     <td>.000</td>
    </tr>
     <tr>
     <td>5.</td>
     <td id ="team">Ulm Falcons 3</td>
     <td>0</td>
     <td>0</td>
     <td>.000</td>
    </tr>
     </table>
    </div>
    
    <div class ="box_gegner_saison">
     <div id ="saison_schrift">
     N&auml;chstes Spiel
     am 30.04.2017
     <hr>
     </div>
     <div class ="Spiel">
     <div class ="home">
	 <img src="Galerie/logos_gegner/aichelberg.png">
     </div>
     <div class= "Vs"> 
      <b> Vs. </b>
      </div>
      <div class ="away">
	  <img src="Galerie/logo_saison.jpg">
     </div>
    </div>
    </div>
    
  <!-- Beginn Footer ---------------------------------------------------------------------------------> 
  <footer>
  
  <div class = "footer_box">
    <div class=footer-text>
    &copy; by Ravensburg Leprechauns 
    </div>
    
    <div id="social"> 
      <aside class="sidebar"> 
      <tr>
      <div class = "follow"> <td> <b> #follow us </b> </td> </div>
      <td> <a href="https://www.facebook.com/RavensburgerLeprechauns/?fref=ts" target="_blank"> <img src="Galerie/Icons/icon-facebook.png"> </a>
      <td> <a href="http://www.twitter.com/@RVLeps" target="_blank"> <img src="Galerie/Icons/icon-twitter.png"> </a>
      </tr>
      </aside>
    </div>
  </div>
    
    
  </footer> <!-- Footer schließt -->
  </div>  <!-- container schließt -->
  </body> <!-- Body schließt -->
  </html>