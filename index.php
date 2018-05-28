<?php
/*
	Point d'entrée de l'application 
	Ce fichier sert à rediriger l'utilisateur vers la page demandée
	
	*/
	//inclusion de l'entête html
	require("templates/header.tpl");
	
	if (isset($_GET["action"])) {
		switch($_GET["action"]) {
			case "users":
				require("admin/users.adm.php");
				break;
			case "contact":
				require("includes/contact.inc.php");
				break;
			case "home":
			default:
				print "<h2>home</h2>";
				break;
			
		}
	} else {
		print "<h2>home</h2>";
	}
	//inclusion du footer html
	require("templates/footer.tpl");
	
?>

