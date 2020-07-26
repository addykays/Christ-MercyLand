<?php
if(isset($_POST['cnt_sbmt'])) {

	$name = $_POST['cnt_name'];
	$mail = $_POST['cnt_mail'];
	$tel = $_POST['cnt_tel'];
	$message = $_POST['cnt_msg'];

  $to = 'addykays1@gmail.com';
  
  $email_subject = "CONTACT US FORM";
  
  $email_body = "
<br>
<strong>$name</strong> just sent a Message.
<br><br>
Email Address: <strong>$mail</strong>
<br><br>
Phone Number: <strong>$tel<strong>
<br><br>
Message: <br> <strong>$message</strong>
  ";
  
  // Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: CHRIST MERCYLANDS | CONTACT US FORM <noreply@christmercylands.org>' . "\r\n";
$headers .= 'Reply-To:'.$mail . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

  mail($to,$email_subject,$email_body,$headers);

  echo "<script>
alert('$name, Thank you for contacting Christ Mercylands Ministry, We will kindly get back to you shortly');

</script>";

}

 ?>


<?php

$page_title = "CONTACT US | CHRIST MERCYLANDS MINISTRY";
$page_descr = "consultancy assists for individuals, friends, families and spouses";
$page_keywords = "Christian, Christ, Mercyland, Ministry, Benefits, Mercy, families, friends, God, Contact, Contact us";

include("include/header.php");

?>


<style type="text/css">
	.contact{
		width: 60%;
		background-color: white;
		margin-left: auto;
		margin-right: auto;
		padding: 20px 40px;
	}

	.contact form{
		width: 90%;
		background-color: rgba(196, 196, 196, 0.3);
		margin-left: auto;
		margin-right: auto;
		padding: 20px 40px;
	}
	.contact img{
		width: 70%;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}

	.contact span, .contact h2{
		color: #588fe8;
		font-weight: bold;
	}
	.contact button{
		background-color: #588fe8;
		font-weight: bold;
		color: white;
	}
</style>

	<div class="contact">
	<img src="images/ContactUs_head.jpg">
	<h2 style="margin: 25px 60px;">CONTACT US</h2>
	<form action="#" method="post" name="contact_us">
		<div class="form-group">
    <label for="name">Name <span>*</span></label>
    <input type="text" class="form-control form-control-sm" id="name" placeholder="Name" name="cnt_name" required>
  </div>
  <div class="form-group">
    <label for="Umail">Email <span>*</span></label>
    <input type="email" class="form-control form-control-sm" id="Umail" aria-describedby="emailHelp" placeholder="Email" name="cnt_mail" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="phne">Phone <span>*</span></label>
    <input type="tel" class="form-control form-control-sm" id="phne" placeholder="Phone Number" name="cnt_tel" required>
  </div>
  <div class="form-group">
    <label for="msag">Message <span>*</span></label>
    <textarea type="text" class="form-control form-control-sm" id="msag" rows="4" placeholder="Name" name="cnt_msg" required></textarea>
  </div>
  <button class="w-100" name="cnt_sbmt">SUBMIT</button>
	</form>
	</div>



<?php include("include/footer.php"); ?>