<?php

// connect to database
    require_once('custom-banner-db.php');

if(isset($_POST['prod_descr']))
{
    echo "Better !";
    $cart_array[] = array(
        'prod_id'      =>  $_POST["hidden_prod_id"],
        'prod_name'    =>  $_POST["hidden_prod_name"],
        'prod_amount'    =>  $_POST["qtyAmount"],
        'b_imprint'      =>   (!empty($_POST['b_i'])) ? array($_POST["b_i"],$_POST["biq"],$_POST["price"]) : null,
        'fb_imprint'      =>   (!empty($_POST['fb_i'])) ? array($_POST["fb_i"],$_POST["fbiq"],$_POST["fb_price"]) : null,
        'bb_imprint'      =>   (!empty($_POST['bb_i'])) ? array($_POST["bb_i"],$_POST["bbiq"],$_POST["bb_price"]) : null,
        'fbb_imprint'      =>   (!empty($_POST['fbb_i'])) ? array($_POST["fbb_i"],$_POST["fbbiq"],$_POST["fbb_price"]) : null
    );

    // $cart_data[] = $cart_array;
    // $item_data = json_encode($cart_data);
    // setcookie('tee_cart', $item_data, time()+(86400 * 30));
    if(!empty($_POST['b_i'])) {
// Counting number of checked checkboxes.
        $bi_count = count($_POST['b_i']);
        // echo "You have selected ".$bi_count." Breast Imprints(s): <br/>";
}
    if(!empty($_POST['fb_i'])) {
        $fbi_count = count($_POST['fb_i']);
        // echo "You have selected ".$fbi_count." Front Body Imprints(s): <br/>";
    }

    if(!empty($_POST['bb_i'])) {
        $bbi_count = count($_POST['bb_i']);
        // echo "You have selected ".$bbi_count." Back and Breast Imprints(s): <br/>";
    }
    if(!empty($_POST['fbb_i'])) {
        $fbbi_count = count($_POST['fbb_i']);
        // echo "You have selected ".$fbbi_count." Front Body and Breast Imprints(s): <br/>";
}

$shape = $_POST['hidden_shape'];
foreach ($cart_array as $key => $qty) {
    $qty = explode('|', $qty['prod_amount']);
    $qty = $qty[1];
}
$shippingTotal = mysqli_query($db, "SELECT * FROM `shipping` WHERE type='$shape'");
$shippingTotal = mysqli_fetch_assoc($shippingTotal);
$shippingTotal = $shippingTotal[$qty];



}

else {
    header('location: custom-tee.php');
}

$page_title = "CUSTOM PRODUCT DESCRIPTION";
$page_descr = "Lobby Mall";
$page_keywords = "Lobby, Lobbymall, mall";

include("include/header.php");
include("include/sidebar.php");

 ?>

 <div class="container bg-white w-100 p-0 pb-5">
    <form action="custom-tee-prod-checkout.php" method="POST" class="" target="_blank">
        <div class="table-responsive">
    <table class="table table-striped text-white table-bordered table-dark">
        <tr>
            <th>S/N</th>
            <th style="width: 30%;">Description</th>
            <th>Quantity</th>
            <th>Amount</th>
        </tr>
    <?php
    setlocale(LC_MONETARY, 'en_US');
    $OverallTotal = 0;
    $OverallDozen = 0;
    $bi_sum = 0;
    $fbi_sum = 0;
    $bbi_sum = 0;
    $fbbi_sum = 0;

    if (isset($_POST['upld'])) {
      echo "<input type='hidden' name='upld' value=''";
  }

        // if (isset($_COOKIE["tee_cart"])) {
        //  $cookie_data = stripslashes($_COOKIE['tee_cart']);
        //  $cart_data = json_decode($cookie_data, true);
            foreach ($cart_array as $key => $value) {  ?> 
                <?php 
                $qtyAmount = explode('|', $value['prod_amount']);
            ?>
            <tr>
            <td><?php echo $value['prod_id']; ?></td>
            <td><?php echo $value['prod_name']; ?></td>
            <td><?php echo $qtyAmount[1]; ?></td>
            <td><?php echo '$'.number_format($qtyAmount[0], 2); ?></td>
        </tr>
        <?php 
        $OverallTotal = $qtyAmount[0];

    } ?>
    </table>
</div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
            <p>
                Order is subject to 7 - 14 days turnaround upon order and, for RUSH ORDER, Email <a href='mailto:customs@lobbymall.com'>customs@lobbymall.com</a>
            </p>    
            <?php if (strpos($_POST["hidden_prod_image"], '15.5X27.5') == true) {
                echo "<p>
                For all other comment or changes, submit a HELP DESK ticket to <a href='mailto:customerservice@lobbymall.com'>customerservice@lobbymall.com</a> ONLY.
            </p>";
            }
            else
                echo "<p>
                For all other comments/changes or if you desire a bigger custom Banner size up to 144 feet length, submit a HELP DESK ticket to <a href='mailto:customerservice@lobbymall.com'>customerservice@lobbymall.com</a> ONLY.
            </p>";
            ?>
            <p>
                WE ARE NOT RESPONSIBLE FOR INCORRECT PROCESSING DUE TO YOUR ERROR. IF YOU DID NOT PROVIDE BIBLE VERSE ON YOUR ORDER, THE VERSE ON THE ITEM WOULD BE PRINTED ACCORDINGLY.
            </p>
                <div class="form-group">
                    <label for="comm">Comment:</label>
                    <textarea id="comm" class="form-control" rows="6" cols="10"></textarea>
                </div>
        </div>
<?php
    setlocale(LC_MONETARY, 'en_US');
    $twoColors15  = 0.00;
    $threeColors20  = 0.00;
    $fourColors25  = 0.00;
    $fivePdis2 = 0.00;
    $tenPdis3  = 0.00;
    $salesT  = 0.00;
    $coupon  = 0.00;
    
    
    if (isset($_POST['cl'])) {
        $cl = $_POST['cl'];

switch ($cl) {
    case "1":
        break;
    case "2":
        $twoColors15 = 0.15 * $OverallTotal;
        break;
    case "3":
        $threeColors20 = 0.2 * $OverallTotal;
        break;
    case "4":
        $fourColors25 = 0.25 * $OverallTotal;
        break;
}
    }


    $allSum = $OverallTotal + $twoColors15 + $threeColors20 + $fourColors25 + $shippingTotal + $salesT + $coupon;
        if ($OverallDozen == 2) {
        $fivePdis2  = 0.05 * $allSum;

    } elseif ($OverallDozen >= 3) {
        $tenPdis3  = 0.1 * $allSum;
    }
    $allSub = $fivePdis2 + $tenPdis3;
    $OverallOrderTotal  = $allSum - $allSub;

?>
            <div class="col-md-6">

                <p>Coupon Code <span style="float:right;">
                        <!-- <form class="form-inline">
                          <div class="form-group">
                            <input class="rounded" type="text" id="coupon" class="form-control mx-sm-3">
                            <button class="btn btn-outline-success btn-sm rounded">Apply</button>
                          </div>
                        </form> -->
                        <!-- <div class="form-group">
      <label for="email">Total Price:</label>
      <input type="text" class="form-control" id="total_price" name="total_price" value="1000.00">
    </div> -->
                        <div class="input-group mb-3 rounded">
                          <input type="text" class="form-control" id="coupon_code" placeholder="Coupon" aria-label="Coupon" aria-describedby="">
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary rounded-right" id="apply" type="button">Apply</button>
                            <button class="btn btn-outline-secondary" id="edit" type="button" style="display:none;">Edit</button>
                          </div>
                        </div>
                        <b><span id="message" style="color:green;"></span></b>
                    </span></p>
                    <script>
    $("#apply").click(function(e){
         e.preventDefault();
        if($('#coupon_code').val()!=''){
            $.ajax({
                        type: "POST",
                        url: "coupon_process.php",
                        data:{
                            coupon_code: $('#coupon_code').val(),
                            total: <?php echo $OverallTotal; ?>,
                            shipping: <?php echo $shippingTotal; ?>
                        },
                        success: function(dataResult){
                            var dataResult = JSON.parse(dataResult);
                            if(dataResult.statusCode==200){
                                // var discount = <?php echo $OverallTotal; ?> * dataResult.total;
                                // var after_apply = "<?php echo $OverallTotal; ?>" - discount;
                                var total = dataResult.total;
                                var overall = dataResult.Overall;
                                var postOverall = dataResult.PostOverall;
                                $('#total').html(total);
                                $('#Overall').html(overall);
                                $('#PostOverall').val(postOverall);
                                $('#apply').hide();
                                $('#edit').show();
                                $('#message').html("Promocode applied successfully !");
                                
                            }
                            else if(dataResult.statusCode==201){
                                $('#message').html("Invalid promocode !");
                            }
                        }
            });
        }
        else{
            $('#message').html("Promocode can not be blank .Enter a Valid Promocode !");
        }
    });
    $("#edit").click(function(){
        $('#coupon_code').val("");
        $('#apply').show();
        $('#edit').hide();
        location.reload();
    });
</script>
                <div class="card">
                  <div class="card-header bg-secondary text-center text-white">Order Total</div>
                  <div class="card-body">
                      <p>Product Total <span id="total" style="float:right;"><?php echo '$'.number_format($OverallTotal, 2); ?></span></p>
                      <p>Shipping & Handling Total <span id="ShippingTotal" style="float:right;"><?php echo '$'.number_format($shippingTotal, 2); ?></span></p>
                      <p>Sales Tax <span style="float:right;"><?php echo '$'.number_format($salesT, 2); ?></span></p>
                      <p>Coupon <span style="float:right;"><?php echo '$'.number_format($coupon, 2); ?></span></p>
                  </div> 
                  <div class="card-footer bg-dark text-center text-white">
                    <!--<p>Overall Order Total <span id="Overall" style="float:right;"><?php echo number_format($OverallOrderTotal, 2); ?></span></p>-->
                     <p>Overall Order Total <span id="Overall" style="float:right;"><?php echo money_format('%i',  $OverallOrderTotal); ?></span></p> 
                    <input type="submit" name="place_order" class="btn btn-sm btn-secondary" value="Place Order">
                    <input type="hidden" name="OverallOrderTotal" id="PostOverall" class="" value="<?php echo number_format($OverallOrderTotal, 2, '.', ''); ?>">

                </div>
                </div>
            </div>
        </div>
        
    </div>



 </form>
 </div>

 <?php

include("include/footer.php");

?>
