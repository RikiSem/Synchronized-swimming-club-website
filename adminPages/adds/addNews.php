<?php
header("location: ../../admin.php");
include("connect.php");
$title = $_POST['title'];
$text = $_POST['text'];
$date = date("j.n.Y");

$fotos = "";

for($i=0;$i != count($_FILES['foto']['name']); $i++){
    $ToDir = "../../imgsFromDatabase/news/".$_FILES['foto']['name'][$i];
    $fotos .= $_FILES['foto']['name'][$i] .",";
    move_uploaded_file($_FILES["foto"]["tmp_name"][$i],$ToDir);
}
$fotos = substr($fotos, 0, strlen($fotos)-1);

$zapros = "INSERT INTO `news`(`title`, `text`, `fotos`, `date`) VALUES ('$title','$text','$fotos','$date')";
$result = mysqli_query($link,$zapros) or die(mysqli_error($link));

?>