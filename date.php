<?php

echo date('d'); // Day
echo "<br>";
echo date('m'); // Month
echo "<br>";
echo date('Y'); // Year
echo "<br>";
echo date('Y/m/d');
echo "<br>";
echo date('m-d-Y');
echo "<br>";
echo date('h');
echo "<br>";
echo date('i'); // minutes
echo "<br>";
echo date('s'); // seconds
echo date('a'); // AM or PM
echo "<br>";

// Set Time Zone

date_default_timezone_set('Europe/Vilnius');
echo date('h:i:sa');

echo "<br>";
echo "<br>";
$timestamp = mktime(10, 14, 54, 11, 9, 1992);

// echo $timestamp;

echo date('m/d/Y h:i:sa', $timestamp);

$timestamp2 = strtotime('7:00pm April 23 2019');
echo "<br>";
echo $timestamp2;
echo "<br>";
echo date('m/d/Y h:i:sa', $timestamp2);

echo "<br>";
$timestamp4 = strtotime('tomorrow');
echo date('m/d/Y h:i:sa', $timestamp4);

echo "<br>";
$timestamp5 = strtotime('next Sunday');
echo date('m/d/Y h:i:sa', $timestamp5);
echo "<br>";
$timestamp6 = strtotime('+2 Months');
echo date('m/d/Y h:i:sa', $timestamp6);
?>