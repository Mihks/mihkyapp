<?php
// session_start();

// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];
$networkCode = $_POST["networkCode"];
// $_SESSION['name'] 
if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Interface Flemard réservation \n".$text;
    $response .= "1. votre nom";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Type de reservation \n".$text;
    $response .= "1. Aller-simple \n";
    $response .= "2. Aller-retour";

} else if ($text == "1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $place = array();
    $response = "END Nombre de place ".$text;
    
} else if($text == "1*1") { 
    // This is a second level response where the user selected 1 in the first instance
    $accountNumber  = "ACC1001";

    // This is a terminal request. Note how we start the response with END
    $response = "END Your account number is ".$accountNumber;

} else if ( $text == "1*2" ) {
    // This is a second level response where the user selected 1 in the first instance
    $balance  = "KES 10,000";

    // This is a terminal request. Note how we start the response with END
    $response = "END Your balance is ".$balance;
}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;
