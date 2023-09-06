<?php
$host = 'localhost';
$database = 'q91976m8_calc';
$user = 'q91976m8_calc';
$password = "bnVhma1&";
$weapon = $_GET['weapon'];
$link = mysqli_connect($host, $user, $password, $database) or die("error " . mysqli_error($link));
$query="SELECT `Damage`,`Type`,`Accuracy`,`AP`,`IsMelee` FROM `Weapons` WHERE `Name` = '$weapon'";
$result=mysqli_query($link,$query);
$array=[];
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