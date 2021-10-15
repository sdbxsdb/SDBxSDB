<?php include("includes/header_nav.php"); ?>

<?php
if(isset($_POST['btnSubmit'])) {

    // EMAIL AND SUBJECT OF EMAIL BEING SENT
    $email_to = "samdonaghybell@gmail.com";
    $subject = "Contact Submission Form";

//ERROR MESSAGES IF DIED FUNCTION IS CALLED (SEMI-REDUNDANT BECAUSE SEND BUTTON WONT BE ENABLED UNTIL INPUT FIELDS ARE FILLED CORRECTLY ANYWAY)
    function died($error) {
        
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // IF NOTHING ENTERED THEN THROW ERROR MESSAGE
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }


//GETTING THE NAME EMAIL PHONE MESSAGE FROM THE FORM AND PUTTING IT INTO VARIABLES
    $full_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $phone = $_POST['phone'];
    $message= $_POST['message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

//CHECKING TO MAKE SURE VALID EMAIL IS ENTERED
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The e-mail you entered does not appear to be valid.<br />';
  }
//CHECKING TO MAKE SURE VALID NAME IS ENTERED
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$full_name)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
//CHECKING TO MAKE SURE MESSAGE IS MORE THAN 2 CHARACTERS
  if(strlen($message) < 2) {
    $error_message .= 'The message you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }

  
    $email_message = "Form details below.\n\n";

//MAKING SURE THERE ARE NO HEADER INJECTIONS
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

//THE FORMAT OF THE EMAIL BEING SENT. CLEAN STRING CLEANING ANY WHITE SPACE
    $email_message .= "Name: ".clean_string($full_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Message: \r\n".clean_string($message)."\n";
    $email_from = $full_name.'<'.$email_from.'>';


// CREATING EMAIL HEADER FOR GMAIL TO RECOGNISE
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $subject, $email_message, $headers); 


?>

<!-- THANKS OR SUCCESS MESSAGE AFTER THE EMAIL HAS BEEN SENT -->
<section id="thanksMsgPG">

<h1 class="thanksmsg darkModeText">Thanks for getting in touch.</h1>
<h3 class="thanksmsg darkModeText">I'll get back to you ASAP!</h3>
<a href="index.php"><button class="btn btn-success">Back</button></a>

</section>


<?php include("includes/footer.php"); ?>



<?php
}
?>

