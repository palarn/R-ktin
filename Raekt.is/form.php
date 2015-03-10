<!-- Helga Lóa, 10. mars 2015 -->
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Raekt.is'; 
    $to = 'hlk2@hi.is'; 
    $subject = 'Email Inquiry';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Takk fyrir ad hafa samband!</p>';
    } else { 
        echo '<p>OOps! Thad virdist hafa komid upp villa. Profadu aftur.</p>'; 
    }
}
?>