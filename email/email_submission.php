<?php
if (file_exists('../admin/includes/systemconfig.php')) include_once('../admin/includes/systemconfig.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ✅ Collect form data
    $firstName    = $_POST['first_name'] ?? '';
    $lastName     = $_POST['last_name'] ?? '';
    $email        = $_POST['email_address'] ?? '';
    $phone        = $_POST['phone_number'] ?? '';
    $bookTitle    = $_POST['book_title'] ?? '';
    $wordCount    = $_POST['word_count'] ?? '';
    $genre        = $_POST['genre'] ?? '';
    $synopsis     = $_POST['synopsis'] ?? '';
    $publications = $_POST['publications'] ?? '';
    $platform     = $_POST['platform'] ?? '';

    $fullName = trim($firstName . " " . $lastName);

    // ✅ Insert into DB
    $stmt = $db_connection->prepare("
        INSERT INTO tblmanuscripts  
            (first_name, last_name, email_address, phone_number, book_title, word_count, genre, synopsis, publications, platform, submitted_at) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())
    ");
    $stmt->bind_param(
        "sssssissss",
        $firstName,
        $lastName,
        $email,
        $phone,
        $bookTitle,
        $wordCount,
        $genre,
        $synopsis,
        $publications,
        $platform
    );
    $stmt->execute();
    $stmt->close();



    // ✅ Get owner email from DB
    $result = mysqli_query($db_connection, "SELECT email FROM tblowner WHERE id = 1 LIMIT 1");
    $row = mysqli_fetch_assoc($result);
    $owner_email = $row['email'] ?? 'fallback@email.com';

    // ✅ Send email
    $mail = new PHPMailer();
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'scholarship941@gmail.com';
        $mail->Password   = 'mpefvbprqizgbtyb';  // Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('scholarship941@gmail.com', 'Manuscript Submission');
        $mail->addAddress($owner_email, "Admin");

        $mail->isHTML(true);
        $mail->Subject = "New Manuscript Submission: " . htmlspecialchars($bookTitle);
        $mail->Body    = "
            <h2>New Manuscript Submission</h2>
            <p><strong>Name:</strong> " . htmlspecialchars($fullName) . "</p>
            <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
            <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
            <hr>
            <p><strong>Book Title:</strong> " . htmlspecialchars($bookTitle) . "</p>
            <p><strong>Word Count:</strong> " . htmlspecialchars($wordCount) . "</p>
            <p><strong>Genre:</strong> " . htmlspecialchars($genre) . "</p>
            <p><strong>Synopsis:</strong><br>" . nl2br(htmlspecialchars($synopsis)) . "</p>
            <p><strong>Previous Publications:</strong><br>" . nl2br(htmlspecialchars($publications)) . "</p>
            <p><strong>Author Platform:</strong><br>" . nl2br(htmlspecialchars($platform)) . "</p>
            <hr>
            <p><em>Submission received on " . date("F j, Y, g:i a") . "</em></p>
        ";

        $mail->send();

        // ✅ Redirect with success flag
        header("Location: ../?success=1");
        exit();
    } catch (Exception $e) {
        header("Location: ../?error=" . urlencode($mail->ErrorInfo));
        exit();
    }
} else {
    header("Location: ../?error=invalid_request");
    exit();
}
