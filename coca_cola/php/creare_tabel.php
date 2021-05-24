<?php
include "../php/creare_baza.php";
$conn = mysqli_connect("localhost", "root", "")
or die("Eroare la conectare cu MySQL");
$a=0;
$selectdb = mysqli_select_db($conn, 'coca_cola');
if (!$selectdb)
    echo "Baza de date test nu a putut fi selectata  " . mysqli_errno($conn);
$sql= "CREATE TABLE `utilizatori` (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,nume varchar(50) NOT NULL,email varchar(30) NOT NULL,parola varchar(40) NOT NULL,c1 INT DEFAULT 0,c2 INT DEFAULT 0,c3 INT DEFAULT 0,c4 INT DEFAULT 0)";
if (!mysqli_query($conn, $sql))
    $a++;

mysqli_close($conn);

