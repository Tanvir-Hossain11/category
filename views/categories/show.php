<?php
include_once './../../vendor/autoload.php';

use Project\Controllers\Student;

$categoryShow = new Student();

$categoryToShow = $categoryShow->details($_GET['id']);

//print_r($studentInfo);

?>

<a href="./index.php">List</a>
<h1>Category Info</h1>
<p>Category Id: <?= $categoryToShow['category_id'] ?></p>
<p>Name: <?= $categoryToShow['name'] ?></p>