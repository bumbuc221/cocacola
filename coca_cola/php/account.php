<?php
if($_SESSION["email"]!="")
{

    $conn = new mysqli('localhost', 'root', '', 'coca_cola');
    if (mysqli_connect_errno()) {
        exit('Connect failed: '. mysqli_connect_error());
    }

    $sql = "SELECT * FROM `utilizatori`";
    $a=0;$b=0;$c=0;$d=0;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
            if(strcmp($row['email'],$_SESSION['email'])==0)
            {$_SESSION['email']=$row['email'];
                $a=$row['c1'];$b=$row['c2'];$c=$row['c3'];$d=$row['c4'];break;}
    }
    else {
        echo '<script type="text/javascript">';
        echo  "alert('Error please try again!')";
        echo '</script>';
        require '../html/login.php';
    }
    if($a)
        echo"
         <div class='column'>
        <h3 align='center'>Coca-cola</h3>
        <p>Coca-Cola, or Coke, is a carbonated soft drink manufactured by The Coca-Cola Company. </p>
        <a href='c1.php'><img src='../imagini/col1.png' class='interior2' width='100%'></a>
    </div>";
    else echo "";
    if($b)
        echo "
        <div class='column'>
        <h3 align='center'>Coca-cola-Zero</h3>
        <p> Same taste Coca ‑ Cola, zero sugar.Carbonated soft drink with sweeteners. </p>
        <a href='c2.php'><img src='../imagini/col2.jpg' class='interior2' width='100%'></a>
    </div>";
    if($c)
        echo "
         <div class='column'>
        <h3 align='center'>Coca-cola-with-coffe</h3>
        <p>Coca-Cola with Coffee. CARBONATED WATER, HIGH FRUCTOSE CORN SYRUP, CARAMEL COLOR, COFFEE POWDER,...</p>
        <a href='c3.php'><img src='../imagini/col3.png' class='interior2' width='100%' ></a>
    </div> ";
    if($d)
        echo "
        <div class='column'>
        <h3 align='center'>Coca-cola-energy</h3>
        <p>Introducing Coca-Cola Energy. The energy you want. The taste you love.</p>
        <a href='c4.php'><img src='../imagini/col4.jpg' class='interior2' width='100%'></a>
    </div>";
    $conn->close();
}
