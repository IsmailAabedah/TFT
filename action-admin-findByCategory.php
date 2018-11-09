﻿<?php
$connection = mysqli_connect("localhost","root","","tft");

if(!$connection)
    die("connection failed:".mysqli_error());
mysqli_set_charset($connection,'utf8');

session_start();
$_SESSION['category']='empty';
$_SESSION['centerInf']='empty';
$counter=0;
if(isset($_POST['category']) && !empty($_POST['category']))
    $counter++;

if($counter==1)
{
    $category=$_POST['category'];
    $string = "";

    $result = $connection->prepare("SELECT `id`,`center-name`,`center-address`,`phone-number`,`sat-from`,`sat-to`,
          `sun-from`,`sun-to`,`mon-from`,`mon-to`,`tue-from`,`tue-to`,`wed-from`,`wed-to`,`thu-from`,`thu-to`,`fri-from`,`fri-to`
          FROM `centers` WHERE `category`=?");
    $result->bind_param("s", $category);
    $result->execute();
    $result->bind_result($id, $centerName, $centerAddress, $phoneNumber, $satFrom, $satTo, $sunFrom, $sunTo,
        $monFrom, $monTo, $tueFrom, $tueTo, $wedFrom, $wedTo, $thuFrom, $thuTo, $friFrom, $friTo);
    while ($result->fetch())
    {
        $string= $string
            ."نام مرکز: ".$centerName ."<br>"
            ."آدرس: ".$centerAddress ."<br>"
            ."شماره تماس: ".$phoneNumber ."<br>"."ساعات کاری: "."<br>";
        if($satFrom!=0 and $satTo!=0)
            $string= $string ."شنبه ها: از ساعت ". $satFrom ." تا ساعت ". $satTo."<br>";
        if($sunFrom!=0 and $sunTo!=0)
            $string= $string ."یکشنبه ها: از ساعت ". $sunFrom ." تا ساعت ". $sunTo."<br>";
        if($monFrom!=0 and $monTo!=0)
            $string= $string ."دوشنبه ها: از ساعت ". $monFrom ." تا ساعت ". $monTo."<br>";
        if($tueFrom!=0 and $tueTo!=0)
            $string= $string ."سه شنبه ها: از ساعت ". $tueFrom ." تا ساعت ". $tueTo."<br>";
        if($wedFrom!=0 and $wedTo!=0)
            $string= $string ."چهارشنبه ها: از ساعت ". $wedFrom ." تا ساعت ". $wedTo."<br>";
        if($thuFrom!=0 and $thuTo!=0)
            $string= $string ."پنج شنبه ها: از ساعت ". $thuFrom ." تا ساعت ". $thuTo."<br>";
        if($friFrom!=0 and $friTo!=0)
            $string= $string ."جمعه ها: از ساعت ". $friFrom ." تا ساعت ". $friTo."<br>";
        $string= $string ." 
        <form  action=\"action-centers.php\" method=\"post\">
            <input  type=\"hidden\" name=\"id\" value=".$id.">
            <button type=\"submit\" class=\" btn mybutton center-block\">اطلاعات بیشتر</button>
        </form>";
    }
    $_SESSION['category'] = $string;
}
header('Location: admin.php');
?>