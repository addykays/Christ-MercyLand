<?php

// connect to database
	include ('custom-tee-db.php');

$idquery = "SELECT * FROM product_id";
			$idresults = mysqli_query($db, $idquery);
			$row = mysqli_fetch_array($idresults);
			$pid = $row['pid'];

if(isset($_POST['prodUpload'])) {
	$check = getimagesize($_FILES["prodImage"]["tmp_name"]);
	if($check !== false){
        $image = $_FILES['prodImage']['tmp_name'];
        $prod_image = addslashes(file_get_contents($image));
} else {
	echo "Please select an image file to upload.";
}

	$Cimage = $_FILES['prodColor']['tmp_name'];
	$color_image = addslashes(file_get_contents($Cimage));
	$prod_name = mysqli_real_escape_string($db, $_POST['pNm']);
	$prod_size = mysqli_real_escape_string($db, $_POST['sz']);
	$prod_desc = mysqli_real_escape_string($db, $_POST['pDsc']);
	$prod_color1 = mysqli_real_escape_string($db, $_POST['cL1']);
	$prod_color2 = mysqli_real_escape_string($db, $_POST['cL2']);
	$prod_color3 = mysqli_real_escape_string($db, $_POST['cL3']);
	$prod_color4 = mysqli_real_escape_string($db, $_POST['cL4']);
	$prod_color5 = mysqli_real_escape_string($db, $_POST['cL5']);
	$prod_color6 = mysqli_real_escape_string($db, $_POST['cL6']);
	$prod_color7 = mysqli_real_escape_string($db, $_POST['cL7']);
	$prod_color8 = mysqli_real_escape_string($db, $_POST['cL8']);
	$prod_color9 = mysqli_real_escape_string($db, $_POST['cL9']);
	$prod_color10 = mysqli_real_escape_string($db, $_POST['cL10']);
	$prod_color11 = mysqli_real_escape_string($db, $_POST['cL11']);
	$prod_color12 = mysqli_real_escape_string($db, $_POST['cL12']);
	$prod_color13 = mysqli_real_escape_string($db, $_POST['cL13']);
	$prod_color14 = mysqli_real_escape_string($db, $_POST['cL14']);
	$prod_color15 = mysqli_real_escape_string($db, $_POST['cL15']);
	$prod_color16 = mysqli_real_escape_string($db, $_POST['cL16']);
	$prod_color17 = mysqli_real_escape_string($db, $_POST['cL17']);
	$prod_color18 = mysqli_real_escape_string($db, $_POST['cL18']);
	$prod_color19 = mysqli_real_escape_string($db, $_POST['cL19']);
	$prod_color20 = mysqli_real_escape_string($db, $_POST['cL20']);
	$prod_color21 = mysqli_real_escape_string($db, $_POST['cL21']);
	$prod_color22 = mysqli_real_escape_string($db, $_POST['cL22']);
	$prod_color23 = mysqli_real_escape_string($db, $_POST['cL23']);
	$prod_color24 = mysqli_real_escape_string($db, $_POST['cL24']);
	$prod_color25 = mysqli_real_escape_string($db, $_POST['cL25']);
	$prod_color26 = mysqli_real_escape_string($db, $_POST['cL26']);
	$prod_color27 = mysqli_real_escape_string($db, $_POST['cL27']);
	$prod_color28 = mysqli_real_escape_string($db, $_POST['cL28']);
	$prod_color29 = mysqli_real_escape_string($db, $_POST['cL29']);
	$prod_color30 = mysqli_real_escape_string($db, $_POST['cL30']);
	$b_i_price1 = mysqli_real_escape_string($db, $_POST['biP1']);
	$b_i_price2 = mysqli_real_escape_string($db, $_POST['biP2']);
	$b_i_price3 = mysqli_real_escape_string($db, $_POST['biP3']);
	$b_i_price4 = mysqli_real_escape_string($db, $_POST['biP4']);
	$b_i_price5 = mysqli_real_escape_string($db, $_POST['biP5']);
	$b_i_price6 = mysqli_real_escape_string($db, $_POST['biP6']);
	$b_i_price7 = mysqli_real_escape_string($db, $_POST['biP7']);
	$f_b_i_price1 = mysqli_real_escape_string($db, $_POST['fbiP1']);
	$f_b_i_price2 = mysqli_real_escape_string($db, $_POST['fbiP2']);
	$f_b_i_price3 = mysqli_real_escape_string($db, $_POST['fbiP3']);
	$f_b_i_price4 = mysqli_real_escape_string($db, $_POST['fbiP4']);
	$f_b_i_price5 = mysqli_real_escape_string($db, $_POST['fbiP5']);
	$f_b_i_price6 = mysqli_real_escape_string($db, $_POST['fbiP6']);
	$f_b_i_price7 = mysqli_real_escape_string($db, $_POST['fbiP7']);
	$b_b_i_price1 = mysqli_real_escape_string($db, $_POST['bbiP1']);
	$b_b_i_price2 = mysqli_real_escape_string($db, $_POST['bbiP2']);
	$b_b_i_price3 = mysqli_real_escape_string($db, $_POST['bbiP3']);
	$b_b_i_price4 = mysqli_real_escape_string($db, $_POST['bbiP4']);
	$b_b_i_price5 = mysqli_real_escape_string($db, $_POST['bbiP5']);
	$b_b_i_price6 = mysqli_real_escape_string($db, $_POST['bbiP6']);
	$b_b_i_price7 = mysqli_real_escape_string($db, $_POST['bbiP7']);
	$f_b_b_i_price1 = mysqli_real_escape_string($db, $_POST['fbbiP1']);
	$f_b_b_i_price2 = mysqli_real_escape_string($db, $_POST['fbbiP2']);
	$f_b_b_i_price3 = mysqli_real_escape_string($db, $_POST['fbbiP3']);
	$f_b_b_i_price4 = mysqli_real_escape_string($db, $_POST['fbbiP4']);
	$f_b_b_i_price5 = mysqli_real_escape_string($db, $_POST['fbbiP5']);
	$f_b_b_i_price6 = mysqli_real_escape_string($db, $_POST['fbbiP6']);
	$f_b_b_i_price7 = mysqli_real_escape_string($db, $_POST['fbbiP7']);


	$query = "INSERT INTO `custom_tee`(`id`, `prod_image`, `color_image`, `prod_name`, `prod_size`, `prod_desc`, `b_s_price`, `b_m_price`, `b_l_price`, `b_xl_price`, `b_xxl_price`, `b_3x_price`, `b_4x_price`, `fb_s_price`, `fb_m_price`, `fb_l_price`, `fb_xl_price`, `fb_xxl_price`, `fb_3x_price`, `fb_4x_price`, `bb_s_price`, `bb_m_price`, `bb_l_price`, `bb_xl_price`, `bb_xxl_price`, `bb_3x_price`, `bb_4x_price`, `fbb_s_price`, `fbb_m_price`, `fbb_l_price`, `fbb_xl_price`, `fbb_xxl_price`, `fbb_3x_price`, `fbb_4x_price`, `color1`, `color2`, `color3`, `color4`, `color5`, `color6`, `color7`, `color8`, `color9`, `color10`, `color11`, `color12`, `color13`, `color14`, `color15`, `color16`, `color17`, `color18`, `color19`, `color20`, `color21`, `color22`, `color23`, `color24`, `color25`, `color26`, `color27`, `color28`, `color29`, `color30`) 
		VALUES ('$pid', '$prod_image', '$color_image', '$prod_name', '$prod_size', '$prod_desc', '$b_i_price1', '$b_i_price2', '$b_i_price3', '$b_i_price4', '$b_i_price5', '$b_i_price6', '$b_i_price7', '$f_b_i_price1', '$f_b_i_price2', '$f_b_i_price3', '$f_b_i_price4', '$f_b_i_price5', '$f_b_i_price6', '$f_b_i_price7', '$b_b_i_price1', '$b_b_i_price2', '$b_b_i_price3', '$b_b_i_price4', '$b_b_i_price5', '$b_b_i_price6', '$b_b_i_price7', '$f_b_b_i_price1', '$f_b_b_i_price2', '$f_b_b_i_price3', '$f_b_b_i_price4', '$f_b_b_i_price5', '$f_b_b_i_price6', '$f_b_b_i_price7', '$prod_color1', '$prod_color2', '$prod_color3', '$prod_color4', '$prod_color5', '$prod_color6', '$prod_color7', '$prod_color8', '$prod_color9', '$prod_color10', '$prod_color11', '$prod_color12', '$prod_color13', '$prod_color14', '$prod_color15', '$prod_color16', '$prod_color17', '$prod_color18', '$prod_color19', '$prod_color20', '$prod_color21', '$prod_color22', '$prod_color23', '$prod_color24', '$prod_color25', '$prod_color26', '$prod_color27', '$prod_color28', '$prod_color29', '$prod_color30')";

		$sizeQuery = "INSERT INTO `custom_tee_size`(`id`, `prod_image`, `color_image`, `prod_name`, `prod_size`, `prod_desc`, `b_s_price`, `b_m_price`, `b_l_price`, `b_xl_price`, `b_xxl_price`) 
		VALUES ('$pid', '$prod_image', '$color_image', '$prod_name', '$prod_size', '$prod_desc', '$b_i_price1', '$b_i_price2', '$b_i_price3', '$b_i_price4')";
	$result = mysqli_query($db, $query);
	if ($result) {
		$result2 = mysqli_query($db, $sizeQuery);
		$pid = $pid + 1;
		$idquery2 = "UPDATE `product_id` SET `pid`= $pid";
			$idresults2 = mysqli_query($db,$idquery2);
		echo "Uploaded Successfully";
		header("Location:custom-tee-admin.php");
	}
	else {
		echo "Failed to Upload";

		exit();
	}
}	


$page_title = "CUSTOM TEE ADMIN";
$page_descr = "Lobby Mall";
$page_keywords = "Lobby, Lobbymall, mall";

include("include/header.php");
include("include/sidebar.php");

?>


<!DOCTYPE html>
<html lang = "en-US">
<head>
<title>CUSTOM TEE ADMIN</title>
<!-- CSS links -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
<!-- END - CSS links -->

</head>

<style type="text/css">
	form{
		background-color: rgb(29, 104, 43);
	}

	.cnt {
		display: flex;
		align-items: center;
		justify-content: center;
		width: 100%;
		height: 100%;
		background-color: rgba(29, 104, 43, 0.7);
	}

	.card {
		width: 100%;
		background-color: rgba(255,255, 255, 0.2);
		align-items: center;
	}

	.card-header {
		width: 80%;
		margin: 40px 0px;
		background-color: rgba(255, 255, 255, 0.3);
		border: 2px dashed green;
	}
</style>


<body>
<form action="custom-tee-admin.php" method="POST" enctype="multipart/form-data">
	<div class="container cnt">
	<div class="card">
		<div class="text-white"><?php echo $pid ?></div>
		<div class="card-header">
			<!-- <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script> -->
    <script type="text/javascript">
        function readURL(id,input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(id).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
	<div class="form-row">
		<div>
			<img src='#' style="width: 250px;height:300px;" id="blah">
		</div>
		<div class="col-sm-5">
			<br>
			<input type="file" name="prodImage" onchange="readURL('#blah',this);" accept="image/x-png,image/gif,image/jpeg" required>
		</div>
	</div>
	<div class="form-row">
		<div>
			<img src='#' style="width: 100%;max-height:100px;" id="blah2">
		</div>
		<div class="col-sm-5">
			<br>
			<input type="file" name="prodColor" onchange="readURL('#blah2',this);" accept="image/x-png,image/gif,image/jpeg" required>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-sm-6">
			<label for="pNm">Product Name</label>
			<input type="text" class="form-control" name="pNm" id="pNm" required>
		</div>

		<div class="form-group col-sm-6">
			<label for="sz">Size</label>
			<input type="text" class="form-control" name="sz" id="sz" required>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-12">
			<label for="pDsc">Product Description</label>
			<textarea class="form-control" name="pDsc" id="pDsc" rows="3" contenteditable></textarea>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group">
			<p>Colors</p>
			<div class="row">
				<div class="col-2">
					<label for="cL1">Color 1</label>
					<input type="text" class="form-control" name="cL1" id="cL1">
				</div>
				<div class="col-2">
					<label for="cL2">Color 2</label>
					<input type="text" class="form-control" name="cL2" id="cL2">
				</div>
				<div class="col-2">
					<label for="cL3">Color 3</label>
					<input type="text" class="form-control" name="cL3" id="cL3">
				</div>
				<div class="col-2">
					<label for="cL4">Color 4</label>
					<input type="text" class="form-control" name="cL4" id="cL4">
				</div>
				<div class="col-2">
					<label for="cL5">Color 5</label>
					<input type="text" class="form-control" name="cL5" id="cL5">
				</div>
				<div class="col-2">
					<label for="cL6">Color 6</label>
					<input type="text" class="form-control" name="cL6" id="cL6">
				</div>
				<div class="container mb-4"></div>
				<div class="col-2">
					<label for="cL7">Color 7</label>
					<input type="text" class="form-control" name="cL7" id="cL7">
				</div>
				<div class="col-2">
					<label for="cL8">Color 8</label>
					<input type="text" class="form-control" name="cL8" id="cL8">
				</div>
				<div class="col-2">
					<label for="cL9">Color 9</label>
					<input type="text" class="form-control" name="cL9" id="cL9">
				</div>
				<div class="col-2">
					<label for="cL10">Color 10</label>
					<input type="text" class="form-control" name="cL10" id="cL10">
				</div>
				<div class="col-2">
					<label for="cL11">Color 11</label>
					<input type="text" class="form-control" name="cL11" id="cL11">
				</div>
				<div class="col-2">
					<label for="cL12">Color 12</label>
					<input type="text" class="form-control" name="cL12" id="cL12">
				</div>
				<div class="container mb-4"></div>
				<div class="col-2">
					<label for="cL13">Color 13</label>
					<input type="text" class="form-control" name="cL13" id="cL13">
				</div>
				<div class="col-2">
					<label for="cL14">Color 14</label>
					<input type="text" class="form-control" name="cL14" id="cL14">
				</div>
				<div class="col-2">
					<label for="cL15">Color 15</label>
					<input type="text" class="form-control" name="cL15" id="cL15">
				</div>
				<div class="col-2">
					<label for="cL16">Color 16</label>
					<input type="text" class="form-control" name="cL16" id="cL16">
				</div>
				<div class="col-2">
					<label for="cL17">Color 17</label>
					<input type="text" class="form-control" name="cL17" id="cL17">
				</div>
				<div class="col-2">
					<label for="cL18">Color 18</label>
					<input type="text" class="form-control" name="cL18" id="cL18">
				</div>
				<div class="container mb-4"></div>
				<div class="col-2">
					<label for="cL19">Color 19</label>
					<input type="text" class="form-control" name="cL19" id="cL19">
				</div>
				<div class="col-2">
					<label for="cL20">Color 20</label>
					<input type="text" class="form-control" name="cL20" id="cL20">
				</div>
				<div class="col-2">
					<label for="cL21">Color 21</label>
					<input type="text" class="form-control" name="cL21" id="cL21">
				</div>
				<div class="col-2">
					<label for="cL22">Color 22</label>
					<input type="text" class="form-control" name="cL22" id="cL22">
				</div>
				<div class="col-2">
					<label for="cL23">Color 23</label>
					<input type="text" class="form-control" name="cL23" id="cL23">
				</div>
				<div class="col-2">
					<label for="cL24">Color 24</label>
					<input type="text" class="form-control" name="cL24" id="cL24">
				</div>
				<div class="container mb-4"></div>
				<div class="col-2">
					<label for="cL25">Color 25</label>
					<input type="text" class="form-control" name="cL25" id="cL25">
				</div>
				<div class="col-2">
					<label for="cL26">Color 26</label>
					<input type="text" class="form-control" name="cL26" id="cL26">
				</div>
				<div class="col-2">
					<label for="cL27">Color 27</label>
					<input type="text" class="form-control" name="cL27" id="cL27">
				</div>
				<div class="col-2">
					<label for="cL28">Color 28</label>
					<input type="text" class="form-control" name="cL28" id="cL28">
				</div>
				<div class="col-2">
					<label for="cL29">Color 29</label>
					<input type="text" class="form-control" name="cL29" id="cL29">
				</div>
				<div class="col-2">
					<label for="cL30">Color 30</label>
					<input type="text" class="form-control" name="cL30" id="cL30">
				</div>
			</div>
		</div>
		
		<p class="mt-5">PRICES</p>
			<div class="form-row mb-3">
				<div class="col-sm-2">Breast Imprints</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="biP1" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="biP2" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="biP3" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="biP4" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="biP5" id="" required>
				</div>
				<div class="col-sm-2 px-4"> </div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="biP6" id="">
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="biP7" id="">
				</div>
			</div>
			<div class="form-row mb-3">
				<div class="col-sm-2">Front Body Imprints</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="fbiP1" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="fbiP2" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="fbiP3" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="fbiP4" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="fbiP5" id="" required>
				</div>
				<div class="col-sm-2 px-4"> </div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="fbiP6" id="">
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="fbiP7" id="">
				</div>
			</div>
			<div class="form-row mb-3">
				<div class="col-sm-2">Breast and Back Imprints</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="bbiP1" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="bbiP2" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="bbiP3" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="bbiP4" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="bbiP5" id="" required>
				</div>
				<div class="col-sm-2 px-4"> </div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="bbiP6" id="">
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="bbiP7" id="">
				</div>
			</div>
			<div class="form-row mb-3">
				<div class="col-sm-2">Front Body and Back Imprints</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="fbbiP1" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="fbbiP2" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="fbbiP3" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="fbbiP4" id="" required>
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="fbbiP5" id="" required>
				</div>
				<div class="col-sm-2 px-4"> </div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="fbbiP6" id="">
				</div>
				<div class="col-sm-2 px-4">
					<input type="text" class="form-control" name="fbbiP7" id="">
				</div>
			</div>
		</div>
	
	</div> <!-- \.Card Header -->
<div class="container">
<div class="row bg-danger text-center d-block">
	<div class="col-12 bg-primary"><button type="submit" class="btn btn-success btn-block" name="prodUpload">UPLOAD</button>
</div>
</div>
</div>
</div> <!-- \.Card -->

</div> <!-- \.Container -->

</form>


<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- END SCRIPTS -->

<!-- For the Textarea -->
<script type="text/javascript">
	$("#pDsc").focus(function() {
    if(document.getElementById('pDsc').value === ''){
        document.getElementById('pDsc').value +='• ';
	}
});
$("#pDsc").keyup(function(event){
	var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        document.getElementById('pDsc').value +='• ';
	}
	var txtval = document.getElementById('pDsc').value;
	if(txtval.substr(txtval.length - 1) == '\n'){
		document.getElementById('pDsc').value = txtval.substring(0,txtval.length - 1);
	}
});
</script> <!-- .\For the Textarea -->


	<?php
	$prodquery = "SELECT * FROM custom_tee";
			$prodresults = mysqli_query($db, $prodquery);
			// $row = mysqli_fetch_array($prodresults);
			// $pid = $row['id'];
			// $prodName = $row['prod_name'];
?>

<table class="table table-striped text-white table-bordered table-responsive mt-5">	
	<tr></tr>

	<?php
while($val = mysqli_fetch_array($prodresults)) { 
	$imageData = base64_encode($val['prod_image']);
    // Format the image SRC:  data:{mime};base64,{data};
    $src = 'data:image/jpeg;base64,'.$imageData;
	?>
 	<tr>
 <td><?php echo $val['id']; ?></td>
 <td style="width: 100px; height: 100px;"><img src="<?php echo $src; ?>" style="width: 100%;"></td>
 <td><?php echo $val['prod_name']; ?></td>
 </tr>

<?php } ?>

</table>

</body>