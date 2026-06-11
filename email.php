<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form data
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    
    // File upload
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
        $dest_path = $uploadFileDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $fileAttached = true;
        } else {
            $fileAttached = false;
        }
    }

    // PHPMailer setup
    // PHPMailer setup
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host       = "smtp.gmail.com";
$mail->SMTPAuth   = true;
$mail->Username   = "noreply.nandalalainfotech@gmail.com";
$mail->Password   = "aweanhgnmiqviobh"; 
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = 587;


$mail->addAddress("hr@nandalalainfotech.com");

// Email content
$mail->isHTML(true);
$mail->Subject = "New Application Received";
$mail->Body    = "
<h2>Application Details</h2>
<p><strong>Name:</strong> $name</p>
<p><strong>Email:</strong> $email</p>
<p><strong>Contact:</strong> $contact</p>
<p><strong>Address:</strong> $address</p>
";


    if ($fileAttached) {
        $mail->addAttachment($dest_path, $fileName);
    }

    // Send email
    // if(!$mail->Send()) {
    //     echo 'Message was not sent.';
    //     echo 'Mailer error: ' . $mail->ErrorInfo;
    // } else {
    //     echo 'Message has been sent.';
    // }
    if($mail->send()){
    echo "success";
}else{
    echo "failed";
}
}