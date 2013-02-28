<html>
<head>
<title>Galeria</title>
<style type='text/css'>
   body
   {
      font-family:arial;
    background:black;
	  color: white;
   }
   #contenedor{
	  position: absolute;
	  margin: 0px 39px auto 40px;
   }
   #wrapper
   {
      width:100%;
      margin:0 auto:
   }
   .gallery{
   float:left; width:100%;
   }
   #back
   {
      display:block;
      padding:5px;
      float:left;
   }
   #backAlbums
   {
      display:block;
      padding:5px;
      float:right;
   }
   #next
   {
      float:right;
      display:block;
      padding:5px;
   }
   #prev
   {
      float:left;
      display:block;
      padding:5px;
   }
   .ImageLink
   {
      display:block;
      float:left;
      padding:5px;
      margin:5px;
   }
   .ImageLink img
   {
      width:250px;
   }
</style>

<script type="text/javascript" src="sexylightbox.v2.3.jquery.min.js"></script>
<script type="text/javascript" src="jquery.easing.1.3.js"></script>
<link rel="stylesheet" href="sexylightbox.css" type="text/css" />
<script type="text/javascript">
			$(document).ready(function(){
				SexyLightbox.initialize({color:'blanco', dir: 'sexyimages'});				
			});
</script>

</head>

<body>
<div id ="Contenedor">

<div id ="wrapper">
<?php
//aqui se cambia el ID del Usuario de facebook ya sea FanPage o no!! esta Tiene la de Un Trabajo Actual de un Site de Turismo
   define('PAGE_ID', '188065314541169');
   define('APP_ID','');
   define('APP_SECRET','');
   include("functions/phpcUrl.php");
   $face = new FacePageAlbum(PAGE_ID, $_GET['aid'], $_GET['aurl'], APP_ID, APP_SECRET);

?>
</div>
</div>
</body>
</html>
