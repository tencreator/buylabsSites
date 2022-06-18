<?php

// Getting all things from database
$sql = "SELECT * FROM Dutylogs ORDER BY time desc";

// Make query and get data
$result = mysqli_query($mysqli, $sql);

// fetch everything and set as array
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

$faa = array_filter($rows, function($data){
    return $data['dept'] === 'FAA'; // Department Name for Knights-Duty example: SASP
});

$bcso = array_filter($rows, function($data){
    return $data['dept'] === 'BCSO'; // Department Name for Knights-Duty example: SASP
});

$sasp = array_filter($rows, function($data){
    return $data['dept'] === 'SASP'; // Department Name for Knights-Duty example: SASP
});

$safr = array_filter($rows, function($data){
    return $data['dept'] === 'SAFR'; // Department Name for Knights-Duty example: SASP
});

$pubcop = array_filter($rows, function($data){
    return $data['dept'] === 'PUBCOP'; // Department Name for Knights-Duty example: SASP
});

$LSPD = array_filter($rows, function($data){
    return $data['dept'] === 'LSPD'; // Department Name for Knights-Duty example: SASP
});

$FIB = array_filter($rows, function($data){
    return $data['dept'] === 'FIB'; // Department Name for Knights-Duty example: SASP
});

$staff = array_filter($rows, function($data){
    return $data['dept'] === 'STAFF'; // Department Name for Knights-Duty example: SASP
});


function timeCalc($inputSeconds) {

    $secondsInAMinute = 60;
    $secondsInAnHour  = 60 * $secondsInAMinute;
    $secondsInADay    = 24 * $secondsInAnHour;

    // extract days
    $days = floor($inputSeconds / $secondsInADay);

    // extract hours
    $hourSeconds = $inputSeconds % $secondsInADay;
    $hours = floor($hourSeconds / $secondsInAnHour);

    // extract minutes
    $minuteSeconds = $hourSeconds % $secondsInAnHour;
    $minutes = floor($minuteSeconds / $secondsInAMinute);

    // extract the remaining seconds
    $remainingSeconds = $minuteSeconds % $secondsInAMinute;
    $seconds = ceil($remainingSeconds);

    // return the final array
    $obj = array(
        // 'd' => (int) $days . ' ',
        'd' => (int) $hours . 'D ',
        'h' => (int) $minutes . 'H ',
        'm' => (int) $seconds . 'M',
    );
    return $obj;
}