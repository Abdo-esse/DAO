<?php
  require 'app/models/stagires.php';

  $stagire=new Stagire();
echo "<pre>";
$stagire->setId(12);
$stagire->setNom("Abdel ilah");
$stagire->setPrenom("essemlali");
$stagire->setAge(12);
$stagire->setLogin('abdo');
$stagire->setPassword(19062);
$stagire->creat();
print_r($stagire);

echo "<pre>";

















?>