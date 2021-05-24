<?php
session_start();
function verf_email($email)
{
    $s='/^[a-zA-Z0-9_-]{3,30}@[a-zA-Z0-9-]{3,30}.[a-zA-Z]{1,4}$/';
    if(preg_match($s,$email))
        return true;
    return false;
}
function verif_val($a,$b)
{
    if($a=="" || $b=="")
        return false;
    return true;
}
function verif_pasw_1($a)
{
    if(strlen($a)<6)
        return false;
    return true;
}

$email=$_POST["email"];
$passw1=$_POST["parola"];

if(!verif_val($email,$passw1))
{
    echo '<script type="text/javascript">';
    echo  "alert('Enter the correct data!')";
    echo '</script>';
    require '../html/login.php';
}
else
    if(!verf_email($email))
    {
        echo '<script type="text/javascript">';
        echo  "alert('Enter the correct email!')";
        echo '</script>';
        require '../html/login.php';
    }
    else
        if(!verif_pasw_1($passw1))
        {
            echo '<script type="text/javascript">';
            echo  "alert('Password too short!')";
            echo '</script>';
            require '../html/login.php';
        }
        else
        {

            $conn = new mysqli('localhost', 'root', '', 'coca_cola');
            if (mysqli_connect_errno()) {
                exit('Connect failed: '. mysqli_connect_error());
                header("Location:../html/login.php");
            }

            $sql = "SELECT * FROM `utilizatori`";
            if(!$sql)
                header("Location:../html/login.php");
            $afirma=0;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc())
                    if(strcmp($row['email'],$_POST['email'])==0 && strcmp($row['parola'],$_POST['parola'])==0)
                    { $afirma=1;
                        $_SESSION["email"]=$row['email'];
                        $_SESSION["nume"]=$row['nume'];
                        break;}
            }
            else {
                echo '<script type="text/javascript">';
                echo  "alert('Error please try again!')";
                echo '</script>';
                require '../html/login.php';
            }
            if($afirma)
            {
                $conn->close();
                header("Location:../html/my_account.php");
            }
            else
            {
                $conn->close();
                echo '<script type="text/javascript">';
                echo  "alert('Password or email invalid!')";
                echo '</script>';
                require '../html/login.php';
            }
          //  $conn->close();
        }

