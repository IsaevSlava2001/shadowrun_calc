<!-- Скрипт для выгрузки из БД информации про оружие с именем, выбранным пользвоателем -->
<?php
// Параметры подключения к БД
$host = 'localhost';
$database = 'q91976m8_calc';
$user = 'q91976m8_calc';
$password = "bnVhma1&";
$weapon = $_GET['weapon'];

//  Подключение и запрос БД
$link = mysqli_connect($host, $user, $password, $database) or die("error " . mysqli_error($link));
$query="SELECT `Damage`,`Type`,`Accuracy`,`AP`,`IsMelee` FROM `Weapons` WHERE `Name` = '$weapon'";
$result=mysqli_query($link,$query);
$array=[];

// Запись в массив преобразованного ответа БД и отправка массива
if(mysqli_num_rows($result)!=0)
{
    while($row=mysqli_fetch_array($result))
    {
        array_push($array,$row['Damage'],$row['Type'],$row['Accuracy'],$row['AP'],$row['IsMelee']);
    }
    var_dump($array);
}
else
{
    echo "no such weapon";
}
?>