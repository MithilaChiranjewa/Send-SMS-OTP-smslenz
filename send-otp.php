<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $contact = $_POST['phone']; 
    $otp = rand(1000, 9999);    

    
    $user_id   = 'Your User ID';
    $api_key   = 'Your API key';
    $sender_id = 'SMSlenzDEMO'; 

    $message = "Welcome to SMS OTP  Reservation by GitHub @MCRM ,Your Project Login OTP code is: $otp";

    $payload = [
        'user_id'   => $user_id,
        'api_key'   => $api_key,
        'sender_id' => $sender_id,
        'contact'   => $contact,
        'message'   => $message
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://smslenz.lk/api/send-sms");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'cURL Error: ' . curl_error($ch);
    } else {
        echo "<h3>SMSlenz API Response:</h3>";
        echo "<pre>$response</pre>";
        echo "<p>OTP Sent to <strong>$contact</strong>: <strong>$otp</strong></p>";
    }

    curl_close($ch);
}
?>
