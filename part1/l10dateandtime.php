<?php

// 1 jan 1970 UTC

// https://www.php.net/manual/en/timezones.asia.php
date_default_timezone_set("Asia/Yangon");

$getdate = getdate();
var_dump($getdate);
echo "<prev>".print_r($getdate,true)."</prev>";

echo "This is seconds = ".$getdate["seconds"];
echo "This is minutes = ".$getdate["minutes"];
echo "This is hours = ".$getdate["hours"];

echo "This is weekday = ".$getdate["weekday"]; // Tuesday
echo "This is wday = ".$getdate["wday"];// 0 = sunday 1 = monday
echo "This is yday = ".$getdate["yday"]; // 64 day of the year

echo "This is month = ".$getdate["month"]; // March
echo "This is mon = ".$getdate["mon"]; // 3 // day of the month
echo "This is mday = ".$getdate["mday"]; // 5

echo "This is year = ".$getdate["year"]; // 2026

echo "This is 0 = ".$getdate["0"]; // 1709654321

$time = time();
echo "This is 0 = ".$time; // 1709654321


// DATE/TIME Format
// date(format,timestamp);

$date = date("a",$time);
echo "This is format a = ".$date; // am pm

$date = date("A",$time);
echo "This is format A = ".$date; // AM PM

$date = date("d",$time);
echo "This is format d = ".$date; // 30 // day leading zero

$date = date("D",$time);
echo "This is format D = ".$date; // Thu Sun Mon

$date = date("F",$time);
echo "This is format F = ".$date; // July

$date = date("g",$time);
echo "This is format g = ".$date; // 1 // hours no leading zero 12hr

$date = date("G",$time);
echo "This is format G = ".$date; // 13 // hours no leading zero 24hr

$date = date("h",$time);
echo "This is format g = ".$date; // 01 // hours leading zero 12hr

$date = date("H",$time);
echo "This is format H = ".$date; // 13 // hours leading zero 24hr

$date = date("i",$time);
echo "This is format i = ".$date; // 01 // minute

$date = date("j",$time);
echo "This is format j = ".$date; // 5 // day of month no leading zero

$date = date("l",$time);
echo "This is format l = ".$date; // Thursday

$date = date("L",$time);
echo "This is format L = ".$date; // 1 // leap year ( 1 = true , 0 = false)

$date = date("m",$time);
echo "This is format m = ".$date; // 03 // day of month leading zero

$date = date("M",$time);
echo "This is format M = ".$date; // Jul // (Jan / Feb)

$date = date("n",$time);
echo "This is format n = ".$date; // 3 // day of month no leading zero

$date = date("r",$time);
echo "This is format r = ".$date; // Thur, 30 Jul 2026 13:45:50 +0630

$date = date("s",$time);
echo "This is format s = ".$date; // 57 seconds

$date = date("U",$time);
echo "This is format U = ".$date; // 1709657004 milli seconds

$date = date("y",$time);
echo "This is format y = ".$date; // 26 year shortcode

$date = date("Y",$time);
echo "This is format Y = ".$date; // 2026

$date = date("z",$time);
echo "This is format z = ".$date; // 64 day of the year



    // date_create(time,optional timezone) with date_format("Y/m/d")    with date_diff(new,old)
        // eg : date_create(timestamp,timezone_open("Asian/Yangon"))

$date1 = date_create("10-01-2026");
echo date_format($date1,"Y/m/d"); // 2026/01/10

$date2 = date_create("15-01-2026");
echo date_format($date2,"Y-m-d"); // 2026-04-10

$diffone = date_diff($date2,$date1);
echo $diffone->format("%d days"); // 5 days
echo $diffone->format("%m days"); // 0 months
echo $diffone->format("%y days"); // 0 year
echo $diffone->format("%Y days"); // 00 year



$date3 = "{$getdate['mday']}-{$getdate['mon']}-{$getdate['year']}";
$date4 = date_create($date3);

echo $date3;
echo date_format($date4,"Y-m-d");

$difftwo = date_diff($date4,$date2);
echo $difftwo->format("%d days"); // 10 days
echo $difftwo->format("%m days"); // 1 months
echo $difftwo->format("%y days"); // 0 year
echo $difftwo->format("%Y days"); // 00 year

echo $difftwo->format("%R%d days"); //
echo $difftwo->format("%R%a day"); //


?>