<?php
session_start();
if($_SESSION["email"]=="" || $_SESSION["nume"]=="") {
    header("Location:../html/login.php");
}else{
    $conn = new mysqli('localhost', 'root', '', 'coca_cola');
// verifica conexiunea
    if (mysqli_connect_errno()) {
        exit('Connect failed: ' . mysqli_connect_error());
    }
    $a = $_SESSION["email"];
// interogare sql UPDATE
    echo $a;
    $sql = "UPDATE `utilizatori` SET `c3`='1' WHERE `email`='$a'";

// executa interogarea si verifica pentru erori
    if (!$conn->query($sql)) {
        echo 'Error: ' . $conn->error;
    }
    $conn->close();
    header("Location:../html/my_account.php");
}
