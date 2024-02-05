<?php
require_once 'qrlib.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user information from the form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Generate vCard string
    $vcardData = generateVCard($name, $phone, $email);

    // Generate QR code
    QRcode::png($vcardData);
}

function generateVCard($name, $phone, $email) {
    $vcard = "BEGIN:VCARD\n";
    $vcard .= "VERSION:3.0\n";
    $vcard .= "FN:" . $name . "\n";
    $vcard .= "TEL:" . $phone . "\n";
    $vcard .= "EMAIL:" . $email . "\n";
    $vcard .= "END:VCARD\n";

    return $vcard;
}
?>
