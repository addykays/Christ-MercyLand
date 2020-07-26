<?php
if(isset($_POST['prForm'])) {

$request = $_POST['request'];
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

  $to = "prayerrequest@christmercylands.org";
  
  $email_subject = "New | Prayer Request Form";
  
  $email_body = "<strong>$name</strong> has requested for a prayer".
"<br><b><i>Here are the details:</i></b> <br> My Name is $name".
"<br><h3><strong>$request</strong></h3>".
"<br><p><strong>Email:</strong> $email_address</p>".
"<br><p><strong>Additional Message:</strong> $message</p>";
  
  // Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: CHRIST MERCYLAND | PRAYER REQUEST <noreply@christmercylands.org>' . "\r\n";
$headers .= 'Reply-To:'.$mail . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

  mail($to,$email_subject,$email_body,$headers);

  echo "<script>
alert('We will get back to you soon! check your mail for Reply');
window.location.href='https://christmercylands.org/';
</script>";

}
?>



<?php
if(isset($_POST['reg_user'])) {

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];


  $to = "membership@christmercylands.org";
  $to2 = $email;
  
  $email_subject = "New | Membership ";
  $email_subject2 = "WELCOME | Christ Mercylands ";
  
  $email_body = "This person with the below details have successfully joined Christ Mercyland Ministry".
"<br><b><i>Here are the details:</i></b>".
"<p><strong>Name:</strong> $lname $fname</p>".
"<p><strong>Email:</strong> $email</p>".
"<p><strong>Telephone:</strong> $telephone</p>";

$email_body2 = "<strong>$lname $fname</strong> You are Welcome to Christ Mercylands Ministry".
"<br><p><b><i>Your Membership Card will be ready and mailed to you shortly.</i></b></p>".
"<br><div style='text-align: center;'><a href='https://christmercylands.org/register.php#donate'><img src='http://christmercylands.org/images/Donate.jpg' width='25%'></a><a href='https://christmercylands.org/learn.php'><img src='http://christmercylands.org/images/Learn_More.jpg' width='25%'></div></a>";
  
  // Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: CHRIST MERCYLAND | MEMBERSHIP <noreply@christmercylands.org>' . "\r\n";

$headers .= 'X-Mailer: PHP/' . phpversion();

  mail($to,$email_subject,$email_body,$headers);
  mail($to2,$email_subject2,$email_body2,$headers);

  echo "<script>
alert('You are now a Member');
window.location.href='https://christmercylands.org/';
</script>";

}

?>