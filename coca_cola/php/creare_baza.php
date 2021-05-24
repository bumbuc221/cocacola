<?php
$conn = mysqli_connect("localhost", "root", "")
or die("Eroare la conectare cu MySQL");

$createdb = mysqli_query($conn, "CREATE DATABASE coca_cola");
mysqli_close($conn);