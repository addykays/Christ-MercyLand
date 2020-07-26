<?php
$page_title = "LOGIN | CHRIST MERCYLANDS MINISTRY";
$page_descr = "Login to Christ Mercylands Ministry Portal to consult assistance for individuals, friends, families and spouses";
$page_keywords = "Christian, Christ, Mercyland, Ministry, Benefits, Mercy, families, friends, God, login";

include("include/header.php");
?>

<link rel="stylesheet" type="text/css" href="log_style.css">
<link rel="stylesheet" type="text/css" href="card_form_style.css">


  <div class="header">
    <h2>Login</h2>
  </div>
  
  <form method="post" action="login.php" id="log">

    <?php include('errors.php'); ?>

    <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" id="email" placeholder="Enter a valid email address" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <div class="valid-feedback">
        Looks good!
      </div>
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password"  placeholder="password" required>
  </div>

    <p><input type="checkbox" class="" name="remMe" id="remMe" style="width: auto;"> Remember me </p>

  <button class="btn btn-primary btn-block" type="submit" name="login_user">LOGIN</button>

  <p> Not yet a member? <a href="register.php">Sign up</a> </p>

  </form>


<?php include("include/footer.php"); ?>