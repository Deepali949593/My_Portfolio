<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//  $to = "6767deepali@gmail.com";  // Your email address
//  $name = htmlspecialchars($_POST['name']);
//  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
//  $subject = htmlspecialchars($_POST['subject']);
//  $message = htmlspecialchars($_POST['message']);
//  $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : 'Not Provided';
//
//  $email_body = "📬 New Contact Form Submission\n\n";
//  $email_body .= "👤 Name: $name\n";
//  $email_body .= "📧 Email: $email\n";
//  $email_body .= "📱 Phone: $phone\n";
//  $email_body .= "📝 Message:\n$message\n";
//
//  $headers = "From: $name <$email>\r\n";
//  $headers .= "Reply-To: $email\r\n";
//
//  if (mail($to, $subject, $email_body, $headers)) {
//    echo "<h3 style='color:green;'>Message sent successfully! ✅</h3>";
//  } else {
//    echo "<h3 style='color:red;'>❌ Failed to send message. Please try again later.</h3>";
//  }
//}
//?>
