</div> <!-- End Content -->
  </div>
</div> <!-- END ROW -->


<!-- </div>  MY_CONTAINER -->
</div>  <!-- CONTAINER -->


<!-- Footer -->

<div class="Mfooter">
	<div class="row no-gutters">
		<div class="col-md-4">
			<ul>
				<li>
					<a href="about-us.html">ABOUT US</a>
				</li>
				<li>
					<a href="privacypolicy.php">PRIVACY POLICY</a>
				</li>
				<li>
					<a id="bookmark-this" rel="sidebar" href="" onclick="window.external.AddFavorite(location.href, document.title);" title="Bookmark This Page">BOOKMARK US</a>
				</li>
				<li>
					<a href="https://christmercylands.org/store/product-categories/">CATEGORY LIST</a>
				</li>
			</ul>
		</div>

		<div class="col-md-4">
			<ul class="">
			  <li style="padding: 5px;">WORSHIP</li>
			  <li style="padding: 5px;">REFLECTION</li>
			  <li style="padding: 5px;">COMMUNITY</li>
			</ul>
		</div>

		<div class="d-none d-md-block col-md-4">
			<img src="images/bottomImg.png" alt="Sitting_Woman" align="middle" id="sittingWoman"  style="z-index: 1; position: relative; width: 100px; margin-top: -50px;">
		</div>

	</div>
		

	<div class="row no-gutters text-center">
		<div class="col-md">
			<div>
				<p style="font-size: 20px; font-style:italic;">News and Trends from Christ MercyLand Ministry</p>
				<div><img src="images/Tips_Hints.jpg" width="80%"></div>
				<div><a href="#" style="text-decoration: underline;">Learn more &gt;</a></div>
			</div>
		</div>

		<div class="col-md text-center">
			<p style="margin: 3px;">Christ Mercylands delivers Religious messages and prayer straight into your in-box</p>
			<form id="subscribe" action="">
				<input type="email" name="" placeholder="Your Email" style="width: 50%;">
				<button type="submit" id="Msubscribe" style="background-color: red">Subscribe!</button>
			</form>
			<p class="text-center small">We will never share your email with a third party!</p>
		</div>
		
	</div>

</div>

<footer class="container-fluid bg-4 text-center">
  <p>COPYRIGHT &#169; 2018 <a href="/">christmercylands.org</a></p>
<span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=zowNkStJx3rcqU9lRdepktNE5IbzH5ffDAAkuJzpPhkhOqztlrzBhlDD2rZW"></script></span>
</footer> <!-- End Footer -->


<!-- Script for Top Scroll -->
<script type="text/javascript">
	window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script>
<!-- End of Script for Top Scroll -->

<!-- SUMO -->

<script async>(function(s,u,m,o,j,v){j=u.createElement(m);v=u.getElementsByTagName(m)[0];j.async=1;j.src=o;j.dataset.sumoSiteId='6664ed73e1a696d03e5c6b84f2b522ec66ef4a57596aedb780aae9181460161c';v.parentNode.insertBefore(j,v)})(window,document,'script','//load.sumo.com/');</script>
<!-- END SUMO -->



<!--Sticky Head Script-->
<script type="text/javascript">
  $(function(){
        var stickyHeaderTop = $('#stickyheader').offset().top;
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        $('#stickyheader').css({position: 'fixed', top: '0px', height: ''});
                        $('#sticky').css('display', 'block');
                } else {
                        $('#stickyheader').css({position: 'static', top: '0px', height: ''});
                        $('#sticky').css('display', 'none');
                }
        });
  });
</script>
<!-- End of Sticky Head Script -->

<script type="text/javascript">
    $('.headSlider').slick({
  dots: true,
  infinite: true,
  speed: 500,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  // variableWidth: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
      }
    }
  ]
});
</script>
</body>
</html>