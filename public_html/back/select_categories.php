<?php
include "./connection.php";
$link = mysqli_connect($host, $user, $password, $database) or die("error " . mysqli_error($link));
$query="SELECT * FROM `Category`";
$result=mysqli_query($link,$query);
$array=[];
if(mysqli_num_rows($result)!=0)
{
    while($row=mysqli_fetch_array($result))
    {
        array_push($array, $row['Type']);
    }
}
$link = mysqli_connect($host, $user, $password, $database) or die("error " . mysqli_error($link));
$query="SELECT * FROM `Weapons`";
$result=mysqli_query($link,$query);
$array1=[];
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