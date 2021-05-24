<?php
session_start();
function verf_email($email)
{
    $s='/^[a-zA-Z0-9_-]{3,30}@[a-zA-Z0-9-]{3,30}.[a-zA-Z]{1,4}$/';
    if(preg_match($s,$email))
        return true;
    return false;
}
function verif_val($a,$b,$c,$d)
{
    if($a=="" || $b=="" || $c=="" || $d=="")
        return false;
    return true;
}
function verif_pasw_1($a)
{
    if(strlen($a)<6)
        return false;
    return true;
}
function verif_pasw_2($a,$b)
{
    if(strcmp($a,$b))
        return false;
    return true;
}
$nume=$_POST["c_nume"];
$email=$_POST["c_email"];
$passw1=$_POST["c_parola1"];
$passw2=$_POST["c_parola2"];

if(!verif_val($nume,$email,$passw1,$passw2))
{
    echo '<script type="text/javascript">';
    echo  "alert('Enter the correct data!')";
    echo '</script>';
    require '../html/register.php';
}
else
if(!verf_email($email))
{
    echo '<script type="text/javascript">';
    echo  "alert('Enter the correct email!')";
    echo '</script>';
    require '../html/register.php';
}
else
    if(!verif_pasw_1($passw1))
    {
        echo '<script type="text/javascript">';
        echo  "alert('Password too short!')";
        echo '</script>';
        require '../html/register.php';
    }
    else
    if(!verif_pasw_2($passw1,$passw2))
    {
        echo '<script type="text/javascript">';
        echo  "alert('Different passwords!')";
        echo '</script>';
        require '../html/register.php';
    }
    else
    {
        include "../php/creare_tabel.php";
        include "../php/insert_users.php";
        $conn = mysqli_connect("localhost", "root", "")
        or die("Eroare la conectare cu MySQL");

        $selectdb = mysqli_select_db($conn, 'coca_cola');
        if (!$selectdb)
            echo "Baza de date COCA_COLA nu a putut fi selectata  ". mysqli_errno($conn);

        $sql = "SELECT * FROM `utilizatori`";
        if(!$sql)
            header("Location:../html/login.php");
        $afirma=0;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc())
                if (strcmp($row['email'],$email) == 0) {
                    $afirma = 1;
                    break;
                }
        }
        if(!$afirma) {
            $_SESSION["email"]=$email;
            $_SESSION["nume"]=$nume;
            $dd = "INSERT INTO `utilizatori` (nume, email,parola) VALUES ('$nume','$email','$passw1')";
            if (!mysqli_query($conn, $dd))
                echo '<h1>Datele nu au fost adaugate incercati din nou!</h1>';
            mysqli_close($conn);
            require '../html/my_account.php';
        }
        else
        {
            $conn->close();
            echo '<script type="text/javascript">';
            echo  "alert('This email already exists,please try again!')";
            echo '</script>';
            require '../html/register.php';
        }
    }

