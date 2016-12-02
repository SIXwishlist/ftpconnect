<?php
// Mark output as json
header('Content-Type: application/json');

// Create output
$success = false;
$message = "";
$data = [
    "success" => & $success,
    "message" => & $message
];

// Get document root
$doc_root = "";
if (is_dir($_SERVER['DOCUMENT_ROOT'])) {
    $doc_root = $_SERVER['DOCUMENT_ROOT'];
} else {
    // Document root is invalid; kill page to prevent script injection
    
    $message = "Document root is invalid. Please contact me at "
               . "chooper100.scratch@gmail.com if this error persists.";
    
    die(json_encode($data));
}

// Validate request
require $doc_root . '/api/request-validator.php';
$request_error = IsBadRequest(0, "POST", ["name", "email", "subject", "message"]);
if ($request_error) {
    // Request is invalid; kill page
    
    $message = "Bad request: ".$request_error;
    
    die(json_encode($data));
}

// Load phpmailer
require $doc_root . '/phpmailer/PHPMailerAutoload.php';

// Create new mail object
$mail = new PHPMailer;

// Set email headers
$mail->Sender = 'contact@ftpconnect.tk'; // Sender must be a valid ftpconnect.tk email
$mail->setFrom($_POST['email'], $_POST['name']);
$mail->addAddress('contact@ftpconnect.tk', 'FTP Connect Contact Team');

// Don't use HTML (to avoid script injection)
$mail->isHTML(false);

// Set message subject and body
$mail->Subject = $_POST['subject'];
$mail->Body    = $_POST['message'];

// Send mail
if($mail->send()) {
    $success = true;
    $message = "Message sent successfully";
} else {
    $message = "Error: " . $mail->ErrorInfo;
}

// Output result
echo json_encode($data);