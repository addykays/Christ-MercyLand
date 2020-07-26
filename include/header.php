<?php
  session_start();
?>
<!DOCTYPE html>
<html lang = "en-US">
<head>
<title><?php echo $page_title; ?></title>
<meta name="google-site-verification" content="z5FnhVj9y0ge-nmaP0nC7MAkwQzx72QcyvK2U7wLHDM" />
<meta name="msvalidate.01" content="6362D138C68FF1107EC47CA005D376CB" />
<meta name="yandex-verification" content="2b8de09536375ade" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset = "UTF-8">
<meta name="description" content="<?php echo $page_descr; ?>">
<meta name="keywords" content="<?php echo $page_keywords; ?>">
<meta name="author" content="Kareem Adekunle (addykays)">
<link rel="author" href="https://plus.google.com/+addykays">
<link rel="shortcut icon" type="image/jpg" href="images/fav.jpg">

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@iam_addykays" />
<meta name="twitter:creator" content="@iam_addykays" />
<meta name="twitter:image" content="<?php echo $OG_image; ?>" />
<meta name="twitter:image:alt" content="<?php echo $OG_image_alt; ?>">

<meta property="og:site_name" content="Christ MercyLand Ministry" />
<meta property="og:url" content="<?php echo $current_url; ?>" />
<meta property="og:type" content="<?php echo $OG_type; ?>" />
<meta property="og:title" content="<?php echo $page_title; ?>" />
<meta property="og:description" content="<?php echo $OG_descr; ?>" />
<meta property="og:image" content="<?php echo $OG_image; ?>" />
<meta property="og:image:alt" content="<?php echo $OG_image_alt; ?>" />

<!-- CSS links -->
<!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- END of Bootstrap CSS -->

<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha256-4hqlsNP9KM6+2eA8VUT0kk4RsMRTeS7QGHIM+MZ5sLY=" crossorigin="anonymous" />

<!-- END - CSS links -->


<script>
$(function() {
  $('#bookmark-this').click(function() {
    if (window.sidebar && window.sidebar.addPanel) { // Mozilla Firefox Bookmark
      window.sidebar.addPanel(document.title, window.location.href, '');
    } else if (window.external && ('AddFavorite' in window.external)) { // IE Favorite
      window.external.AddFavorite(location.href, document.title);
    } else if (window.opera && window.print) { // Opera Hotlist
      this.title = document.title;
      return true;
    } else { // webkit - safari/chrome
      alert('Press ' + (navigator.userAgent.toLowerCase().indexOf('mac') != -1 ? 'Command/Cmd' : 'CTRL') + ' + D to bookmark this page.');
    }
  });
});
</script>

<style>
#bookmark-this {
  padding: 5px 10px;
  background-color: #f0ad4e;
  border: 1px solid #eea236;
  border-radius: 4px;
  font-size: 12px;
  color: #fff;
  text-decoration: none;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, .2);
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
}

#bookmark-this:hover {
  background-color: #ec971f;
  border: 1px solid #d58512;
  text-decoration: none;
}

#bookmark-this:active {
  background-color: #ec971f;
  border: 1px solid #d58512;
  -webkit-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.2);
}

/* Dropdown Menu */
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu>a:after {
  content: "\f0da";
  float: right;
  border: none;
  font-family: 'FontAwesome';
}

.dropdown-submenu>.dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: 0px;
  margin-left: 0px;
}

</style>
</head>
<body>

<!-- ================= SCRIPTS ================= ____addykays -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/fa8c878027.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha256-NXRS8qVcmZ3dOv3LziwznUHPegFhPZ1F/4inU7uC8h0=" crossorigin="anonymous"></script>

<!-- ================= END SCRIPTS ================= ____addykays -->

  <header>

    <div id="top">
      <div class="CMcontainer">
          <div class="websiteHead">
            <div>
              <img src="images/Website_NewHead.jpg">
            </div>

            <div class="top-cat" style="background-color: rgba(88, 143, 232, 0.8);">
              <span class="dropdown" style="border: 0; background-color: transparent; padding: 0;">
              <span><a href="https://christmercylands.org/custom-banner.php" id="dropdownMenuButton" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Custom Prints &amp; Banners</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="custom-banner.php?cat=organization">Organization Banners</a>
                <a class="dropdown-item" href="custom-banner.php?cat=church">Church Banners</a>
              </div>
              </span>
            </span>
              
              <span><a href="https://christmercylands.org/store/product-category/love/">Love Prints &amp; Banner</a></span>
              <span><a href="https://christmercylands.org/store/product-category/faith/">Faith Prints &amp; Banner</a></span>
              <span><a href="https://christmercylands.org/store/product-category/inspiration/">Inspiration Prints &amp; Banner</a></span>
              <span><a href="https://christmercylands.org/store/product-category/appreciation/">Appreciation Prints &amp; Banner</a></span>
              <span><a href="https://christmercylands.org/store/product-category/strength/">Strength Prints &amp; Banner</a></span>
              <span><a href="https://christmercylands.org/store/product-category/encouragement/">Encouragement Prints &amp; Banner</a></span>
              <span><a href="https://christmercylands.org/store/product-category/tshirts/">Religious T.Shirts</a></span>
              <span><a href="https://christmercylands.org/store/product-category/spiritual/">Spiritual Items</a></span>
              <span><a href="https://christmercylands.org/store/product-category/beauty_soaps/">Spiritual Beauty Soaps</a></span>
              <span><a href="https://christmercylands.org/store/product-category/">Other Spiritual Items</a></span>
              <span style="border: 0; background-color: transparent; font-size: 18px; color: black; font-family: sans-serif;">718 564-8619</span>
            </div>

          </div>
      </div>
    </div>
  
  <div class="d-block" id="stickyheader">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark p-2 px-3">
      <!-- <a class="navbar-brand" href="/" style="font-size: 14px;"><i class="fa fa-home fa-spin"></i>HOME</a> -->
      <!-- <a href="javascript:void(0)" class="navbar-brand button-collapse small" id="sideBarToggle"><i class="fas fa-bars"></i> OPEN SIDEBAR</a> -->
      <small class="button-collapse btn btn-sm btn-outline-primary d-lg-none" id="sideBarToggle"><i class="fa fa-bars"></i> SIDEBAR</small>
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse ml-auto" id="navbarTogglerDemo02">
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/"><i class="fa fa-home fa-spin"></i>HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://christmercylands.org/store/" target="_blank">Store</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://christmercylands.org/store/cart/" target="_blank">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="login.php" id="log" target="_blank">Log in</a>
          </li>
          <li class="nav-item" id="trans">
            <a class="nav-link" id="google_translate_element"></a><script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
            }
            </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          </li>
        </ul>
      </div>
    </nav>

    <div class="progress-container">
      <div class="progress-bar" id="myBar"></div>
    </div>
    
  </div>

<?php  if (isset($_SESSION['email'])) : ?>
      <script type="text/javascript">
        var log = document.getElementById('log');
        log.innerHTML = 'Welcome <strong><?php echo $_SESSION['firstname']; ?></strong>';
    </script>
    <?php endif ?>

</header>

<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h4>
          <?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          ?>
        </h4>
      </div>
    <?php endif ?>


  <!-- Main Content -->
  <div class="CMcontainer" id="main" style="background-color: #2459d4; border-radius: .6rem; margin: 8px auto;"> <!-- CONTAINER -->

<!--     <div class="" style="background-color: rgba(200, 255, 0, 0.2);">   MY_CONTAINER -->