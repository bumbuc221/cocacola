<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/creare_cont.css">
    <script src="../js/create_account.js"></script>
    <script src="../js/contact.js"></script>
</head>
<body>
<form method="post" action="../php/creare_cont.php" name="form_login" onsubmit="return validare()">
    <table class="tabel" align="center">
        <tr><th><h1 class="titlu" align="center">Register</h1></th></tr>
        <tr><td>Username</td></tr>
        <tr><td><input type="text" name="c_nume" size="50" placeholder="Name"></td></tr>
        <tr><td>Email</td></tr>
        <tr><td><input type="text" name="c_email" size="30" placeholder="email@example.com"></td></tr>
        <tr><td>Password</td></tr>
        <tr><td><input type="password" name="c_parola1" size="30"></td></tr>
        <tr><td>Password Confirm</td></tr>
        <tr><td><input type="password" name="c_parola2" size="30"></td></tr>
        <tr><td><input type="submit"  value="Create"></td></tr>
    </table>
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
    <li id="cont"><a href="../html/login.php">Account</a></li>
</ul>
</body>
</html>