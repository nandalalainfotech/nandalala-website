<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $address = $_POST['address'] ?? '';

    // File upload handling
    $uploadFileDir = 'uploads/';
    if (!is_dir($uploadFileDir)) {
        mkdir($uploadFileDir, 0777, true);
    }
    $fileAttached = false;
    if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        $destPath = $uploadFileDir . $newFileName;
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            $fileAttached = true;
        }
    }

    // PHPMailer setup
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply.nandalalainfotech@gmail.com';
        $mail->Password = 'yuntjikzkpxmhdoj';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('noreply.nandalalainfotech@gmail.com');
        $mail->addAddress('abi876090@gmail.com', 'SM');
        $mail->addAddress('prabagandhi20@gmail.com');

        // Attachments
        if ($fileAttached) {
            $mail->addAttachment($destPath, $fileName);
        }

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Application Received';
        $mail->Body = '<h1>Application Details</h1>' .
                      '<p><strong>Name:</strong> ' . $name . '</p>' .
                      '<p><strong>Email:</strong> ' . $email . '</p>' .
                      '<p><strong>Contact:</strong> ' . $contact . '</p>' .
                      '<p><strong>Address:</strong> ' . $address . '</p>';

        $mail->send();
        echo 'Message has been sent.';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
