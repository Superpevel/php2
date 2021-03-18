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
<form action="1.php" method="POST">
    Имя <br><input type =text name = "first_name" placeholder="Ваше имя">
    <p>Фамилия <br><input type =text name = "last_name" placeholder= "Ваше Фамилия">
    <p>Email <br><input type =text name = "email" placeholder= "Email">
    <p>Выбирете Курс
        <br><input type =checkbox name = "kurs[]" value = 'PHP'>PHP<br>
        <br><input type =checkbox name = "kurs[]" value = 'Lisp'>Lisp<br>
        <br><input type =checkbox name = "kurs[]" value = 'Perl'>Perl<br>
        <br><input type =checkbox name = "kurs[]" value = 'Unix'>Unix<br>
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
$str = "Здраствуйте ,уважаемые" . $_POST["first_name"]
 . " " . $_POST["last_name"] ."!<br>";
$str .= "<br>Cообщаем Вам , что ";
$kurses = $_POST["kurs"];
if (!isset($kurses))
{
    $event = "cледующеее собрание студентов";
    $str .= "$event состится $date" . MEETING_TIME  . "<br>";
}
else
    {
        $event = "Выбранное вами лекция состоится $date <ul>";
        for ($i=0;$i<count($kurses);$i++)
        {
            $k = $kurses[$i];
            $lect = $lect . "<li> лекция по $k в $times[$k]";
            $lect .= "(Ваш лектор $lectors[$k])";

        }
        $event = $event . $lect . "</ul>";
        $str .= "$event";
    }
$str .= "<br>" . SIGN;
echo $str;
?>
</body>
</html>