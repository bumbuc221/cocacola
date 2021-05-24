<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coca cola</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/c2.css">
    <script src="../js/c1.js"></script>
    <script src="../js/contact.js"></script>
</head>
<body>
<ul class="bara">
    <li><a id="coca" href="../html/pagina_home.php">Coca Cola</a></li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Brands</a>
        <div class="dropdown-content">
            <a href="../html/c1.php">Coca-Cola</a>
            <a href="../html/c2.php">Coca-Cola Zero</a>
            <a href="../html/c3.php">Coca-Cola with Coffe</a>
            <a href="../html/c4.php">Coca-Cola Energy</a>
        </div>
    <li><a href="../html/despre_noi.php">About us</a></li>
    <li><a href="#retele">Contact</a></li>
    <li class="account" ><a href="../php/account_or_login.php">Account</a>
</ul>
<div class="imagine">
    <img src="../imagini/c1_3.jpg" name="imagini" width="100%" style="margin-top:0px;">
    <form action="../php/c1_save.php" method="post">
    <input type="submit" id="favorite" aling="center" value="&#10084">
    </form>
</div>
<div>
<div class="info">
    <h1><span>Coca cola</span></h1>
    <p id="info2">Coca-Cola is the most popular and best-selling soft drink in history. Carbonated soft drink.</p>
</div>
</div>
<div class="ingredients">
    <p>Ingredients:</p>
    <p id="ingrediente">Water, sugar, carbon dioxide, dye E 150d, phosphoric acid acidifier, natural flavors, including caffeine.</p>
</div>
<div class="row">
    <div class="column">
        <h3 align="center">Coca-cola-Zero</h3>
        <p> Same taste Coca ‑ Cola, zero sugar.Carbonated soft drink with sweeteners. </p>
        <a href="../html/c2.php"><img src="../imagini/col2.jpg" class="interior2" width="100%"></a>
    </div>
    <div class="column">
        <h3 align="center">Coca-cola-with-coffe</h3>
        <p>Coca-Cola with Coffee. CARBONATED WATER, HIGH FRUCTOSE CORN SYRUP, CARAMEL COLOR, COFFEE POWDER,...</p>
        <a href="../html/c3.php"><img src="../imagini/col3.png" class="interior2" width="100%" ></a>
    </div>
    <div class="column">
        <h3 align="center">Coca-cola-energy</h3>
        <p>Introducing Coca-Cola Energy. The energy you want. The taste you love.</p>
        <a href="../html/c4.php"><img src="../imagini/col4.jpg" class="interior2" width="100%"></a>
    </div>
</div>
<div id="j">
    <div id="retele" align="center" style="margin-top: 5px;">
        <button class="iconite" onClick="facebook()" style="padding:5px;font-size:25px;">f</button>
        <button class="iconite" onClick="mail()">
            <i class="material-icons">&#xe0be;</i></button>
        <button class="iconite" onClick="linkedin()" style="padding:5px;font-size:25px;">in</button>
    </div>
    <p id="jos">
        © 2021 The Coca-Cola Company, all rights reserved. COCA-COLA®, "TASTE THE FEELING", and the Contour Bottle are trademarks of The Coca-Cola Company.
    </p>
</div>
</body>
</html>