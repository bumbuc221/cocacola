<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['nume']);
session_destroy();
header("Location:../html/login.php");
