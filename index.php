<?php
require_once "personne.php";

$peter = new Personne();
$peter->setName("PETER C'EST UNE PERSONNE");

echo $peter->getName();

?>