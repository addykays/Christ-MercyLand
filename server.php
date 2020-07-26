<?php 
	session_start();

	// variable declaration
	$firstname = "";
	$lastname = "";
	$othername = "";
	$telephone = "";
	$email    = "";
	$errors = array(); 

	// connect to database
	$db = mysqli_connect('localhost', 'br8yh6rwmk2n', '@ChristMercy1', 'i4580087_wp1');

        //Display Membership Number
        $query = "SELECT * FROM member_reg_no WHERE 1";
			$results = mysqli_query($db, $query);
			$row = mysqli_fetch_array($results);
			$member_no = $row['member_no'];

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$othername = mysqli_real_escape_string($db, $_POST['othername']);
		$telephone = mysqli_real_escape_string($db, $_POST['telephone']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$dob = mysqli_real_escape_string($db, $_POST['dob']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$address1 = mysqli_real_escape_string($db, $_POST['address1']);
		$address2 = mysqli_real_escape_string($db, $_POST['address2']);
		$city = mysqli_real_escape_string($db, $_POST['city']);
		$state = mysqli_real_escape_string($db, $_POST['state']);
		$zip = mysqli_real_escape_string($db, $_POST['zip']);

		// form validation: ensure that the form is correctly filled
		if (empty($lastname)) { array_push($errors, "Lastname is required"); }
		if (empty($firstname)) { array_push($errors, "Firstname is required"); }
		if (empty($telephone)) { array_push($errors, "Telephone is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO wp_users (lastname, firstname, othername, telephone, email, dob, password, sec_lname, sec_fname, member_no, address1, address2, city, state, zip) 
					  VALUES('$lastname', '$firstname', '$othername', '$telephone', '$user_email', '$dob', '$user_pass', $sec_lname, $sec_fname, '$member_no', '$address1', '$address2', '$city', '$state', '$zip')";
			mysqli_query($db, $query);
			$member_no = $member_no + 1;
			$query2 = "UPDATE `member_reg_no` SET `member_no`= $member_no WHERE 1";
			mysqli_query($db, $query2);
			$_SESSION['firstname'] = $firstname;
			$_SESSION['success'] = "You are successful registered as a Member";
			include "mail_process.php";
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM user_reg WHERE email='$email' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				isset($_SESSION['email']);
				$_SESSION['email'] = $email;
				$_SESSION['firstname']=$results['firstname'];
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
				exit();
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>