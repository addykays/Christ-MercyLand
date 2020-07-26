<?php include('server.php') ?>
<!DOCTYPE html>
<html lang = "en-US">
<head>
<title>JOIN US | CHRIST MERCYLAND</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset = "UTF-8">
<meta name="description" content="register to get christian benefits from this ministry">
<meta name="keywords" content="Register, Christian, Benefits, families, friends, God">
<meta name="author" content="Kareem Adekunle (addykays)">
<link rel="author" href="https://plus.google.com/+addykays">
<link rel="shortcut icon" type="image/jpg" href="images/fav.jpg">
<!-- CSS links -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<!-- END - CSS links -->
<!-- SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- END SCRIPTS -->
<link rel="stylesheet" type="text/css" href="card_form_style.css">
<link rel="stylesheet" type="text/css" href="style.css">


<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@Christmercylan1" />
<meta name="twitter:creator" content="@iam_addykays" />
<meta name="twitter:image" content="https://christmercylands.org/images/Covi_19_Promotion1.jpg" />
<meta name="twitter:image:alt" content="Covid_19 Promotion1">

<meta property="og:site_name" content="CHRIST MERCYLAND" />
<meta property="og:url" content=" https://christmercylands.org/register.php#donate" />
<meta property="og:type" content="website" />
<meta property="og:title" content="CHRIST MERCYLAND | DONATE" />
<meta property="og:description" content="Join others to DONATE generously to Covid-19 Relief Efforts, God Gift Endowment and Evangelism" />
<meta property="og:image" content="https://christmercylands.org/images/Covi_19_Promotion1.jpg" />

</head>
<body>
<!--CARD FORM (JOIN US)-->
  <!-- Modal Content -->
  <div style="position: sticky; top: 0; z-index:1;"><img src="images/Christian_Benefit_Join_us_form_head.jpg" width="100%" alt="Christian_Benefit_Join_us_form_head">
    <p><a href="/" style="background-color: red; height: 6px; text-align: right; margin-right: 15px;">Goto Home</a></p>
  </div><br><br>
  <div class="cardModal-content animate">
    <div class="row">
      <div class="col-md-5">
        <h2 class="text-center" style="font-weight: bolder;">JOIN US TODAY!</h2>
        <h3 class="text-center" style="font-weight: bolder;">Get Access to CMM Benefits</h3>
        <p>Christ Mercyland Ministry offer several benefits that would serve your spiritual needs and more !</p>
        <ul style="list-style: disc; font-size: large;">
          <li>Annual Prayerfest Participation</li>
          <li>Leadership Opportunities</li>
          <li>Annual Group Pilgrimage to Jerusalem</li>
          <li>Special discount on spiritual items &amp; with participating outlets</li>
          <li>Evangelism participation</li>
          <li>Access to private consultation</li>
          <li>Invitation to Special Prayer events</li>
        </ul>
      </div>
      <div class="col-md-7" style="background-color: lightgrey;">
        <h2 class="text-center" style="font-weight: bolder;">Create your Membership Now</h2>
        <p  class="text-center" style="font-weight: bold; font-style: italic;">Membership is free!</p>
        <div class="row">
        <div class="col-md-6" style="margin: 10px;">
        <img src="images/Membership_Card_Template.png" style="width: 80%">
        <img src="images/Membership_Card_Template.png" style="width: 80%; margin-left: 80px; margin-top: -120px;">
      </div>
      <div class="col-md-5" style="padding: 20px;">
        <p style="font-size: x-large; font-weight: bold;">Categories:</p>
        <ul style="list-style: disc; font-size: large;">
          <li>ADULT (31 years +)</li>
          <li>YOUTH (16 - 30 years)</li>
        </ul>
      </div>
      </div>
      <style type="text/css">
          div.uCard li {
            font-weight: bold;
            list-style-type: disc;
            font-size: 12px;
            display: inline-block;
            margin-right: 10px;
          }
        </style>

        <div class="uCard">
          <ul style="width: 100%; padding: 0px; overflow-wrap: break-word;">
          <li>* Baptism</li>
          <li>* Wedding Ceremony</li>
          <li>* Baby Christening Ceremony</li>
          <li>* Final Burial Passage Ceremony</li>
        </ul>
          </div>
    </div>

</div>

<!-- Style for Form Table -->
  <style type="text/css">

    table{
      width: 100%;
    }

    table#rgForm tr {
      width: 100%;

    }

    table#rgForm td {
      padding-top: 10px;
      padding-left: 10px;
      padding-right: 20px;
    }

    table#rgForm td {
      width: 50%;
    }

    table#rgForm input {
      width: 100%;
    }

    table#rgForm input[type=radio] {
      width: initial;
    }

    div span input[type=checkbox] {
      width: initial;
    }

    div#voluntary {
      margin-bottom: 15px;
    }

    div#voluntary button {
      width: 50px;
      border-radius: 30%;
      background-color: black;
      color: white;
      padding: 8px;
      margin-right: 15px;
      margin-bottom: 5px;
      display: inline-block;
    }

  </style>

<script type="text/javascript">
  function func() {
    if (document.getElementById('specify').checked) {
     var speAmount = document.getElementById("specifyamount").value;
     document.getElementById('specify').value = speAmount;
    }
var am = $('input[name=amount]:checked').val();
    $('input[name=amount]')[0].value = am;
    // $('input[name=donationAmount]').value = am;
    // window.alert($('input[name=amount]')[0].value);
var vol = $('input[name=voluntary]:checked').val();
    $('input[name=item_name]')[0].value = vol;
}

  function valOther() {
    document.getElementById("specifyamount").focus();
  }

  // function submitUser() {
  //   document.getElementsByName('userRg')[0].submit();
  // }

  function submitUser() {
    document.getElementById("sr").click();
}

</script>


    <div class="container-fluid"> <!-- Form-Container -->
      <p>Please enter the following information as you would like it to appear on your membership card. All fields are required unless indicated.</p>

      
        <fieldset style="min-height:150px;">
  <legend>Member:</legend>
<table id="rgForm" border="0">
  <form action="register.php" method="post" name="userRg">
    <?php include('errors.php'); ?>
    <tr><td>&nbsp;</td><td class="text-uppercase" style="float: right; font-weight: bold;">Membership No: <strong><?php echo $member_no; ?></strong></td></tr>
    <tr>
      <td>
        <label for="lastname"><b>Last Name</b></label>
      <input type="text" class="cards" name="lastname" id="lastname" placeholder="Enter Surname" required>
      </td>
      <td>
        <label for="firstname"><b>First Name</b></label>
      <input type="text" class="cards" name="firstname" id="firstname"  placeholder="Enter First Name" required>
      </td>
    </tr>
    <tr>
      <td>
        <label for="othername"><b>Other Name</b></label>
      <input type="text" class="cards" name="othername" id="othername" placeholder="Enter any Other Name" required>
      </td>
      <td>
        <label for="telephone"><b>Phone Number</b></label>
      <input type="tel" class="cards" name="telephone" id="telephone" placeholder="Enter your Phone Number" required>
      </td>
    </tr>
    <tr>
      <td>
        <label for="email"><b>Email Address</b></label>
      <input type="email" class="cards" name="email" id="email" placeholder="Enter a valid email address" required>
      </td>
      <td>
        <label for="dob"><b>Birthday</b></label>
      <input type="date" class="cards" name="dob" id="dob" placeholder="" required>
      </td>
    </tr>
    <tr>
      <td>
        <label for="password_1"><b>Password</b></label>
      <input type="password" class="cards" name="password_1" id="password_1" placeholder="password" required>
      </td>
      <td>
        <label for="password_2"><b>Confirm Password</b></label>
      <input type="password" class="cards" name="password_2" id="password_2" placeholder="confirm password" required>
      </td>
    </tr>
    <tr>
      <td>
        <p style="font-size: large; font-weight: bolder;">Secondary Member &nbsp; <span style="color: grey; font-size: small;">(optional)</span></p>
        <p style="color: grey; font-size: small;">Anyone in your household</p>
      </td>
    </tr>
    <tr>
      <td>
        <label for="dob"><b>Last Name</b></label>
      <input type="text" class="cards" name="sec_lname" id="sec_lname" placeholder="">
      </td>
      <td>
        <label for="firstname2"><b>First Name</b></label>
      <input type="text" class="cards" name="sec_fname" id="sec_fname" placeholder="">
      </td>
    </tr>
    <tr>
      <td>
        <p style="font-size: large; font-weight: bolder;">Mailing Address</p>
      </td>
    </tr>
    <tr>
      <td>
        <label for="address1"><b>Address 1</b></label>
      <input  type="text" class="cards" id="address" placeholder="" name="address1" required>
      </td>
      <td>
        <label for="address2"><b>Address 2</b></label>
      <input  type="text" class="cards" id="address2" placeholder="" name="address2">
      </td>
    </tr>
      <tr>
      <td>
        <label for="city"><b>City</b></label>
        <input type="text" class="cards" name="city" id="city" placeholder="" required>
      </td>
      <td>
        <label for="state"><b>State/Province</b></label>
      <input type="text" class="cards" name="state" id="state" placeholder="" required>
      </td>
      </tr>
      <tr>
      <td>
        <label for="zip"><b>Zip/Postal Code</b></label>
        <input type="text" class="cards" name="zip" id="zip" placeholder="" required>
        <button type="submit" name="reg_user" id="sr" style="display: none"></button>
      </td>
    </tr>
    </form>
  </table>

<table class="table" style="margin:0!important;" id="donate">
  <!-- <tr>
    <td>&nbsp;</td>
    <td colspan="3" align="right">
  <p>Your donations entitled you to receive <i style="font-weight: bolder;">FREE</i> Faith Banner Gift and this gift is just the beginning....</p>
</td>
</tr> -->
  <tr class="row">
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="donorForm">
    <td class="col-sm-5" style="vertical-align: middle;">

    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business"
        value="christmercyland@christmercylands.org">

    <!-- Specify a Donate button. -->
    <input type="hidden" name="cmd" value="_donations">

    <!-- Specify details about the contribution -->
    <input type="hidden" name="item_name" value="">
    <!-- <input type="hidden" name="item_number" value="Fall Cleanup Campaign"> -->
    <input type="hidden" name="amount" value="25.00">
    <input type="hidden" name="currency_code" value="USD">

    <!-- Display the payment button. -->
    <!-- <input type="image" name="submit"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif"
    alt="Donate">
    <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" > -->

      <p style="font-weight: bolder;">Please accept my voluntary contribution to:</p><br>
        <div class="btn-group btn-group-toggle" data-toggle="buttons" id="voluntary">
  <label class="btn btn-info active" for="15">
    <input type="radio" name="amount" id="15" autocomplete="off" value="15.00" checked required=""> $15
  </label>
  <label class="btn btn-info" for="20">
    <input type="radio" name="amount" id="20" autocomplete="off" value="20.00" required=""> $20
  </label>
  <label class="btn btn-info" for="25">
    <input type="radio" name="amount" id="25" autocomplete="off" value="25.00" required=""> $25
  </label>
  <label class="btn btn-info" for="specify">
    <input type="radio" name="amount" id="specify" autocomplete="off" value="" onfocus="valOther()" required=""> others:
  </label>
  <input type="text" class="form-control input-sm" id="specifyamount" name="specifyamount" placeholder="Specify ($)" maxlength="4">
</div>
    </td>
    <td class="col-sm-4" style="vertical-align: middle;">
      <input type="radio" name="voluntary" id="voluntary1" value="Covid-19 Relief Efforts" required=""> Covid-19 Relief Efforts <br>
      <input type="radio" name="voluntary" id="voluntary1" value="Church Building Development Fund" required=""> Church Building Development Fund <br>
      <input type="radio" name="voluntary" id="voluntary2" value="Evangelism" required=""> Evangelism <br>
      <input type="radio" name="voluntary" id="voluntary3" value="God Gift Endowment" required=""> God Gift Endowment
    </td>
    <td class="col-sm-3" style="vertical-align: middle;">
      <img src="images/Christmercylandbannergiftweb.jpg" width="140px;">
    </td>
    <input type="submit" name="" id="donorSubmit" style="display: none;">
    </form>
  </tr>
</table>

  <style type="text/css">
    div#Joinpayment {
      background-color: grey;
  </style>

  <div id="Joinpayment">
    <p>You are logged into a secure server using SSL (Secure Socket Layer), and your data connection is encrypted.</p>
    <p>&nbsp;</p>
  </div>
     <div class="container-fluid text-center">
     <button type="submit" class="cards" name="reg_user" onclick="submitUser();">JOIN NOW</button>      <br>
     <div type="submit" class="cards" style="margin: 2px; padding: 10px; display: inline-block; background-color: cyan;">Just Want to Donate</div>   <br>
      <!-- <button type="submit" class="cards" name="donate" onclick="func();document.donorForm.submit();">NO! THANKS <span style="font-size: 10px;">Accept My Contribution</span></button> -->
      <!-- <img src="images/Donate.jpg" width="150px" onclick="func();document.donorForm.submit();"> -->
      <img src="images/Donate.jpg" width="150px" onclick="func();document.getElementById('donorSubmit').click();">
      <a href="learn.php"><img src="images/Learn_More.jpg" width="150px"></a>
      
    </div>
<hr style="border-top: 2px dotted blue">
    <div class="container-fluid" style="background-color:#f1f1f1">
      <p>Already a member? <a href="login.php">Sign in</a></p>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>

 </fieldset>
    </div> <!-- Form-Container -->

</div>

<!--END OF CARD FORM (JOIN US) -->


<?php include("include/footer.php"); ?>