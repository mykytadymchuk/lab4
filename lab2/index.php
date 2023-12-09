<?php
session_start();
$sessionUsername = isset($_SESSION['username']) ? $_SESSION['username'] : 'незнайомець';
$cookieUsername = isset($_COOKIE['username']) ? $_COOKIE['username'] : 'незнайомець';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab1 (var.6)</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        h3 {
            font-size: 18px;
            text-align: center;
            color: #006600;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        p {
            font-size: 15px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
    </style>
</head>
<body>

    <div id="cheetah">

        <div id="intro">
            <h2 style="font-size: 25px; text-align: center; color: #660000; font-family: Arial, Helvetica, sans-serif;">Гепарди</h2>
            <p>Гепард - ссавець родини котових; найшвидший представник класу, здатний розвивати швидкість до 92 км/год.
            Приручених гепардів у минулому часто використовували для полювання на антилоп.</p>
        </div>


        <div id="appearance">
            <img src="1.jpg" alt="Гепард" style="float: right; padding: 20px; width: 500px; height: auto;">
            <h3>Зовнішній вигляд</h3>
            <p>Помітно відрізняється від інших представників родини котових. Тіло струнке і здається навіть крихким, але насправді
                гепарди мають розвинені м'язи і практично не мають жирових відкладень. У гепарда невелика голова, високо розташовані
                очі і маленькі заокруглені вуха. Забарвлення піщано-жовте, з розкиданими по всьому тілу дрібними чорними плямами, а з
                боків тонкі чорні смуги.</p>
        </div>
    
        <div id="breeding">
            <h3>Розмноження</h3>
            <p>Вагітність у гепардів триває 85-95 днів, після чого на світ з'являється від двох до п'яти гепардиків. Вони залишаються
            з матір'ю від 13 до 20 місяців. Живуть гепарди до 20 років. Іноді до 25 років, але дуже рідко.</p>
        </div>
    
        <div id="nutrition">
            <h3>Живлення</h3>
            <p>Гепарди - денні хижаки. Вони полюють переважно на дрібних копитних - газелей, імпал, телят гну, - а також зайців.
            На відміну від інших котових, гепарди полюють, переслідуючи здобич, а не із засідки. Спочатку вони наближаються до
            вибраної жертви на відстань близько 10 метрів, а потім намагаються зловити її в короткому забігу. Здобич збиває з ніг ударом лапи, а потім душить.</p>
        </div>
    
        <div id="spreading">
            <h3>Розповсюдження</h3>
            <p>Гепарди мешкають у Африці, а також у Індії, Передній та Середній Азії. У наш час азійський гепард практично зник;
            відомо, що він живе тільки в Ірані, де знаходиться під загрозою зникнення. Через свій спосіб полювання, вони надають перевагу
            відкритим просторам: савани, напівпустелі, тощо.</p>
        </div>
    
        <div id="population">
            <h3>Чисельність</h3>
            <p>У грудні 2016 року було повідомлено про катастрофічне скорочення популяції гепарда, яка нараховую у дикій природі лише близько 7100 особин.</p>
        </div>

    </div>

    <div id="individual">

        <div style="text-align: center; padding: 30px;">
            <img src="2.jpg" alt="meme" class="taskimg">
        </div>
    
        <table>
            <thead>
                <tr>
                    <th colspan="2">2017</th>
                    <th>2018</th>
                    <th>2019</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ИТех</td>
                    <td>93</td>
                    <td>97</td>
                    <td>98</td>
                </tr>
                <tr>
                    <td>КСх</td>
                    <td>91</td>
                    <td>98</td>
                    <td>97</td>
                </tr>
                <tr>
                    <td>СПО</td>
                    <td>96</td>
                    <td>94</td>
                    <td>97</td>
                </tr>
            </tbody>
        </table>
        <br><br>
    </div>

    <h1 class="info" style="font-size: 30px; text-align: center; color: #000066; font-family: Arial, Helvetica, sans-serif;"> Лабораторна робота №2 </h1>

    <div style="position: fixed; left: 0; bottom: 0; background-color: #F5B7B1; padding: 10px;
    border-color: black; border-style:dotted; border-width: 2px; margin: 0px; font-size: 20px;
    font-family:'Courier New', Courier, monospace">
        <a href="../menu.php">Меню</a>
    </div>

    <div style="position: fixed; right: 0; top: 0; background-color: #808B96; padding: 5px;
    border-color: black; border-style:dotted; border-width: 4px; margin: 0px; font-size: 15px; font-weight: bold;
    font-family:'Courier New', Courier, monospace">
    <p>Привіт, <?php echo $sessionUsername; ?> (сесія)</p>
    <p>Привіт, <?php echo $cookieUsername; ?> (кукі)</p>
    </div>

</body>
</html>