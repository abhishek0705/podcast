<?php require("header.php");?>
<section class="probootstrap-section aboutSection" data-section="animation">
  	<div class="container">
  		<div class="row">
  			
    		<div class="col-sm-6">
    			<div class="aboutcardimg"></div>
    		</div>
    		<div class="col-sm-6 pl60">
    			<h2 class="text-black checkHead">Super Bowl Recap, Patriots Defeat Rams 13-3 to Win 6th Super Bowl</h2>
    			<p class="checkPara text-black">Nam finibus feugiat feugiat. Integer sed rhoncus arcu. Donec ultrices a erat ac pharetra. Nunc iaculis viverra quam vitae rhoncus. Vestibulum ut diam felis. Fusce at ante neque. Quisque id ornare purus, vitae accumsan est. Sed condimentum tellus eget ex venenatis, sed tristique magna pulvinar. Pellentesque lectus est</p>
		        <div class="socialIcons socialSection" style="margin-top: -30px; margin-bottom: -20px;">
		          <a href="https://twitter.com/NiftyConvo"><i class="icon-twitter cardIcon2"></i></a>
		          <a href="#"><i class="icon-instagram2 cardIcon2"></i></a>
		          <a href="#"><i class="icon-pinterest22 cardIcon2"></i></a>
		      	</div>
    			<table class="tabledata">
				  <tr>
				    <td><label class="tablecontains"><p class="tableheadding">Item Price</p><input type="radio" name="radio"><span class="checkmark"></span></td>
				    <td>US $10</td>
				    <td>852 × 480</td>
				    <td>10MB</td>
				    <td>MOV</td>
				  </tr>
				  <tr>
				    <td><label class="tablecontains"><p class="tableheadding">Monthly Subscription</p><input type="radio" name="radio"><span class="checkmark"></span></td>
				    <td>US $10</td>
				    <td>852 × 480</td>
				    <td>10MB</td>
				    <td>MOV</td>
				  </tr>
				  <tr>
				    <td><label class="tablecontains"><p class="tableheadding">Annual Subscription</p><input type="radio" name="radio"><span class="checkmark"></span></td></td>
				    <td>US $10</td>
				    <td>852 × 480</td>
				    <td>10MB</td>
				    <td>MOV</td>
				  </tr>
				</table>
                <div class="row">
                <button class="btn btn-primary cartbtn" onclick="location.href='buy.php';">Purchase</button>
                </div>
    		</div>

  		</div>
  		<div class="col-sm-12">
  			<h1 class="text-center text-black popular">POPULAR ITEMS</h1>
  		</div>
    	<div class="row">
	      	<div class="col-sm-4 personal">
		        <img class="card-img-top" src="img/aboutcard1.jpg" alt="Card image cap">
		        <div class="card-body cardTextSection">
		          	<div class="card-text">
			            <p class="cardText text-black" style="opacity: 1">Personal</p>
			            <h4 class="cardHead">P 06 - Manage Your Time</h4>
			            <p class="cardText1">
			              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			              tempor incididunt ut labore et dolore magna aliqua.
			              consequat.
			            </p>
		          	</div>
			        <div class="ready-player-1">
			            <audio>
			              <source src="audio/example-1.mp3" type="audio/mpeg">
			            </audio>
			        </div>
		        </div>
	      	</div>
	      	<div class="col-sm-4 personal">
		        <img class="card-img-top" src="img/aboutcard2.jpg" alt="Card image cap">
		        <div class="card-body cardTextSection">
		          	<div class="card-text">
			            <p class="cardText text-black" style="opacity: 1">Personal</p>
			            <h4 class="cardHead">P 06 - Manage Your Time</h4>
			            <p class="cardText1">
			              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			              tempor incididunt ut labore et dolore magna aliqua.
			              consequat.
			            </p>
		          	</div>
		          	<div class="ready-player-2">
			            <audio>
			              <source src="audio/example-1.mp3" type="audio/mpeg">
			            </audio>
		         	</div>
		        </div>
	      	</div>
	      	<div class="col-sm-4 professional">
		        <img class="card-img-top" src="img/aboutcard2.jpg" alt="Card image cap">
		        <div class="card-body cardTextSection">
		          	<div class="card-text">
			            <p class="cardText text-black" style="opacity: 1">Personal</p>
			            <h4 class="cardHead">P 06 - Manage Your Time</h4>
			            <p class="cardText1">
			              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			              tempor incididunt ut labore et dolore magna aliqua.
			              consequat.
			            </p>
		          	</div>
		          	<div class="ready-player-3">
			            <audio>
			              <source src="audio/example-1.mp3" type="audio/mpeg">
			            </audio>
		          	</div>
		        </div>
	      	</div>
    	</div>
  	</div>
</section>
<section class="probootstrap-section probootstrap-cta pattern1" style="background-image: url(img/alone.jpg);"  data-section="shop" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 text-center secBorder">
        <h2 class="probootstrap-heading imgSecHead">FEEDBACK</h2>
        <div class="probootstrap-sub-heading" style="text-align: justify; padding: 100px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</div>
      </div>
    </div>
  </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new GreenAudioPlayer('.ready-player-1');
        new GreenAudioPlayer('.ready-player-2');
        new GreenAudioPlayer('.ready-player-3');
    });
 </script>
<?php require("footer.php");?>