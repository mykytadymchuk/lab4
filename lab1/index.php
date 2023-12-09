<?php
session_start();
$sessionUsername = isset($_SESSION['username']) ? $_SESSION['username'] : 'незнайомець';
$cookieUsername = isset($_COOKIE['username']) ? $_COOKIE['username'] : 'незнайомець';
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab1 (var.1)</title>
</head>
<body>
    <h1 align="center">Лабораторна робота №1</h1>
    <hr>

    <div id="task1">
        <h2>Завдання №1</h2>
        <span>Для будь-якого натурального числа <b>n&gt;2</b>
           <br>
           рівняння <i>a<sup>n</sup>+b<sup>n</sup>=c<sup>n</sup></i>
           <b>не має рішень</b> при
           <br>
           цілих ненульових числах a, b, c.
        </span>
    </div>
    
    <br> <br>

    <div id="task2">
        <h2>Завдання №2</h2>
        <ul>
            <li>ХНУРЕ
                <ol type="I">
                    <li>Факультет комп'ютерних наук
                        <ol>
                            <li>Кафедра інформаційних управляючих систем (ІУС)</li>
                            <li>Кафедра штучного інтелекту (ШІ)</li>
                            <li>Кафедра системотехніки (СТ)</li>
                            <li>Кафедра програмної інженерії (ПІ)</li>
                            <li>Кафедра медіасистем та технологій (МСТ)</li>
                        </ol>
                    </li>
                    <li>Факультет комп'ютерної інженерії та управління
                        <ol>
                            <li>Кафедра Комп’ютерних інтелектуальних технологій та систем (КІТС)</li>
                            <li>Кафедра електронних обчислювальних машин (ЕОМ)</li>
                            <li>Кафедра автоматизації проектування обчислювальної техніки (АПОТ)</li>
                            <li>Кафедра безпеки інформаційних технологій (БІТ)</li>
                            <li>Кафедра філософії</li>
                            <li>Кафедра українознавства (Укр)</li>
                        </ol>
                    </li>
                    <li>Факультет автоматики і комп'ютеризованих технологій
                        <ol>
                            <li>Кафедра комп’ютерно-інтегрованих технологій, автоматизації та робототехніки (КІТАР)</li>
                            <li>Кафедра проектування та експлуатації електронних апаратів (ПЕЕА)</li>
                            <li>Кафедра фізики</li>
                            <li>Кафедра охорони праці (ОП)</li>
                        </ol>
                    </li>
                    <li>Факультет інформаційно-аналітичних технологій та менеджменту
                        <ol>
                            <li>Кафедра інформатики (ІНФ)</li>
                            <li>Кафедра прикладної математики (ПМ)</li>
                            <li>Кафедра вищої математики (ВМ)</li>
                            <li>Кафедра економічної кібернетики та управління економічною безпекою (ЕК)</li>
                        </ol>
                    </li>
                    <li>Факультет інфокомунікацій
                        <ol>
                            <li>Кафедра інфокомунікаційної інженерії ім. В.В. Поповського (ІКІ)</li>
                            <li>Кафедра інформаційно-мережної інженерії (ІМІ)</li>
                            <li>Кафедра інформаційно-вимірювальних технологій (ІВТ)</li>
                            <li>Кафедра мовної підготовки (МП)</li>
                        </ol>
                    </li>
                    <li>Факультет електронної та біомедичної інженерії
                        <ol>
                            <li>Кафедра Біомедичної інженерії (БМІ)</li>
                            <li>Кафедра мікроелектроніки, електронних приладів та пристроїв (МЕЕПП)</li>
                            <li>Кафедра фізичних основ електронної техніки (ФОЕТ)</li>
                            <li>Кафедра фізичного виховання та спорту (ФВС)</li>
                        </ol>
                    </li>
                    <li>Факультет інформаційних радіотехнологій та технічного захисту інформації
                        <ol>
                            <li>Кафедра медіаінженерії та інформаційних радіоелектронних систем (МІРЕС)</li>
                            <li>Кафедра радіотехнологій інформаційно-комунікаційних систем (РТІКС)</li>
                            <li>Кафедра комп’ютерної радіоінженерії та систем технічного захисту інформації (КРіСТЗІ)</li>
                            <li>Кафедра мікропроцесорних технологій і систем (МТС)</li>
                            <li>Кафедра іноземних мов</li>
                        </ol>
                    </li>
                </ol>
            </li>   
        </ul>
    </div>
    
    <br>

    <div id="task3">
        <h2>Завдання №3</h2>
        <table border="2">
            <thead>
                <tr>
                    <th colspan="3">Курс валют</th>
                </tr>
                <tr>
                    <th>Валюта</th>
                    <th>Купівля</th>
                    <th>Продаж</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>USD</td>
                    <td>37,61</td>
                    <td>38,20</td>
                </tr>
                <tr>
                    <td>EUR</td>
                    <td>40,20</td>
                    <td>40,90</td>
                </tr>
                <tr>
                    <td>PLN</td>
                    <td>8,55</td>
                    <td>8,85</td>
                </tr>
                <tr>
                    <td>GBP</td>
                    <td>44,5</td>
                    <td>47,2</td>
                </tr>
            </tbody>
        </table>
    </div>

    <br> <br>

    <div id="task4">
        <h2>Завдання №4</h2>
        <b>Яку б ви обрали країну для проживання?</b>
        <br>
        <form action="#" method="post">
            <input type="radio" name="vote" value="Україна" id="Ukraine">
            <label for="Ukraine">Україна</label>
            <br>
            <input type="radio" name="vote" value="Польща" id="Poland">
            <label for="Poland">Польща</label>
            <br>
            <input type="radio" name="vote" value="Німеччина" id="Germany">
            <label for="Germany">Німеччина</label>
            <br>
            <input type="radio" name="vote" value="США" id="USA">
            <label for="USA">США</label>
            <br>
            <input type="radio" name="vote" value="Японія" id="Japan">
            <label for="Poland">Японія</label>
            <br>
            <input type="radio" name="vote" value="Свій варіант" id="CustomButton">
            <label for="CustomButton">Свій варіант</label>
            <input type="text" name="custom" id="CustomField">
            <br>
            <input type="reset" value="Очистити">
            <input type="submit" value="Підтвердити">
        </form>
    </div>
    
    <br><br>

    <div id="task5">
        <h2>Завдання №5</h2>
        <b>Зміст сторінки:</b>
        <ol>
            <li><a href="#task1">Завдання №1</a></li>
            <li><a href="#task2">Завдання №2</a></li>
            <li><a href="#task3">Завдання №3</a></li>
            <li><a href="#task4">Завдання №4</a></li>
            <li><a href="#task5">Завдання №5</a></li>
        </ol>
    </div>

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

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
</body>
</html>