<?php require("header.php");?>

<section class="probootstrap-hero prohttp://localhost/probootstrap/frame/#featuresbootstrap-slant" style="background-image: url(img/shopbanner.jpg); background-position: center;">
  <div class="container">
    <div class="row intro-text">
      <div class="col-md-8 col-md-offset-2 text-center">
        <div class="probootstrap-subheading center">
          <p class="probootstrap-animate">WELCOME TO OUR STORE</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="probootstrap-section" data-section="animation">
  <div class="container" id="tabs">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="links isotopeFilter">
          <a class="tabLink">All</a>
          <a data-filter=".personal" class="tabLink Personal">Personal</a>
          <a data-filter=".professional" class="tabLink Professional">Professional</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-8">
        <div class="search">
          <input type="text" placeholder="Search">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8 isotopeContainer" style="padding-left: 0px;padding-right: 0px;">
        <div class="col-sm-6 card personal">
          <a href="checkout.php"> <img class="card-img-top imgSize" src="img/shopcard1.jpg" alt="Card image cap"></a>
          <div class="card-body cardTextSection">
            <div class="card-text">
              <a href="checkout.php"><h4 class="cardHead1">The Mystery of the Man Who Died Twice</h4></a>
              <a><img src="img/thumb.png" class="socialIcons cardIcon" style="width: 24px; margin-top: -6px; display: inline-block!important;"></a>
              <h4 class="cardHead1">69.99 GBP</h4>
              <!-- <a href="checkout.php" class="shopnow">SHOP NOW</a> -->
            </div>
          </div>
        </div>
        <div class="col-sm-6 card personal">
          <a href="checkout.php"> <img class="card-img-top imgSize" src="img/shopcard2.jpg" alt="Card image cap"></a>
          <div class="card-body cardTextSection">
            <div class="card-text">
              <a href="checkout.php"><h4 class="cardHead1">The Mystery of the Man Who Died Twice</h4></a>
              <a><img src="img/thumb.png" class="socialIcons cardIcon" style="width: 24px; margin-top: -6px; display: inline-block!important;"></a>
              <h4 class="cardHead1">69.99 GBP</h4>
              <!-- <a href="checkout.php" class="shopnow">SHOP NOW</a> -->
            </div>
          </div>
        </div>
        <div class="col-sm-6 card personal">
          <a href="checkout.php"> <img class="card-img-top imgSize" src="img/shopcard3.jpg" alt="Card image cap"></a>
          <div class="card-body cardTextSection">
            <div class="card-text">
              <a href="checkout.php"><h4 class="cardHead1">The Mystery of the Man Who Died Twice</h4></a>
              <a><img src="img/thumb.png" class="socialIcons cardIcon" style="width: 24px; margin-top: -6px; display: inline-block!important;"></a>
              <h4 class="cardHead1">69.99 GBP</h4>
              <!-- <a href="checkout.php" class="shopnow">SHOP NOW</a> -->
            </div>
          </div>
        </div>
        <div class="col-sm-6 card professional">
          <a href="checkout.php"> <img class="card-img-top imgSize" src="img/shopcard4.jpg" alt="Card image cap"></a>
          <div class="card-body cardTextSection">
            <div class="card-text">
              <a href="checkout.php"><h4 class="cardHead1">The Mystery of the Man Who Died Twice</h4></a>
              <a><img src="img/thumb.png" class="socialIcons cardIcon" style="width: 24px; margin-top: -6px; display: inline-block!important;"></a>
              <h4 class="cardHead1">69.99 GBP</h4>
              <!-- <a href="checkout.php" class="shopnow">SHOP NOW</a> -->
            </div>
          </div>
        </div>
        <div class="col-sm-6 card professional">
          <a href="checkout.php"> <img class="card-img-top imgSize" src="img/shopcard5.jpg" alt="Card image cap"></a>
          <div class="card-body cardTextSection">
            <div class="card-text">
              <a href="checkout.php"><h4 class="cardHead1">The Mystery of the Man Who Died Twice</h4></a>
              <a id="clicker" class="likebtn"><img src="img/thumb.png" class="socialIcons cardIcon"style="width: 24px; margin-top: -6px; display: inline-block!important;"></a>
              <span id="counter"></span> 
              <h4 class="cardHead1">69.99 GBP</h4>
              <!-- <a href="checkout.php" class="shopnow">SHOP NOW</a> -->
            </div>
          </div>
        </div>
        <div class="col-sm-6 card professional">
          <a href="checkout.php"> <img class="card-img-top imgSize" src="img/shopcard6.jpg" alt="Card image cap"></a>
          <div class="card-body cardTextSection">
            <div class="card-text">
              <a href="checkout.php"><h4 class="cardHead1">The Mystery of the Man Who Died Twice</h4></a>
              <a><img src="img/thumb.png" class="socialIcons cardIcon" style="width: 24px; margin-top: -6px; display: inline-block!important;"></a> <!-- onclick="clickCounter()" -->
              <p id="result" style=" position: absolute;top: 304px;right: -10px; color: #000; font-weight: 600;"></p>
              <h4 class="cardHead1">69.99 GBP</h4>
              <!-- <a href="checkout.php" class="shopnow">SHOP NOW</a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="sideBox">
        <div class="col-sm-4 sideBlock mb30 noselect" style="background-color: #f4f6fa;">
          <h1 class="sideHead title_bar accordionOm opened">Categories</h1> <!-- style="display: inline-block;" -->
          <!-- <div id="buttonClose">-</div> -->
          <div class="new" id="box">
            <form>
              <div class="form-group check noselect">
                <input type="checkbox" id="books">
                <label for="books">Books</label>
              </div>
              <div class="form-group check">
                <input type="checkbox" id="camera">
                <label for="camera">Camera</label>
              </div>
              <div class="form-group check" >
                <input type="checkbox"id="cards">
                <label for="cards">Cards</label>
              </div>
              <div class="form-group check">
                <input type="checkbox"id="headphone">
                <label for="headphone">Head Phones</label>
              </div>
              <div class="form-group check">
                <input type="checkbox" id="novelty">
                <label for="novelty">Novelty Items</label>
              </div>
              <div class="form-group check">
                <input type="checkbox" id="speakers">
                <label for="speakers">Speakers</label>
              </div>
              <div class="form-group check">
                <input type="checkbox" id="Bottle">
                <label for="Bottle">Water Bottle</label>
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-4 sideBlock" style="background-color: #f4f6fa;">
              <h1 class="sideHead" style="font-size: 32px;">Popular Items</h1>
              <div class="card-text">
              <p class="cardText">Personal</p>
              <h4 class="cardHead">P 06 - Manage Your Time</h4>
              <p class="cardText1" style="text-align: justify;line-height: 20px;font-size: 19px;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              </p>
            </div>
              <div class="play-pause-btn" style="display: inline-block; margin-bottom: 40px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 18 24" style="margin-top: 30px;">
                  <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0" class="play-pause-btn__icon"></path>
                </svg>
              </div>
              <p class="playEp">Play Episode</p>

              <div class="card-text">
              <p class="cardText">Personal</p>
              <h4 class="cardHead">P 06 - Manage Your Time</h4>
              <p class="cardText1" style="text-align: justify;line-height: 20px;font-size: 19px;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              </p>
            </div>
              <div class="play-pause-btn" style="display: inline-block; margin-bottom: 40px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 18 24" style="margin-top: 30px;">
                  <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0" class="play-pause-btn__icon"></path>
                </svg>
              </div>
              <p class="playEp">Play Episode</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="probootstrap-section probootstrap-cta pattern1" style="background-image: url(img/alone.jpg);"  data-section="shop" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 text-center secBorder">
        <h2 class="probootstrap-heading imgSecHead">SUBSCRIBE</h2>
        <div class="probootstrap-sub-heading " style="text-align: justify; padding: 100px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
// $("#buttonClose").click(function(){
//     if($(this).html() == "-"){
//         $(this).html("+");
//     }
//     else{
//         $(this).html("-");
//     }
//     $("#box").slideToggle('slow');
// });
$('.accordionOm').next().hide();
  $(".opened").next().show();
  $('.accordionOm').click(function()
  {
    if($(this).hasClass("opened") == true)
    {
      $(this).next().slideUp("slow");
      $(this).removeClass('opened');
    }
    else
    {
      $(".opened").next().slideUp("slow");
      $(".opened").removeClass("opened");
      $(this).addClass('opened');
      $(this).next().slideDown("slow");
    }
  });

//   $('#counter').html(0); // Set the initial value

// $('#clicker').click(function(){
//    var count =  Number($('#counter').html()); // Get the current value
//    $('#counter').html(count+1); // Add 1 to the counter
// });
</script>
<?php require("footer.php");?>