<?php
session_start();
if($_SESSION["email"]!="")
    header("Location:../html/my_account.php");
else
    header("Location:../html/login.php");