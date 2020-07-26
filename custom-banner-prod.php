<?php

// connect to database
	include ('custom-banner-db.php');

if(isset($_REQUEST['id']) & !empty($_REQUEST['id']))
{
    $id = $_GET['id'];
}
else {
	$id='0';
	echo "You have to Select a Product";
header( "refresh:1;url=custom-tee.php" );
exit();
}

                //Display Product Details
        $query = "SELECT * FROM custom_banner WHERE id=$id";
			$result = mysqli_query($db, $query);
			
			$query2 = "SELECT * FROM imprint";
			$result2 = mysqli_query($db, $query2);

			$querySize = "SELECT * FROM custom_tee_size WHERE id=$id";
			$sizeResult = mysqli_query($db, $querySize);

	$row = mysqli_fetch_assoc($result);
	$size = mysqli_fetch_assoc($sizeResult);


	// $imageData = base64_encode($row['prod_image']);
 //    // Format the image SRC:  data:{mime};base64,{data};
 //    $src = 'data:image/jpeg;base64,'.$imageData;

    $img_path="images/custom_banner/";
    $src = $img_path.$row['prod_image'];

 
$page_title = "CUSTOM BANNER DESCRIPTION";
$page_descr = "Christ ChristMercyland sophisticated customized banner with custom Logos";
$page_keywords = "Christ, Mercyland, Lobby, Lobbymall, mall, banner, custom banner";

include("include/header.php");
include("include/sidebar.php");
include("include/top_section.php");
?>


<style type="text/css">

	.bg-white [class*="col-"]{
		
	}

	.num {
		width: 25px;
	}

	.fs12 {
		font-size: 12px;
	}
	.fs13 {
		font-size: 13px;
	}
	.fs14 {
		font-size: 14px;
	}
	.fs16 {
		font-size: 16px;
	}
	.qt td:not(:first-child) {
		text-align: center!important;
	}
	.qt .form-check-input {
		margin-top: 2;
		margin-left: -30px;
		/* size the check boxes */
		width: 20px; 
		height: 20px;
    /*just use vertical align*/
    	vertical-align: middle;
}
</style>

<!--  -->
<form action="custom-banner-prod-descr.php" method="POST" id="prod">
<div class="container-fluid p-0 bg-white"> <!-- Main Container Fluid -->

<div class="row no-gutters "> <!-- Main Row -->

	<div class="col-lg-3 col-md-12"> <!-- Product Image Column -->
	<img src="<?php echo $src; ?>" style="width:100%" class="zoomm" id="zoomm">
	</div> <!-- END Product Image Column -->

	<div class="col-lg-7 col-md-12 p-2"> <!-- Product Description Column -->

		<div> <?php echo $row['prod_name']; ?> </div> <br><br>
		<div class="">
			<?php echo $row['prod_size']; ?>
		</div><br>
		<div class="prod_desc">
			<?php echo nl2br($row['prod_desc']); ?>
		</div><br><br><br><br>

		<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="upld" name="upld">
    <label class="custom-control-label" for="upld">I would upload file/logo</label>
  </div>

  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="bverse">
    <label class="custom-control-label" for="bverse">I would provide my Bible Verse</label>
  </div>

  <div>
  	<div class="verse p-1" id="verse" style="display: none; font-size: 12px;">
  		<div class="form-group">
                    <label for="verseB">Bible Quote/Verse:</label>
                    <textarea id="verseB" class="form-control"></textarea>
                </div>
  </div>
  </div>

				<div class="form-group mt-5">
<?php
			  $shape = mysqli_query($db, "SELECT `shape` FROM `custom_banner` WHERE id=$id");
			  $shape = mysqli_fetch_assoc($shape);
			  $query = "SELECT `1dozen`, `2dozens`, `3dozens`, `4dozens`, `5dozens`, `6dozens`, `7dozens`, `8dozens`, `9dozens`, `10dozens`, `11dozens`, `12dozens`, `13dozens`, `14dozens`, `15dozens`, `16dozens`, `17dozens`, `18dozens`, `19dozens`, `20dozens`, `21dozens`, `22dozens`, `23dozens`, `24dozens`, `24dozens`, `25dozens` FROM `custom_banner_price` WHERE `shape`='{$shape['shape']}'";
			  $queryType = "SELECT `type` FROM `custom_banner` WHERE id=$id";
			$result = mysqli_query($db, $query);
			$check = mysqli_query($db, $queryType);
			$check = mysqli_fetch_assoc($check);
			if ($check['type'] == 'dozen') {
			echo "<label for='selectColor'>Choose Quantity (DOZEN)</label>".
			"<select class='dozen custom-select custom-select-md mb-3' name='qtyAmount'>".
			  "<option selected>Select</option>";
			while ($price = mysqli_fetch_array($result, MYSQLI_NUM)) {
				$price = array_filter($price);
				$length = count($price);
				for ($i = 0; $i < $length; $i++) {
					if ($price[$i] > 0.00) {
					$j = $i + 1;
					$t = $price[$i];
					echo "<option value='$t|$j'>$j Dozen</option>";
					}
}
			}
				echo "</select>";
			} else {
				echo "<label for='selectColor'>Choose Quantity (PIECE)</label>".
			"<select class='dozen custom-select custom-select-md mb-3' name='qtyAmount'>".
			  "<option selected>Select</option>";
			while ($price = mysqli_fetch_array($result, MYSQLI_NUM)) {
				$price = array_filter($price);
				$length = count($price);
				for ($i = 0; $i < $length; $i++) {
					if ($price[$i] > 0.00) {
					$j = $i + 1;
					$t = $j * $price[$i];
					echo "<option value='$t|$j'>$j</option>";
					}
}
			}
				echo "</select>";
			}

			
?>



			<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("select.dozen").change(function(){
        var qty = $(this).children("option:selected").val();
        var qty = qty.split("|");
        // var price = Number(qty) * 2;
        // alert("You have selected the country - " + qty);
        var str1 = "TOTAL = "
        var total = str1.concat(price);
        document.getElementById("price").innerHTML = "$"+qty[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
    });
});
</script>

<p id="price"></p>
	</div>
			</form>

	</div> <!-- END Product Description Column -->

	<!-- <div class="col-lg-2 col-md-12 fs12"> --> <!-- Product Style Column -->		
		
		<!-- </div> --> <!-- END Product Style Column -->

		<div class="container-fluid"> <!-- Product Price Container Fluid -->
		<div class="row" style="display: flex; justify-content: center;"> <!-- Product Price Row -->
			<div class="col-8"> <!-- Product Price Main Column -->
			
			
			</div> <!-- END Product Price Main Column -->
		</div> <!-- END Product Price Row -->
	</div> <!-- Product Price Container Fluid -->

	<input type="hidden" name="hidden_prod_id" value="<?php echo $row["id"]; ?>">
	<input type="hidden" name="hidden_prod_name" value="<?php echo $row["prod_name"]; ?>">
	<input type="hidden" name="hidden_shape" value="<?php echo $shape['shape']; ?>">
	<input type="hidden" name="hidden_prod_image" value="<?php echo $src ?>">
	<input type="hidden" name="hidden_prod_image" value="<?php echo $src ?>">
	<input type="hidden" name="size[]" value="<?php echo $size["size1"]; ?>">
	<input type="hidden" name="size[]" value="<?php echo $size["size2"]; ?>">
	<input type="hidden" name="size[]" value="<?php echo $size["size3"]; ?>">
	<input type="hidden" name="size[]" value="<?php echo $size["size4"]; ?>">
	<input type="hidden" name="size[]" value="<?php echo $size["size5"]; ?>">
	<input type="hidden" name="size[]" value="<?php echo $size["size6"]; ?>">
	<input type="hidden" name="size[]" value="<?php echo $size["size7"]; ?>">
	


	<!-- <input type="hidden" name="size[]" value="S">
	<input type="hidden" name="size[]" value="M">
	<input type="hidden" name="size[]" value="L">
	<input type="hidden" name="size[]" value="XL">
	<input type="hidden" name="size[]" value="XXL"> -->
	<input type="hidden" name="h_bs_price" value="<?php echo $row['b_s_price'] ?>">
	<input type="hidden" name="h_bs_price" value="<?php echo $row['b_s_price'] ?>">
	<input type="hidden" name="h_bs_price" value="<?php echo $row['b_s_price'] ?>">
	<input type="hidden" name="h_bs_price" value="<?php echo $row['b_s_price'] ?>">
	<input type="hidden" name="h_bs_price" value="<?php echo $row['b_s_price'] ?>">
	<input type="hidden" name="h_bs_price" value="<?php echo $row['b_s_price'] ?>">
	<input type="hidden" name="h_bs_price" value="<?php echo $row['b_s_price'] ?>">
	<input type="hidden" name="h_bs_price" value="<?php echo $row['b_s_price'] ?>">
	<input type="hidden" name="h_bs_price" value="<?php echo $row['b_s_price'] ?>">
	<input type="hidden" name="h_bs_price" value="<?php echo $row['b_s_price'] ?>">


	</div> <!-- END Main Row -->

		<div class="text-right my-2">
			<button type="submit" class="btn btn-primary mr-auto" name="prod_descr">NEXT</button>
		</div>

</div> <!-- END Main Container Fluid -->
</form>

<script type="text/javascript">
	document.getElementById('prod').reset();
	var x = document.getElementById('prod');
x[0].submit(); // Form submission
x[0].reset(); // Form Reset
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
    $('#bverse').change(function() {
        if ($(this).prop('checked')) {
            $('#verse').css('display','block');
        }
        else {
            $('#verse').css('display','none');
        }
    });
});
</script>


<?php include("include/footer.php"); ?>

?>

<script>
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);
  /*create magnifier glass:*/
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");
  /*insert magnifier glass:*/
  img.parentElement.insertBefore(glass, img);
  /*set background properties for the magnifier glass:*/
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  /*execute a function when someone moves the magnifier glass over the image:*/
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);
  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /*prevent the magnifier glass from being positioned outside the image:*/
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /*set the position of the magnifier glass:*/
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /*display what the magnifier glass "sees":*/
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>

<style>
* {box-sizing: border-box;}
/* .zoomm {
  position:relative;
} */
.img-magnifier-glass {
  position: absolute;
  border: 3px solid #000;
  border-radius: 50%;
  cursor: none;
  /*Set the size of the magnifier glass:*/
  width: 100px;
  height: 100px;
}
</style>

<script>
/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/
magnify("zoomm", 2.5);
</script>