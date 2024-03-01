<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Variables that store form data
    $email = $_POST['email'];
    $message = $_POST['messagebody'];

    // Additional variables
    $page_link = '/index.html';
    $headers = "From: $email";
    $date = date('m/d/Y, H:i:s');

    // Success message
    echo "<h1 style='color:green; text-align: center; '><br><br> <br>Thank you for contacting us, we will get back to you as soon as possible.</h1><br>";
    echo "<div style=' text-align: center; font-size: 1.5rem;'> <a href='$page_link'>&larr;<b>Back to the website<b></a> </div>";

    // Email content
    $msg = "$email\n\n$message\n\nSent on: $date";
    $formattedmsg = wordwrap($msg, 70);

    // Send email
    mail('stoilpanchevsport@gmail.com', 'website query', $formattedmsg, $headers);
} else {
    // If the form wasn't submitted, redirect to the home page
    header("Location: ../index.html");
    exit();
}
?>
