<?php
header("location: ../addTrenerPage.php");
include("connect.php");
$name = $_POST['name'];
$fotoLink = $_FILES['foto'];
$fotoName = $fotoLink['name'];
$opisanie = $_POST['opisanie'];
if ($fotoLink && $fotoLink["error"]== UPLOAD_ERR_OK)
{
    $ToDir = "../../imgsFromDatabase/treners/".$fotoName;
    move_uploaded_file($fotoLink["tmp_name"], $ToDir);
    echo "Файл загружен";
}
$date = date("j.n.Y");

$zapros = "INSERT INTO `treners`(`name`, `fotoLink`, `date`, `opisanie`) VALUES ('$name','$fotoName','$date','$opisanie')";
$result = mysqli_query($link,$zapros) or die(mysqli_error($link));
?>