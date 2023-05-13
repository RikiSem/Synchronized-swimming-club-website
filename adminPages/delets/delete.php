<?php
$type = $_POST['type'];
if($type == "news"){
    header("location: ../../admin.php");
    include("../adds/connect.php");
    $id = $_POST['id'];
    $zapros = "DELETE FROM `news` WHERE `id`='$id'";
    $result = mysqli_query($link,$zapros) or die(mysqli_error($link));
}else if($type == "trener"){
    header("location: ../addTrenerPage.php");
    include("../adds/connect.php");
    $id = $_POST['id'];
    $file = $_POST['file'];
    $file = "../../imgsFromDatabase/treners/".$file;
    $zapros = "DELETE FROM `treners` WHERE `id`='$id'";
    $result = mysqli_query($link,$zapros) or die(mysqli_error($link));
    unlink($file);
}

?>