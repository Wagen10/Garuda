<?php
require_once('animal.php');
$sheep = new Animal("shaun");
echo $sheep->legs; // "shaun" echo $sheep->legs; // 4
echo $sheep->cold_blooded; // "no"
?>