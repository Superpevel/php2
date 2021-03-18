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
<form action="2.php" method="POST">
    Имя <br><input type =text name = "first_name" placeholder="Ваше имя">
    <p>Фамилия <br><input type =text name = "last_name" placeholder= "Ваше Фамилия">
    <p>Email <br><input type =text name = "email" placeholder= "Email">
    <p>Что вы хотите рассказать о себе<br>
        <textarea name = "comment" cols = 32 rows =5></textarea>

        <input type="submit" value="Отправить">
        <input type="reset" value="Отменить">
</form>
<?php
$times = array("PHP" => "14.30","Lisp"=>"12.00","Perl"=>"15.00","Unix"=>"14.00");
$lectors = array("PHP"=>"Василий Васильевич","Lisp"=>"Иван Иванович","Perl"=>"Петр петрович","Unix"=>"Семен семенович");
define("SIGN","C уважаение  администрация");
define("MEETING_TIME","18.00");
$date = "12 мая";
$first_name = $_POST["first_name"];

if (!preg_match('/[^а-яА-Я\s]+/msi',$first_name))
{
    echo '1';
    if(!($first_name === strtoupper($first_name)))
    {
        echo "DA";
    }
}


?>
</body>
</html>