<?php
require_once("functions.php");
$id=$_GET["id"];
addPanier($id);
header("location: monpanier.php");
?>