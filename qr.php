<?php

// Include the PHP QR Code library files
require_once 'qrlib.php';
require_once 'qrconst.php';
require_once 'qrconfig.php';
require_once 'qrtools.php';
require_once 'qrspec.php';
require_once 'qrimage.php';
require_once 'qrinput.php';
require_once 'qrbitstream.php';
require_once 'qrsplit.php';
require_once 'qrrscode.php';
require_once 'qrmask.php';
require_once 'qrencode.php';
require_once 'qrarea.php';
require_once 'qrcanvas.php';
require_once 'qrsvg.php';

// Function to generate vCard string
function generateVCard($name, $phone, $email) {
    $vcard = "BEGIN:VCARD\n";
    $vcard .= "VERSION:3.0\n";
    $vcard .= "FN:" . $name . "\n";
    $vcard .= "TEL:" . $phone . "\n";
    $vcard .= "EMAIL:" . $email . "\n";
    $vcard .= "END:VCARD\n";

    return $vcard;
}

// Set contact information
$name = "John Doe";
$phone = "+1234567890";
$email = "john.doe@example.com";

// Generate vCard string
$vcardData = generateVCard($name, $phone, $email);

// Generate QR code
QRcode::png($vcardData);

?>
