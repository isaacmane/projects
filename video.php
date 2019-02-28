<?php
$id = str_replace("'", "", $_GET['v']);
$html = "<h2>".$_GET['t']."</h2><br>
         <iframe width='560' height='315' src='https://www.youtube.com/embed/".$id."' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe><br>
         <h3>".$_GET['d']."</h3><br>";
echo $html;
?>