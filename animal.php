<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>OOP</title>
</head>
<body>
<h1>Latihan OOP</h1>
<?php
class Animal{
  public $name;
  public $legs = 4;
  public $cold_blooded = "no";
  public function __construct($name){
    $this->legs = $name;
    $this->cold_blooded = $name;
    
  }
}

?>