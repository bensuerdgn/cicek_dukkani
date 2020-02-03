<?php 
  try {
    $db = new PDO("mysql:host=localhost;dbname=cicek_dukkani;charset=utf8", "root", "root");
  } catch(PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
  }
?>