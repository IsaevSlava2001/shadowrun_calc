<!-- Скрипт php для выгрузки из БД в массив всего содержимого таблиц с категориями оружия и характеристиках оружия -->
<?php
include "./connection.php";

//  Подключение и запрос БД
$link = mysqli_connect($host, $user, $password, $database) or die("error " . mysqli_error($link));
$query="SELECT * FROM `Category`";
$result=mysqli_query($link,$query);
$array=[];

// Запись результата ответа БД в массив
if(mysqli_num_rows($result)!=0)
{
    while($row=mysqli_fetch_array($result))
    {
        array_push($array, $row['Type']);
    }
}


// Подключение и запрос к БД
$link = mysqli_connect($host, $user, $password, $database) or die("error " . mysqli_error($link));
$query="SELECT * FROM `Weapons`";
$result=mysqli_query($link,$query);
$array1=[];

// Запись результата ответа БД в массив и перенаправление пользователя на другую страницу в звсисимости от успешности запроса к БД
if(mysqli_num_rows($result)!=0)
{
    while($row=mysqli_fetch_array($result))
    {
        array_push($array1, $row['Name']);
    }
    header("Location:index.php");
}
else
{
    header("Location:index.php?error=main_info");
    die;
}
?>