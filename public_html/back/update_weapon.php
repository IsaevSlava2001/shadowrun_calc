<?php
// Скрипт поиска введённого пользователем оружия среди самых обновлённых данных БД. (В случае, если оружие не было нейдено)

// Параметры подключения к БД
$host = 'localhost';
$database = 'q91976m8_calc';
$user = 'q91976m8_calc';
$password = "bnVhma1&";
$cat = $_GET['categ'];

if($cat!="no such weapon")
{
    //  Подключение и запрос БД
    $link = mysqli_connect($host, $user, $password, $database) or die("error " . mysqli_error($link));
    $query="SELECT `ID` FROM `Category` WHERE `Type` = '$cat'";
    $result=mysqli_query($link,$query);
    $array=[];

    $f;
    if(mysqli_num_rows($result)!=0)
    {
        while($row=mysqli_fetch_array($result))
        {
            $f=$row['ID'];
        }

        // Запрос БД
        $query="SELECT `Name` FROM `Weapons` WHERE `Category` = $f";
        $result=mysqli_query($link,$query);
        $array1=[];

        // Заполнение массива и его отправка
        if(mysqli_num_rows($result)!=0)
        {
            while($row=mysqli_fetch_array($result))
            {
                array_push($array1, $row['Name']);
            }
            var_dump($array1);
        }
        else
        {
            echo "";
        }
    }
    else
    {
        echo "no such weapon";
    }
}
?>

