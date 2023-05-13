<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>ArMida</title>
</head>
<body>
    <div class="main">
        <div class="header">
            <div class="headerContent">
                <div class="titleDiv">
                    <div class="titleDiv2">
                        <a href="../index.html" style="text-decoration: none; color:black;"><span id="firstTitleSpan">arMida</span><br>
                        <span>Клуб</span><br>
                        <span>синхронного</span><br>
                        <span>плавания</span></a>
                    </div>
                </div>
                <div class="logoDiv">
                    <img class="logo" src="../imgs/headPic.png" alt="">
                </div>
            </div>
        </div>
        <div class="AdminMenu">
            <a href="../admin.php"><button class="menuBtn">Добавить новость</button></a>
            <a href="addPhotoPage.php"><button class="menuBtn">Добавить фото в галерею</button></a>
            <a href="zayavkiPage.php"><button class="menuBtn">Заявки</button></a>
        </div>
        <div class="mid">
            <h1 class="addHeader">Тренера</h1>
            <div class="addNewTrenerForm addForm">
                <form action="adds/addTrener.php" enctype="multipart/form-data" method="post">
                    <p><input placeholder="ФИО тренера" type="text" name="name"></p>
                    <p>Фото тренера: <input  type="file" name="foto"></p>
                    <p><input placeholder="Описание" type="text" name="opisanie"></p>
                    <input class="SubBtn" type="submit" value="Добавить">
                </form>
            </div>
            <div class="ShowDiv">
                <table class="ShowTable" border = 1>
                    <tr><th class="TD">ФИО</th><th class="TD">Дата добавления</th><th>Фото</th><th>Описание</th><th class="TD">Управление</th></tr>
                    <?php
                        ShowTable()
                    ?>
                </table>
            </div>
        </div>
        <div class="fotter" style="height: 100px;">
            
        </div>
    </div>
</body>
</html>
<?php
function ShowTable(){
    include("adds/connect.php");
    $zapros = "SELECT * FROM `treners` WHERE 1";
    $result = mysqli_query($link,$zapros);
    $numRow = mysqli_num_rows($result);
    for($i = 0; $i != $numRow; $i++){
        $text = mysqli_fetch_assoc($result);
        echo("<form method='post' action = 'delets/delete.php'><tr><td>{$text['name']}</td><td>{$text['date']}</td><td class='textTd'><img style='width:200px;' src='../imgsFromDatabase/treners/{$text['fotoLink']}' alt=''></td><td>{$text['opisanie']}</td><td><input type='hidden' name = 'file' value='{$text['fotoLink']}'><input type='hidden' name = 'id' value='{$text['id']}'><input type='hidden' name='type' value='trener'><input type='submit' value='Удалить'></td></tr></form>");
    }
}
?>