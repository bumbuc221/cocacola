<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Coca Cola</title>
    <link rel="stylesheet" href="../css/my_account.css">
    <script src="../js/contact.js"></script>
</head>
<body>
<h1>Favorite Brands</h1><hr>

<form action="../php/delete_favorite.php" method="POST">
    <input type="submit" value="Trash" id="favorite">
</form>
<ul id="bara">
    <li id="coca"><a href="../html/pagina_home.php">Coca Cola</a></li>
    <li class="dropdown">
        <a href="javascript:void(0)" id="dropbtn">Brands</a>
        <div class="dropdown-content">
            <a href="../html/c1.php">Coca-Cola</a>
            <a href="../html/c2.php">Coca-Cola Zero</a>
            <a href="../html/c3.php">Coca-Cola with Coffe</a>
            <a href="../html/c4.php">Coca-Cola Energy</a>
        </div>
    </li>
    <li><a href="../html/despre_noi.php">About us</a></li>
    <li><a href="#retele">Contact</a></li>
    <li style="float:right;"><a href="../php/log_out.php">Log out</a></li>
    <li id="cont"><a href="javascript:void(0)" id="dropbtn">
            <?php
            if($_SESSION["email"]!="" || isset($_SESSION["email"]))
                echo $_SESSION["nume"];
            else
                echo "Account";
            ?>
        </a></li>
</ul>
<form>
<div class="row">
    <?php require '../php/account.php' ?>
</div>
</form>
<div class="jos">
    <div id="retele" align="center">
        <button class="iconite" onClick="facebook()" style="padding:5px;font-size:25px;">f</button>
        <button class="iconite" onClick="mail()" >
            <i class="material-icons">&#xe0be;</i></button>
        <button class="iconite" onClick="linkedin()" style="padding:5px;font-size:25px;">in</button>
    </div>
    <p id="jos">
        © 2021 The Coca-Cola Company, all rights reserved. COCA-COLA®, "TASTE THE FEELING", and the Contour Bottle are trademarks of The Coca-Cola Company.
    </p>
</div>
</body>
</html>