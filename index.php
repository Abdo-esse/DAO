<?php
  require 'app/models/stagires.php';

  $stagire=new Stagire();

$stagire->setNom("Abdel ilah");
$stagire->setPrenom("essemlali");
$stagire->setAge(12);
$stagire->setLogin('abdo');
$stagire->setPassword(19062);

print_r($stagire->creat());



















?>