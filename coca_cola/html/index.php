<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coca Cola interface</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Coca Cola</title>
    <link rel="stylesheet" href="../css/pagina_principala.css">
    <script src="../js/pagina_principala.js"></script>
    <script src="../js/contact.js"></script>
</head>
<body>
<div id="pagina" >
    <div id="video">
        <video autoplay muted id="myVideo"  width="100%;">
            <source src="../imagini/coca.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
    </div>
    <div class="content">
        <button id="myBtn" onclick="unu()">Home</button>
        <button id="2" onclick="doi()">Sign in</button>
    </div>
</div>
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
    <li id="cont"><a href="../php/account_or_login.php">Account</a></li>
</ul>
<div id="retele" align="center" style="margin-top: 5px;">
    <button class="iconite" onClick="facebook()" style="padding:5px;font-size:25px;">f</button>
    <button class="iconite" onClick="mail()">
        <i class="material-icons">&#xe0be;</i></button>
    <button class="iconite" onClick="linkedin()" style="padding:5px;font-size:25px;">in</button>
</div>
<p id="jos">
    © 2021 The Coca-Cola Company, all rights reserved. COCA-COLA®, "TASTE THE FEELING", and the Contour Bottle are trademarks of The Coca-Cola Company.
</p>
</body>
</html>