<?php
//si le fichier est appelé directement dans le navigateur, on redirige vers index.php 
if (stristr($_SERVER['REQUEST_URI'], ".adm.php")) header("location:../index.php");

print "<h2>users</h2>";

?>