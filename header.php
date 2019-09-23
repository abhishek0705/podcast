<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <title>Nifty Conversations</title>
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <style type="text/css">
    * { box-sizing: border-box;}
    .tabContainer { width: 100%; background: rgba( 0,0,0,.1); padding: 15px; }
    .tabMenu { display: flex; width: 100%; background: rgba( 0,0,0,.1);}
    .tabMenu a { width: 50%; background: rgba( 0,0,0,1); color: #fff; padding: 15px; font-family: 'Arial', sans-sarif; text-transform: uppercase; text-align: center; cursor: pointer; }
    .tabMenu a.active { background: #fff; font-weight: 600; }
    .tabView { padding: 15px;}
    .tabView:not(:nth-child(2)) { display: none; }
  </style>
  
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="row">
            <div class="col-sm-1 mobile-header">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="index.php"><img src="img/logo-light.png" alt="logo" width="110"></a>
                <a class="navbar-brand logo-toggle" href="index.php"><img src="img/logo.png" alt="logo" width="110"></a>
              </div>
            </div>
            <div class="col-sm-11 mobile-sidebar">
              <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav ">
                  <li id="nav_podcast"><a href="index.php">PODCAST</a></li>
                  <li id="nav_about"><a href="about.php">ABOUT</a></li>
                  <li id="nav_quote"><a href="quote.php">QUOTE</a></li>
                  <li id="nav_animations"><a href="animation.php">ANIMATIONS</a></li>
                  <li id="nav_shop"><a href="shop.php">SHOP</a></li>
                  <li class="mobile-icon"><a href="https://www.youtube.com/channel/UCxTz88R3kAhxnSu4UCMlB6Q?view_as=subscriber"><i class="icon-youtube"></i></a></li>
                  <li class="mobile-icon"><a href="https://twitter.com/NiftyConvo"><i class="icon-twitter"></i></a></li>
                  <li class="mobile-icon"><a href="https://www.pinterest.co.uk/niftyconversations/"><i class="icon-pinterest22"></i></a></li>
                  <li class="mobile-icon"><a href="https://www.instagram.com/niftyconversations/"><i class="icon-instagram2"></i></a></li>
                  <li><a class="loginButton" data-toggle="modal" data-target="#myModal">LOGIN / SIGNUP</a></li>
                  <li><a href="buy.php"><img class="iconCart" src="img/cart.png"></a><!-- <a href="buy.php"><img class="darkCart" src="img/darkcart.png"></a> --></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="top: 20%;">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="crossbtn">x</span>
          </button>
          <div class="tabContainer">
            <div class="tabMenu">
              <a class="active">Login</a>
              <a>SignUp</a>
            </div>
            <div class="tabView" title="Login">
              <form class="form-group form-horizontal formPost">
                <p class="row">
                    <label class="beforeEmail">E-Mail</label>
                    <input id="signin-email" class="emailField" type="email" placeholder="E-mail">  
                </p>

                <p class="row">
                  <label class="beforePass">Password</label>
                    <input type="password" id="signin-password" class="passField" placeholder="Password"> 
                </p>

                  <p class="row rememberpass tickbox">
                    <input type="checkbox"id="remember">
                    <label for="remember">Remember me</label>
                  </p>
                  <!-- <input type="checkbox" id="remember-me" checked>
                  <label for="remember-me">Remember me</label> -->

                <p class="row subbtn">
                  <input class="btn btn-black" type="submit" value="Login">
                </p>
              </form>
            </div>
            <div class="tabView" title="SignUp">
              <form class="form-group form-horizontal formPost">
                <p class="row">
                  <label class="beforeUser">User Name</label>
                  <input class="emailField" id="signup-username" type="text" placeholder="Username">

                </p>

                <p class="row">
                  <label class="beforeMail">Email</label>
                  <input class="emailField2" id="signup-email" type="email" placeholder="E-mail">

                </p>

                <p class="row">
                  <label class="beforePassword">Password</label>
                  <input type="password" class="passField1" id="signup-password" type="text"  placeholder="Password">

                </p>

                <p class="row">
                  <label class="beforePassword1">Repeat Password</label>
                  <input type="password" class="passField2" id="repeat-password" type="text"  placeholder="Repeat Password">

                </p>
                <p class="row acceptTC rememberpass tickbox">
                  <input type="checkbox"id="tc">
                  <label for="tc">I agree to the <a href="#0">Terms & Conditions</a></label>
                </p>
                <!-- <p class="row acceptTC">
                  <input type="checkbox" id="accept-terms" class=" ">
                  <label for="accept-terms">I agree to the <a href="#0">Terms & Conditions</a></label>
                </p> -->

                <p class="row subbtn1">
                  <input class="btn btn-black" type="submit" value="Create account">
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.tabMenu a').click(function(){
        $('.tabMenu a').removeClass('active');
        $(this).addClass('active');
        $('.tabView').hide();
        console.log($(this).text());
        $('.tabContainer').find('.tabView[title="' + $(this).text() + '"]').fadeIn('swing');
      });
    });
  </script>
