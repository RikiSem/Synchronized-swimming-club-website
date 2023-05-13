<?php
header("location: ../../addPhotoPage.php");
include("connect.php");
$fotos = "";

for($i=0;$i != count($_FILES['foto']['name']); $i++){
    $nameFoto = $_FILES['foto']['name'][$i];
    $ToDir = "../../imgsFromDatabase/galery/".$nameFoto;
    move_uploaded_file($_FILES["foto"]["tmp_name"][$i],$ToDir);
    $zapros = "INSERT INTO `galery`(`fotoLink`) VALUES ('$nameFoto')";
    $result = mysqli_query($link,$zapros) or die(mysqli_error($link));
}
?>