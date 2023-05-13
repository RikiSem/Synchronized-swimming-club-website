<?php
header("location: ../../index.html");
include("connect.php");

$nameReb = $_POST['nameReb'];
$BirthDay = $_POST['BirthDay'];
$nameRod = $_POST['nameRod'];
$tel = "+7" . $_POST['tel'];
$email = $_POST['email'];
$bassein = $_POST['bassein'];
$info = $_POST['info'];
$type = $_POST['type'];

$zapros = "INSERT INTO `zayavki`(`nameReb`, `BirthDay`, `nameRod`, `tel`, `email`, `bassein`, `info`,`type`) VALUES ('$nameReb','$BirthDay','$nameRod','$tel','$email','$bassein','$info','$type')";
$result = mysqli_query($link,$zapros) or die(mysqli_error($link));

?>