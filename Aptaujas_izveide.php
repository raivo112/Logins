<?php
/*
title=$_GET["Title"];
$quest1 = $_GET["1.jaut"];
$quest2 = $_GET["2.jaut"];
$quest3 = $_GET["3.jaut"];
*/
$quest1 = "kas";
$quest2 = "kur";
$quest3 = "kad";

$dir="C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\Aptaujas";
$title="nosauk".".txt";
echo $dir;
echo $title;
$myfile = fopen($title, "w");

fwrite($myfile, $quest1."\n");
fwrite($myfile, $quest2."\n");
fwrite($myfile, $quest3."\n");
fclose($myfile);
?>