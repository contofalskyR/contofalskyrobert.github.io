
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['demo-name'];
    $email = $_POST['demo-email'];
    $message = $_POST['demo-message'];

    $to = "robert.contofalsky@mail.mcgill.ca";
    $subject = "New message from your guest form";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "
    <html>
    <body>
        <p>Name: {$name}</p>
        <p>Email: {$email}</p>
        <p>Message: {$message}</p>
    </body>
    </html>
    ";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank_you.html");
    } else {
        header("Location: error.html");
    }
}
?>
