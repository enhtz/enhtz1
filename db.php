<?php
$conn = mysqli_connect("localhost:3307", "root", "", "portfolio_db");
if (!$conn) { die("Холболт амжилтгүй: " . mysqli_connect_error()); }
session_start();
?>