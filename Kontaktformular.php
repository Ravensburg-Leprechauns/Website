<html>
<head>
  <link rel="stylesheet" type="text/css" href="main_style.css"></link>  
    <meta http-equiv="content-type" content="text/html; charset=utf-8">       
    <meta name="generator" content="PSPad editor, www.pspad.com">       
    <title> Kontaktformular </title> 
</head>
<!-- Beginn Body -->
<body>

<div class="container">
<!-- Beginn container - schlieﬂt erst ganz am Ende -->
  <!-- Beginn Header -->
  <header>
  
    <div class ="banner">
      <a href="index.php"> <img src="Galerie/banner_Logo.png"> </a>
    </div>

  </header>
  
  <!-- Beginn Navigation -->
<?php
include 'menue.html';
?>
  <!-- Navigation Ende ------------------------------------------------------------------------------->
  
  <div class ="wrapper">
  
     <div class="abgesendet">
  <br>
  Vielen Dank f√ºr Ihre Nachricht!
  <br>
  Die Nachricht wurde erfolgreich an die Leps geschickt.
  <br>
  <br>
  </div>
  
  </div>
  
   <!-- Beginn Content -->
 

  
    <!-- Beginn Kontaktanfrage PHP -->
  <?php
  
	header("Location: http://www.ravensburg-leprechauns.de");
  
  $vorname	=$_REQUEST ['vorname'];
  $nachname =$_REQUEST ['nachname'];
  $mail		=$_REQUEST ['mail'];
  $telefon	=$_REQUEST ['telefon'];
  $nachricht	=$_REQUEST ['nachricht'];
  
  
  $empfaenger = "info@ravensburg-leprechauns.de";
  $absender = $mail;
  
  $betreffwebmaster = "Kontaktanfrage ($name $nachname)";
  $koerperwebmaster = "$vorname $nachname hat &uuml;ber die das Kontaktformular Ihrer Website folgende Anfrage gestellt: \n\n" .
  "\n\n
  Kontaktdaten : \n
  \tName: $vorname $nachname \n
  \teMail: $mail \n
  \n\n" .
  $nachricht;
  
   mail ("$empfaenger", "$betreffwebmaster", "$koerperwebmaster\n", "FROM: $absender\n" );
   
 
  
  ?>
  <!-- Ende Kontaktanfrage PHP -->
  

  
  <!-- Beginn Footer -->
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
    
    
  </footer> <!-- Footer schlieﬂt -->
  </div>
  </body>
  </html>