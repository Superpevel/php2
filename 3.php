<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test document</title>
    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
        }
        .color {
            height: 10px;
            width: 10px;
            float: left;
        }
    </style>
</head>

<body>
<h1>Форма для Фио</h1>
<form action="3.php" method="POST">
    Введите строки <br><input type =text name = "rows" placeholder="строки">
    <p>Введите колонны <br><input type =text name = "columns" placeholder= "колонны">

        <input type="submit" value="Отправить">
        <input type="reset" value="Отменить">
</form>
<table border="1">
<?php
$rows = $_POST["rows"];
$columns = $_POST["columns"];

for ($i = 1; $i <= $rows; $i++)
{
    echo '<tr>';
    $j = 1;
    for ($j = 1; $j <= $rows; $j++)
    {
        echo '<td><div class="color"></div></td>';

    }
    echo '</tr>';
}


?>
</table>
</body>
</html>