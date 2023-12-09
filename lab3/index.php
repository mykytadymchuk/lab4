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
    <link rel="stylesheet" href="styles.css">
    <title>lab3</title>
</head>
<body>
    <h1>Лабораторна робота 3</h1>

    <div id="container">
        <div id="emp1" class="emp">
            <h2>Співробітник №1</h2>
            <label for="EmployeeName1">Прізвище:</label>
            <input type="text" name="Name1" id="EmployeeName1">
            <br><br>
            <label for="EmployeeDate1">Дата прийняття:</label>
            <input type="date" name="Date1" id="EmployeeDate1">
        </div>
    
        <div id="emp2" class="emp">
            <h2>Співробітник №2</h2>
            <label for="EmployeeName2">Прізвище:</label>
            <input type="text" name="Name2" id="EmployeeName2">
            <br><br>
            <label for="EmployeeDate2">Дата прийняття:</label>
            <input type="date" name="Date2" id="EmployeeDate2">
        </div>
    
        <div id="emp3" class="emp">
            <h2>Співробітник №3</h2>
            <label for="EmployeeName3">Прізвище:</label>
            <input type="text" name="Name3" id="EmployeeName3">
            <br><br>
            <label for="EmployeeDate3">Дата прийняття:</label>
            <input type="date" name="Date3" id="EmployeeDate3">
        </div>
    
        <div id="emp4" class="emp">
            <h2>Співробітник №4</h2>
            <label for="EmployeeName4">Прізвище:</label>
            <input type="text" name="Name4" id="EmployeeName4">
            <br><br>
            <label for="EmployeeDate4">Дата прийняття:</label>
            <input type="date" name="Date4" id="EmployeeDate4">
        </div>
    
        <div id="emp5" class="emp">
            <h2>Співробітник №5</h2>
            <label for="EmployeeName5">Прізвище:</label>
            <input type="text" name="Name5" id="EmployeeName5">
            <br><br>
            <label for="EmployeeDate5">Дата прийняття:</label>
            <input type="date" name="Date5" id="EmployeeDate5">
        </div>
    </div>
        
    <div id="button">
        <button onclick="averageExperienceCalculation()">Підрахувати середній стаж</button>
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

    <script src="script.js"></script>
    
</body>
</html>