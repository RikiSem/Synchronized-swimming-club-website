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
            <table>
                <tr>
                    <td>
                        <div class="titleDiv">
                            <a href="../index.html" style="text-decoration: none; color:black;">
                                <span id="firstTitleSpan">arMida</span><br>
                                <span>Клуб</span><br>
                                <span>синхронного</span><br>
                                <span>плавания</span>
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="OplataContacts">
                            <div class="contacts">
                                <div class="icons">
                                    <a href="https://t.me/+KCPUsZcXa4dkMzUy"><img src="../imgs/icons/telegram.png" alt=""></a>
                                    <a href="https://instagram.com/armida_synchro?igshid=OGQ2MjdiOTE="><img src="../imgs/icons/instagram.png" alt=""></a>
                                    <a href="https://vk.com/id773650590"><img src="../imgs/icons/vk.png" alt=""></a>
                                </div>
                                <span class="tel">+7 (917) 525-34-40</span>
                            </div>
                            <div class="oplata">
                                <a href="oplata.php"><button class="OplataBtn">Оплатить</button></a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="logoDiv">
                            <img class="logo" src="../imgs/headPic.png" alt="">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="NotIndexMenu">
            <a href="Groups.html"><button class="menuBtn">Группы</button></a>
            <div class="dropdown">
                <button class="dropbtn menuBtn">Бассейны</button>
                <div class="dropdown-content">
                  <a href="Basein_1.html">г. Орехово-Зуево ФОК «Северный»</a>
                  <a href="Basein_2.html"> г. Ликино-Дулёво бассейн «Дивный»</a>
                  <a href="Basein_3.html">г. Дрезна ФОК «Южный»</a>
                </div>
            </div>
            <a href="Contacts.html"><button class="menuBtn">Контакты</button></a>
            <a href="galery.php?1"><button class="menuBtn">Фотогалерея</button></a>
            <a href="news.php"><button class="menuBtn">Новости</button></a>
            <a href="treners.php"><button class="menuBtn">Наши тренеры</button></a>
            <a href="Otzivi.php"><button class="menuBtn">Отзывы</button></a>
        </div>
        <div class="NotIndexMid">
            <div class="otziviDiv">
                <div class="formOtzivDiv">
                    <div class="otzivFormDiv" >
                        <h1>Оставьте свой отзыв здесь!</h1>
                        <form action="../adminPages/adds/addOtziv.php" method="post">
                            <p><input type="text" name="name" placeholder="Ваше имя"></p>
                            <p><textarea name="otziv" placeholder="Ваш отзыв" cols="30" rows="10"></textarea></p>
                            <input type="submit" value="Отправить">
                        </form>
                    </div>
                    <div class="otzivi">
                        <?php
                            showOtziv()
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="prefotter"></div>
        <div class="fotter">
            <div class="info">
                <a href="../Docs/dogovor.pdf">Договор оферта</a>
                <a href="#">Политика обработки платежа</a>
            </div>
            <div class="oplataMethods">
                <p>Мы принимаем к оплате карты следующих платежных систем:</p>
                <img src="../imgs/mps_logo 1.svg" alt="">
            </div>
        </div>
    </div>
    <script src="wow.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
<?php
    function showOtziv(){
        include("../adminPages/adds/connect.php");
        $zapros = "SELECT * FROM `otzivi` WHERE 1";
        $result = mysqli_query($link,$zapros) or die(mysqli_error($link));
        $numRow = mysqli_num_rows($result);
        for($i = 0; $i != $numRow; $i++){
            $text = mysqli_fetch_assoc($result);
            echo("<div class='otzivDiv' style='color:white;'>
            <div class='nameSender'>
                {$text['name']}
            </div>
            <div class='bodyOtziv'>
                {$text['text']}
            </div>
        </div>");
        }
    }
?>