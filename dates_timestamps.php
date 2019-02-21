<?php
	echo date('d')."<br>"; // Day
	echo date('m');			// Month
	echo date('Y');			// Year (complete)
	echo date('l');
	echo date('Y-m-d'); 	// year-month-day
	echo "<br>".date('D M d, Y')."<br>";

	// Hours
	// echo date('h:');
	// echo date('i:');
	// echo date('s ');
	// echo date('a');

	// Set time zone
	date_default_timezone_set('America/Caracas');
	echo date('h:i:sa')."<br>";

	// Timestamp
	$timestamp = mktime(11, 26, 00, 02, 26, 1998);
	echo "Timestamp: $timestamp<br>";

	// Actual readable time
	echo date('d/m/y h:ia', $timestamp);
	
	// Other functions of date()
	echo '<br> what date() is capable of doing <br>';

	$timestamp2 = strtotime('12:33pm Feb 21 2019');
	echo date('d/m/y h:ia', $timestamp2)."<br>";

	$timestamp3 = strtotime('tomorrow');
	echo date('d/m/y h:ia', $timestamp3)."<br>";

	$timestamp4 = strtotime('next Sunday');
	echo date('d/m/y h:ia', $timestamp4)."<br>";

	$timestamp5 = strtotime('+100 days');
	echo date('d/m/y h:ia', $timestamp5)."<br>";
