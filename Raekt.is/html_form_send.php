<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "hlk2@hi.is";
     
    $email_subject = "website html form submissions";
     
     
    function died($error) {
        // villuskilaboð
        echo "Því miður kemur upp villa í forminu hjá þér! ";
        echo "Þessar villur koma upp fyrir neðan.<br /><br />";
        echo $error."<br /><br />";
        echo "Vinsamlegast farið til baka og lagfærið villurnar sem komu upp.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('Það lítur út fyrir að eitthvað hafi farið úrskeiðis hjá þér við útfyllingu á þessu formi!');      
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Netfangið sem þú slóst inn virðist ekki vera til.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Fornafnið sem þú slóst inn virðist ekki vera leyfilegt.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'Eftirnafnið sem þú slóst inn virðist ekki vera leyfilegt.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'Efnið sem þú skrifaðir virðist ekki vera leyfilegt.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<!-- place your own success html below -->
 
Við þökkum þér fyrir að hafa haft samband. Við svörum þér eins fljótt og við getum.
 
<?php
}
die();
?>