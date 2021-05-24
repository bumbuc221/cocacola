<?php
session_start();
$email=$_SESSION["email"];
$conn = new mysqli('localhost', 'root', '', 'coca_cola');
if (mysqli_connect_errno()) {
    exit('Connect failed: '. mysqli_connect_error());
}

$sq = "SELECT * FROM `utilizatori`";
$a=0;$b=0;$c=0;$d=0;
$result = $conn->query($sq);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc())
        if (strcmp($row['email'], $_SESSION["email"]) == 0) {
            $a = $row['c1'];
            $b = $row['c2'];
            $c = $row['c3'];
            $d = $row['c4'];
            break;
        }
    $conn->close();
}

if($d || $b || $c || $a) {
    $conn = new mysqli('localhost', 'root', '', 'coca_cola');
// verifica conexiunea
    if (mysqli_connect_errno()) {
        exit('Connect failed: ' . mysqli_connect_error());
    }
    if ($d) {
        $sql = "UPDATE `utilizatori` SET `c4`=0 WHERE `email`='$email'";
    } else if ($c) {
        $sql = "UPDATE `utilizatori` SET `c3`=0 WHERE `email`='$email'";
    } else if ($b) {
        $sql = "UPDATE `utilizatori` SET `c2`=0 WHERE `email`='$email'";
    } else
        if ($a) {
            $sql = "UPDATE `utilizatori` SET `c1`=0 WHERE `email`='$email'";
        }
// executa interogarea si verifica pentru erori
    if (!$conn->query($sql)) {
        echo 'Error: ' . $conn->error;
    }
    $conn->close();
}
    header("Location:../html/my_account.php");