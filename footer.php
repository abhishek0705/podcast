<footer>
      <section class="probootstrap-section1 micBottom" data-section="about">
        <div class="container">
          <div class="row text-center ">
            <div class="col-sm-12 probootstrap-section-heading">
              <h2 class="text-black probootstrap-heading">Don't miss our weekly episodes.Subscribe now! </h2>
            </div>
          </div>
          
          <div class="row">
            <div class="col-sm-6 col-md-offset-2">
              <div class="probootstrap-pricing ">
                <input type="email" placeholder="Your E-mail Address" class="inEmail">
                <input type="submit" name="send" value="SEND" class="sendBtn">
              </div>
            </div>
          </div>
          <div class="row">
            <ul>
              <li class="footerIcons">
                <a href="https://www.youtube.com/channel/UCxTz88R3kAhxnSu4UCMlB6Q?view_as=subscriber"><i class="icon-youtube iconColor"></i></a>
                <a href="https://twitter.com/NiftyConvo"><i class="icon-twitter iconColor"></i></a>
                <a href="https://www.pinterest.co.uk/niftyconversations/"><i class="icon-pinterest22 iconColor"></i></a>
                <a href="https://www.instagram.com/niftyconversations/"><i class="icon-instagram2 iconColor"></i></a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-offset-3 text-center" style="margin-top: 100px; margin-bottom: 100px;">
              <span class="copyrights">&copy;2019 All Rights Reserved.Privacy Policy.</span>
            </div>
          </div>
        </div>
      </section>
    </footer>
    <script type="text/javascript" src="js/scripts.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    	<script type="text/javascript">
	$(document).ready(function() {
		var $container = $('.isotopeContainer');
		$container.isotope({
			//filter: '.personal',
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false
			}
		});
		$container.imagesLoaded().progress( function() {
			$container.isotope('layout');
		});
	 
		$('.isotopeFilter a').click(function(){
			$('.isotopeFilter a').removeClass('active');
			$('.isotopeFilter .current').removeClass('current');
			$(this).addClass('current');
			$(this).addClass('active');
	 
			var selector = $(this).attr('data-filter');
			$container.isotope({
				filter: selector,
				animationOptions:
				{
					duration: 750,
					easing: 'linear',
					queue: false
				}
			 });
			 return false;
		});

    $(".navbar-nav li a").each(function()
    {
      if(this.href==window.location.href)
      {
        $(this).addClass('active');
        //$(this).removeAttr('href');
      }
    });
    });


$('#askQ ul.samp li').click(function()
  {
    $('#askQ ul.samp li').removeClass('active');
    $("#askQ .tab-pane").hide();
    $(this).addClass('active');
    $('#askQ').find("div[tab-pane='" + $(this).attr('samp') + "']").fadeIn();     
  });
if (/Mobi/.test(navigator.userAgent)) {
  // if mobile device, use native pickers
  $(".date-time input").attr("type", "datetime-local");
  $(".date input").attr("type", "date");
  $(".time input").attr("type", "time");
} else {
  // if desktop device, use DateTimePicker
  
    $("#timepicker").datetimepicker({
    format: "LT",
    icons: {
      up: "fa fa-chevron-up",
      down: "fa fa-chevron-down"
    }
  });
}

</script>
  </body>
</html>