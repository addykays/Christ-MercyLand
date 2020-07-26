<?php

// connect to database
  include ('custom-banner-db.php');

$page_title = "CHRIST MERCYLAND CUSTOM PRODUCTS";
$page_descr = "Christ, Mercyland Mall";
$page_keywords = "Christ, Mercyland, Lobby, Lobbymall, mall";

include("include/header.php");
include("include/sidebar.php");
include("include/top_section.php");
include("preload.html");

if(isset($_REQUEST['cat']) & !empty($_REQUEST['cat']))
{
    $prod_cat = $_GET['cat'];
}
else
{
  $prod_cat = '\'*\'';
}
?>


<!-- PRODUCTS -->

<div class="product">
<?php
        $img_path="images/custom_banner/";
        $query = "SELECT `id`, `prod_image`, `prod_name`, `prod_size` FROM `custom_banner` WHERE `prod_cat`='$prod_cat'";
      $result = mysqli_query($db, $query);
      while ($product = mysqli_fetch_assoc($result)) {
      $src = $img_path.$product['prod_image'];
        $product = array_filter($product);
          echo "<div class='product_cont'>
          <a href='https://christmercylands.org/custom-banner-prod.php?id=".$product['id']."'><img data-src=".$src." style='width:100%' alt='' data-effect='pulse'>
          <div class='overlay'>
          <div class='product_text'>".$product['prod_name']."</div>
          </div></a>
          </div>";
        }

?>
</div> <!-- End Product -->

  <!-- END PRODUCTS -->

<?php include("include/footer.php"); ?>