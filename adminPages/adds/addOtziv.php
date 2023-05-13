<?php
include("connect.php");

$name = $_POST['name'];
$otziv = $_POST['otziv'];
if($name != NULL && $otziv != NULL){
    header("location: ../../pages/Otzivi.php");
    $zapros = "INSERT INTO `otzivi`(`name`, `text`) VALUES ('$name','$otziv')";
    $result = mysqli_query($link,$zapros) or die(mysqli_error($link));
}else{
    header("location: ../../pages/Otzivi.php");
}
?>
