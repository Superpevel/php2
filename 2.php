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
    <p>Телефон <br><input type =text name = "phone" placeholder= "Phone">

        <input type="submit" value="Отправить">
        <input type="reset" value="Отменить">
</form>
<?php
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
function ucfirst_utf8($str)
{
    return mb_substr(mb_strtoupper($str, 'utf-8'), 0, 1, 'utf-8') . mb_substr(mb_strtolower($str, 'utf-8'), 1, mb_strlen($str)-1, 'utf-8');
}

if (isset($first_name) && !preg_match('/[^а-яА-Я\s]+/msi',$first_name))
{
    $temp = ucfirst_utf8($first_name);
    if ($temp == $first_name)
    {
        echo '<p>Ваше имя';
        echo $first_name;
    }
    else
    {
        echo '<p>Имя введено неправильно 1 буква не заглавная!';
    }

}
else
{
    echo "<p>Введите ИМЯ!";
}

if (!(preg_match('/[^а-я ]+/msiu', $last_name)))
{
    $temp = ucfirst_utf8($last_name);

    if ($temp == $last_name)
    {
        echo '<p>Ваше Фамилия:';
        echo $last_name;
    }
    else
    {
        echo '<p>Фамилия введена неправильно 1 буква не заглавная!';
    }
}
else
{
    echo "<p>Введите Фамилию!";
}
if (preg_match("/^[а-яА-Яa-zA-Z0-9_\.\-]+@[а-яА-Яa-zA-Z0-9\-]+\.[а-яА-Яa-zA-Z\-\.]+$/Du", $email) > 0)
{
    echo "<p>Ваш email: ";
    echo $email;
}
else
{
    echo "Введите действительный email";
}
if (preg_match('/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/', $phone))
{
    echo '<p>Ваш телефон: ';
    echo $phone;
}
?>

</body>
</html>