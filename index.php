<?php

require 'functions.php';
require 'index.view.php';



$pdo=connectdb();

$statement=$pdo->prepare('SELECT * FROM todolist ');
$statement->execute();
$tasks=$statement->fetchAll(PDO::FETCH_OBJ);




