<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $fatherName = $_POST['fatherName'];
    $class = $_POST['class'];
    $mobile = $_POST['mobile'];
    $secondaryMobile = isset($_POST['secondaryMobile']) ? $_POST['secondaryMobile'] : '';
    $email = $_POST['email'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    // Email to you
    $to = "himanshurajput0221@outlook.com";
    $subject = "New Form Submission";
    $body = "Name: $name\n";
    $body .= "Father's Name: $fatherName\n";
    $body .= "Class: $class\n";
    $body .= "Mobile No: $mobile\n";
    $body .= "Secondary Mobile No: $secondaryMobile\n";
    $body .= "Email: $email\n";
    $body .= "Address: $address\n";
    $body .= "Message: $message\n";

    // Headers
    $headers = "From: $email";

    // Send email to you
    mail($to, $subject, $body, $headers);

    // Auto responder email to user
    $user_subject = "Thank you for contacting us";
    $user_body = "Dear $name,\n\n";
    $user_body .= "Thank you for contacting us. We have received your message and will get back to you shortly.\n\n";
    $user_body .= "Best regards,\nHimanshu Media Tech Solutions Ltd.";
    $user_headers = "From: himanshurajput0221@outlook.com";

    // Send auto responder email to user
    mail($email, $user_subject, $user_body, $user_headers);

    // Redirect to success page or display success message
    header("Location: success.html");
    exit;
} else {
    // Redirect to error page or display error message
    header("Location: error.html");
    exit;
}
?>
