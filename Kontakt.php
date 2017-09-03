<html>
<head>
  <link rel="stylesheet" type="text/css" href="main_style.css"></link>  
    <meta http-equiv="content-type" content="text/html; charset=utf-8">       
    <meta name="generator" content="PSPad editor, www.pspad.com">       
    <title> Kontakt </title>   
</head>
<!-- Beginn Body -->
<body>

<div class="container">
<!-- Beginn container - schließt erst ganz am Ende -->
  <!-- Beginn Header -->
  <header>
  
    <div class ="banner">
      <a href="index.php"> <img src="Galerie/banner_Logo.png"> </a>
    </div>

  </header>
  
  <!-- Beginn Navigation -->
 <?php
 include ('menue.html');
 ?>
  <!-- Navigation Ende ------------------------------------------------------------------------------->
  
  <div class ="wrapper">
  
  <!-- Google Maps -->
  <div id = "anfahrt">
  <br>
  <!-- Google Maps Script -->
  <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:500px;width:500px;'><div id='gmap_canvas' style='height:500px;width:500px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://bestonline-casinos.net/'>BestOnline-Casinos.net</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=b772b37fb58b96b3dc992d30076dfe875f441283'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(47.78973,9.605459999999994),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(47.78973,9.605459999999994)});infowindow = new google.maps.InfoWindow({content:'<strong>Ravensburg Leprechauns</strong><br>Br&uumlhlstra&szlige 31<br>88212 Ravensburg<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
  </div>
  <!-- Beginn Content -->
  <div id = "kontakt">
        <p>
        <h3> <b> Kontakt </b> </h3>
        <hr>
        Abteilungsleiter und Coach:  <br>
        Stefan Janezic              <br>
         <br>
        Stellvertretender Abteilungsleiter <br>
        Mirko Wengrzik                                <br>
        <br>
		e-mail: info@ravensburg-leprechauns.de
		<br>
		<br>
        oder &uuml;ber die Gesch&auml;ftstelle des TSB:<br>
                     <br>
        Gesch&auml;ftsstelle des TSB Ravensburg<br>
        Br&uuml;hlstr. 31                         <br>
        88212 Ravensburg<br>
        Tel. 0751-22247<br>
        Fax 0751-22237<br>
        e-mail TSB.Ravensburg@t-online.de
        </p>
        <hr>
        <p>
        <br>
        F&uuml;r Anfragen nutzen sie bitte unser <a href="Kontaktformular.html"> <b> Kontaktformular. </b> </a>
        <br> <br> Wir werden uns schnellstm&ouml;glichst bei Ihnen melden. Danke.  
        </p>
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