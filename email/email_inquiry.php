<?php
if (file_exists('../admin/includes/systemconfig.php')) include_once('../admin/includes/systemconfig.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inquiryType = $_POST['inquiryType'] ?? '';
    $fullName    = $_POST['fullName'] ?? '';
    $email       = $_POST['email'] ?? '';
    $phone       = $_POST['phone'] ?? '';
    $subject     = $_POST['subject'] ?? '';
    $message     = $_POST['message'] ?? '';

    // ✅ Insert into DB
    $stmt = $db_connection->prepare("
        INSERT INTO tblinquiry (inquiry_type, fullname, emailaddress, phonenumber, subject, message) 
        VALUES (?, ?, ?, ?, ?, ?)
    ");
    $stmt->bind_param("ssssss", $inquiryType, $fullName, $email, $phone, $subject, $message);
    $stmt->execute();
    $stmt->close();

    // ✅ Get owner email from DB
    $result = mysqli_query($db_connection, "SELECT email FROM tblowner WHERE id = 1 LIMIT 1");
    $row = mysqli_fetch_assoc($result);
    $owner_email = $row['email'] ?? 'fallback@email.com';

    // Send email
    $mail = new PHPMailer();

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'scholarship941@gmail.com'; // replace with your Gmail
        $mail->Password   = 'mpefvbprqizgbtyb';         // replace with your Gmail app password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('scholarship941@gmail.com', 'Website Inquiry');
        $mail->addAddress($owner_email, "Admin");

        $mail->isHTML(true);
        $mail->Subject = "New Inquiry: " . htmlspecialchars($subject);
        $mail->Body    = "
            <h2>New Inquiry Received</h2>
            <p><strong>Inquiry Type:</strong> " . htmlspecialchars($inquiryType) . "</p>
            <p><strong>Name:</strong> " . htmlspecialchars($fullName) . "</p>
            <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
            <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
            <p><strong>Subject:</strong> " . htmlspecialchars($subject) . "</p>
            <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
        ";

        $mail->send();

        // ✅ Redirect back after success
        header("Location: ../?success=1");
        // exit();
    } catch (Exception $e) {
        header("Location: ../?error=" . urlencode($mail->ErrorInfo));
        exit();
    }
} else {
    header("Location: ../?error=invalid_request");
    exit();
}
