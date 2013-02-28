Galeria-Import-Facebook-en-Web-Personal
=======================================

Galeria Web 4BooT (Poner los álbumes de Facebook en tu web )

Paso 1: Añadir el código en la página que deseemos

Una vez ya tenemos añadido el sistema para poder insertar los álbumes, hay que añadir el codigo que los obtendrá y mostrará. Simplemente hay que añadir:

<?php
define(‘PAGE_ID’, ’00000000000000′);
define(‘APP_ID’,”);
define(‘APP_SECRET’,”);
$face = new FacePageAlbum(PAGE_ID, $_GET['aid'], $_GET['aurl'], APP_ID, APP_SECRET);
?>

Veréis que hay 3 “define” del cuál solo nos interesa el primero, donde hay que substituir los “00000000000000″ por el id de nuestra página de Facebook.

Paso 2: Aplicar Hoja de Estilos (Por Ejemplo un Fancybox, LightBox o Slider ... entre otros. de la libreria Jquery)

A partir de aquí hay que trabajar el estilo de los diferentes elementos para darle forma, pero el esqueleto básico ya esta listo.

Ire Mejorando la herramienta de Opengraph en estos dias!!

Se me esta Complicando lo del lightbox!! pero lo Lograre, quizas hasta sea una tonteria!!!! :)

Solo tengo que Añadir un ( rel = "lightbox" ) a cualquier atributo enlace tag para activar el "Lightbox", pero cuando lo agrego donde lo deseo no Funciona!!
 Pero ire pensado h revisando poco a poco a ver donde esta la Solucion!!, y si alguien la Consigue avisadme jejeje ;)
