<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "bibakkhan24@gmail.com";
    $email_subject = "Form submission";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['n']) ||
        !isset($_POST['e']) ||
        !isset($_POST['p']) ||
        !isset($_POST['mob']) ||
		!isset($_POST['pro']) ||
		!isset($_POST['sem']) ||
		!isset($_POST['gen']) ||
		!isset($_POST['img']) ||
		!isset($_POST['yy']) ||
		!isset($_POST['mm']) ||
        !isset($_POST['dd'])){
		
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['n']; // required
    $email = $_POST['e']; // required
    $password = $_POST['p']; // required
    $mobile = $_POST['mob']; // not required
    $Programme = $_POST['pro'];
	$semester = $_POST['sem'];
	$gender = $_POST['gen'];
	$image = $_POST['img'];
	$dob = $_POST['yy'];
	$month = $_POST['mm'];
	$day = $_POST['dd'];
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>