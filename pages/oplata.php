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
            <div class="OplataDiv">
                <div class="oplata">
                <h1 style='margin-top:3%; text-align:center;font-family: Arial;color:#2877A9;'>Заполните информацию</h1>
                    <form name="TinkoffPayForm">
                      <input class="tinkoffPayRow" type="hidden" name="terminalkey" value="1672139201955">
                      <input class="tinkoffPayRow" type="hidden" name="frame" value="false">
                      <input class="tinkoffPayRow" type="hidden" name="language" value="ru"> 
                      <input class="tinkoffPayRow" type="hidden" name="description" value="Абонемент">
                      <input class="tinkoffPayRow" type="hidden" name="receipt" value="">
                        <?php
                        $numOrder = rand(100,100000000);
                            echo("<input class='tinkoffPayRow' type='hidden' name='order' value = '{$numOrder}'>");
                        ?>
                        <input class="tinkoffPayRow" type="text" placeholder="Сумма" name="amount" required>
                        <input class="tinkoffPayRow" type="text" placeholder="ФИО плательщика" name="name">
                        <input class="tinkoffPayRow" type="text" placeholder="E-mail" name="email">
                        <input class="tinkoffPayRow" type="text" placeholder="Контактный телефон" name="phone">
                        <input class="tinkoffPayRow OplataBtn2" type="button" onclick="tinkoffPayFunction(this)"  value="Оплатить">
                    </form>
                    <script type="text/javascript">
    function tinkoffPayFunction(target) {
            let form = target.parentElement;
            let name = form.description.value || "Оплата";
            let amount = form.amount.value;
            let email = form.email.value;
            let phone = form.phone.value;

            if (amount && email && phone) {
                form.receipt.value = JSON.stringify({
                    "Email": email,
                    "Phone": phone,
                    "EmailCompany": "mail@mail.com",
                    "Taxation": "patent",
                    "Items": [
                        {
                            "Name": name,
                            "Price": amount + '00',
                            "Quantity": 1.00,
                            "Amount": amount + '00',
                            "PaymentMethod": "full_prepayment",
                            "PaymentObject": "service",
                            "Tax": "none"
                        }
                    ]
                });
                pay(form);
            } else alert("Не все обязательные поля заполнены")
            return false;
        }
</script>
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
    <script src="https://securepay.tinkoff.ru/html/payForm/js/tinkoff_v2.js"></script>
</body>
</html>