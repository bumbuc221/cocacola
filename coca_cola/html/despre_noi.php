<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/creare_cont.css">
    <link rel="stylesheet" href="../css/about_us.css">
    <script src="../js/contact.js"></script>
</head>
<body>
<div>
    <img src="../imagini/about_us.jpg" width="100%" height="auto">
    <table align="center">
        <tr><th><h1>About us</h1></th></tr>
        <tr><td align="left"><h2>Company</h2></td></tr>
        <tr><td>The Coca-Cola Company, American corporation founded in 1892 and today engaged primarily in the manufacture and sale of syrup and concentrate for Coca-Cola, a sweetened carbonated beverage that is a cultural institution in the United States and a global symbol of American tastes.</td></tr>
        <tr><td align="left"><h2>System Coca-cola</h2></td></tr>
        <tr><td>We are a global business that operates on a local scale, in every community where we do business.The Coca ‑ Cola company operates within a system, together with the bottling partner...
        <a class="see" href="pagina_home.php">See more</a>
        </td></tr>
        <tr><td align="left"><h2>History</h2></td></tr>
        <tr><td>The Spencerian style used for the famous Coca-Cola logo is registered with the United States Office of Invention. The first building is built with the sole purpose of becoming the headquarters of Coca-Cola. This turns out to be too small quite quickly, and the company moves 5 times in the next 12 years, to more spacious offices...
        <a class="see" href="pagina_home.php">See more</a></td></tr>
    </table>
</div>
<div class="jos">
    <div id="retele" align="center">
        <button class="iconite" onClick="facebook()" style="padding:5px;font-size:25px;">f</button>
        <button class="iconite" onClick="mail()">
            <i class="material-icons">&#xe0be;</i></button>
        <button class="iconite" onClick="linkedin()" style="padding:5px;font-size:25px;">in</button>
    </div>
    <p id="jos">
        © 2021 The Coca-Cola Company, all rights reserved. COCA-COLA®, "TASTE THE FEELING", and the Contour Bottle are trademarks of The Coca-Cola Company.
    </p>
</div>
<ul id="bara">
    <li id="coca"><a href="../html/pagina_home.php">Coca Cola</a></li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Brands</a>
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
</body>
</html>