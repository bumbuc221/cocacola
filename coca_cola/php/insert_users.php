<?php
$conn = new mysqli('localhost', 'root', '', 'coca_cola');
if (mysqli_connect_errno()) {
    exit('Connect failed: '. mysqli_connect_error());
    header("Location:../html/login.php");
}

$sql = "SELECT * FROM `utilizatori`";
if(!$sql)
    header("Location:../html/login.php");
$result = $conn->query($sql);
if (!$result->num_rows)
{

    $file = fopen("../csv/users.csv", "r");

    while (!feof($file)) {
        $a=fgetcsv($file);
        $conn = new mysqli('localhost', 'root', '', 'coca_cola');
        $dd = "INSERT INTO `utilizatori` (nume, email,parola) VALUES ('$a[0]','$a[1]','$a[2]')";
        if (!mysqli_query($conn, $dd))
            echo '<h1>Datele nu au fost adaugate incercati din nou!</h1>';
        $dd=0;
        mysqli_close($conn);
    }
    fclose($file);
}
