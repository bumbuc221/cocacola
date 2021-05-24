<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Coca Cola homepage</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/pagina_home.css">
  <script src="../js/pagina_home2.js"></script>
  <script src="../js/contact.js"></script>
</head>
<body>
<div class="centru">
  <div>
    <img class="interior" src="../imagini/images.jpg" width="100%;" height="auto">
  </div>
  <h1 class="titlu" id="#about_us">Company</h1>
  <div class="flex">
    <p class="interior2" >The Coca-Cola Company, American corporation founded in 1892 and today engaged primarily in the manufacture and sale of syrup and concentrate for Coca-Cola, a sweetened carbonated beverage that is a cultural institution in the United States and a global symbol of American tastes. </p>
    <img class="interior2" src="../imagini/images2.jpg">
  </div>
  <h1 class="titlu">Products</h1>
  <div id="produs"><a href="c1.php" id="u" ><img class="interior" name="imgs" src="../imagini/1.jpg" width="100%" height="auto"></a>
    <div id="dr-st"><button class="iconite" onclick="stop()"><</button><button class="iconite" onclick="start()">></button></div></div>
</div>
<div class="row">
  <div class="column">
    <h3 align="center">Coca-cola</h3>
    <p>Coca-Cola, or Coke, is a carbonated soft drink manufactured by The Coca-Cola Company. </p>
    <a href="c1.php"><img src="../imagini/col1.png" class="interior2" width="100%"></a>
  </div>
  <div class="column">
    <h3 align="center">Coca-cola-Zero</h3>
    <p> Same taste Coca ‑ Cola, zero sugar.Carbonated soft drink with sweeteners. </p>
    <a href="c2.php"><img src="../imagini/col2.jpg" class="interior2" width="100%"></a>
  </div>
  <div class="column">
    <h3 align="center">Coca-cola-with-coffe</h3>
    <p>Coca-Cola with Coffee. CARBONATED WATER, HIGH FRUCTOSE CORN SYRUP, CARAMEL COLOR, COFFEE POWDER,...</p>
    <a href="c3.php"><img src="../imagini/col3.png" class="interior2" width="100%" ></a>
  </div>
  <div class="column">
    <h3 align="center">Coca-cola-energy</h3>
    <p>Introducing Coca-Cola Energy. The energy you want. The taste you love.</p>
    <a href="c4.php"><img src="../imagini/col4.jpg" class="interior2" width="100%"></a>
  </div>
</div>
<h1 class="titlu">System Coca-Cola</h1>
<div class="interior2">
  <p class="interior3">We are a global business that operates on a local scale, in every community where we do business.The Coca ‑ Cola company operates within a system, together with the bottling partner.</p>
  <img  class="i" src="../imagini/system1.jpg" width="80%" height="auto">
  <p class="interior3">The Coca-Cola Company markets, manufactures and sells:</p>
  <ul class="interior3">
    <li>--beverage concentrates and syrups;</li>
    <li>--finished beverages (including sparkling soft drinks; water and sports drinks; juice, dairy and plantbased drinks; and tea and coffee).</li>
  </ul>
  <img  src="../imagini/system2.jpg" width="80%" height="auto">
</div>
<h1 class="titlu" >History</h1>
<div class="flex">
  <img class="interior2"  src="../imagini/history1.jpg">
  <p class="interior2">
    The Spencerian style used for the famous Coca-Cola logo is registered with the United States Office of Invention. The first building is built with the sole purpose of becoming the headquarters of Coca-Cola. This turns out to be too small quite quickly, and the company moves 5 times in the next 12 years, to more spacious offices.
  </p>
</div>
<div class="flex">
  <p class="interior2">
    In response to the announcement launched by the Coca-Cola company, Alexander Samuelson creates the Contur glass, whose patent is owned by the Root Glass Company. Subsequently, it is approved by the Association of Bottlers and becomes the standard Coca-Cola bottle. The first bottling plants open in Europe, in Paris and Bordeaux.
  </p>
  <img class="interior2"  src="../imagini/history2.jpg">
</div>
<div class="flex">
  <img class="interior2"  src="../imagini/history3.jpg">
  <p class="interior2">
    The introduction of the first six-bottle packaging is a significant innovation for the soft drink industry. The packaging is patented the following year. Two significant innovations appear: the bell-shaped dispenser glass, specific to Coca-Cola, and the first standard, open box without lid.
  </p>
</div>
<div class="flex">
  <p class="interior2">
    Sprite, a refreshing drink with lemon and lime flavor, is launched on February 1st. TaB, the company's first diet drink, is launched. Its name is selected from over 300,000 options, based on a computer-generated search. The Coca-Cola system receives a new visual identity, based on the logo and the combination of red and white.
  </p>
  <img class="interior2"  src="../imagini/history4.jpg">
</div>
<div class="flex">
  <img class="interior2"  src="../imagini/history5.jpg">
  <p class="interior2">
    Immediately after the fall of the Berlin Wall, Coca-Cola is sold for the first time in East Germany. The central edition of the Olympic Games takes place in Atlanta. On this occasion, the Coca-Cola company creates "Coca-Cola Olympic City", offering fans countless forms of entertainment. Coca-Cola buys Peruvian Inca Kola and Schweppes soft drinks from several markets around the world.
  </p>
</div>
<div class="flex">
  <p class="interior2">
    (2010)The Coca-Cola company celebrates 125 years of the Coca-Cola brand.A Coca-Cola Facebook page is created by 2 fans. In January 2011, the page had 22 million fans worldwide, their number constantly increasing.
  </p>
  <img class="interior2"  src="../imagini/history6.jpg">
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