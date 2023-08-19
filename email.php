<?php
require 'path_to_phpmailer/PHPMailerAutoload.php';

$dbHost = 'localhost';
$dbUsername = 'your_username';
$dbPassword = 'your_password';
$dbName = 'your_database_name';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM userdata"; // Replace with your actual table name
$result = $conn->query($query);

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // Your SMTP host
$mail->SMTPAuth = true;
$mail->Username = 'your_email@example.com'; // Your SMTP username
$mail->Password = 'your_email_password'; // Your SMTP password
$mail->SMTPSecure = 'tls'; // Use 'tls' or 'ssl'
$mail->Port = 587; // Your SMTP port

$mail->setFrom('your_email@example.com', 'Your Name');

while ($row = $result->fetch_assoc()) {
    $mail->clearAddresses();
    $mail->addAddress($row['email'], $row['username']);

    $mail->Subject = 'Payment Confirmation';
    $mail->Body = "Hello " . $row['username'] . ",\n\n"
        . "Thank you for your payment of $" . $row['amount'] . ".\n\n"
        . "Best regards,\nYour Organization";

    if ($mail->send()) {
        echo "Email sent to " . $row['email'] . "<br>";
    } else {
        echo "Email to " . $row['email'] . " failed: " . $mail->ErrorInfo . "<br>";
    }
}

$conn->close();
?>
