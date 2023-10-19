<?php
setcookie("nome", $_GET["nome"], time()+3600);
setcookie("cidade", $_GET["cidade que nasceu"], time()+3600);

header('location: criacookies.php');


?>