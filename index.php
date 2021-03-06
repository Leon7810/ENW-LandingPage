<?php
  $con=mysqli_connect("localhost","extremen_analytics","8r@ms5Lu<MDW/bb>","extremen_analytics");
  // Check connection
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql="SELECT * FROM `player_analytics`";

  if ($result=mysqli_query($con,$sql)){
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    // printf("Result set has %d rows.\n",$rowcount);
    // Free result set
    mysqli_free_result($result);
  }

  mysqli_close($con);

  include 'vip/config.php';

  /**
   * Payments per 30 days
   */
  $onemonthago = time() - 2592000;
  $monthpaymentquery = "SELECT amount FROM vip_payment_logs WHERE time > $onemonthago";
  $totalmonthlypayments = 0;
  if ($result = $conn->query($monthpaymentquery)) {
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              $totalmonthlypayments = $totalmonthlypayments + $row['amount'];
          }
      }
  }
?>

<html lang="en">
  <head>
    <!-- 
    More Templates Visit ==> Free-Template.co
    -->
    <title>Landing | Extreme-Network</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Primary Meta Tags -->
    <title>Landing | Extreme-Network</title>
    <meta name="title" content="Landing | Extreme-Network">
    <meta name="description" content="The #1 UK Counter-Strike community going back as far as 2011. Register on our forums to take part in our daily conversations and games.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://extreme-network.net/">
    <meta property="og:title" content="Landing | Extreme-Network">
    <meta property="og:description" content="The #1 UK Counter-Strike community going back as far as 2011. Register on our forums to take part in our daily conversations and games.">
    <meta property="og:image" content="">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://extreme-network.net/">
    <meta property="twitter:title" content="Landing | Extreme-Network">
    <meta property="twitter:description" content="The #1 UK Counter-Strike community going back as far as 2011. Register on our forums to take part in our daily conversations and games.">
    <meta property="twitter:image" content="">
    
    <link rel="icon" href="images/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://kit.fontawesome.com/54ff0c56ce.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
      new Crate({
        server: '328594601948741632', // ??NW Discord
        channel: '329227746968600587' // #general
      })
    </script>
  </head>
  <style type="text/css">
  @media screen and (max-width: 800px) {
    .buttons {
      margin-bottom: 3%;
    }
  }
  @media screen and (max-width: 1300px) {
    .discord-widget {
      display: none;
    }
  }
  .progress {
    position:relative !important;
    height:70px !important;
  }
  .raised {
    position:absolute !important;
    left:10px !important;
    top:9px !important;
  }
  .goal {
    position:absolute !important;
    right:10px !important;
    top:9px !important;
  }
  </style>
  <body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">ENW</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-links" class="nav-link">Quick Links</a></li>
            <li class="nav-item"><a href="#section-benefits" class="nav-link">Benefits</a></li>
            <li class="nav-item"><a href="#section-pricing" class="nav-link">Pricing</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="ftco-cover ftco-slant" style="background-image: url(images/csgoterrorist.jpg);" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center ftco-vh-100">
          <div class="col-md-10">
            <h1 class="ftco-heading ftco-animate">Extreme-Network</h1>
            <h2 class="h5 ftco-subheading mb-5 ftco-animate" style="color:white">Your #1 UK CS:GO community!</h2>
            <div>
              <p><a href="forum" class="btn btn-primary ftco-animate buttons" style="margin-right:3%">Forums</a>
              <a href="sourcebans" class="btn btn-secondary ftco-animate buttons" style="border:none">Sourcebans</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    

    <section class="ftco-section bg-light  ftco-slant ftco-slant-white" id="section-links">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center mb-5 ftco-animate">
            <h2 class="text-uppercase ftco-uppercase">Quick Links</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <!-- <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="media d-block mb-4 text-center ftco-media p-md-5 p-4 ftco-animate">
              <div class="ftco-icon mb-3"><span class="display-4 text-muted"><i class="fas fa-ban"></i></span></div>
              <div class="media-body">
                <h5 class="mt-0">Sourcebans</h5>
                <p class="mb-5">Incase you were punished on any of our Counter Strike servers, you can watch your punishments on our customized Sourcebans page!&nbsp;</p>
                <p class="mb-0"><a href="sourcebans" class="btn btn-primary btn-sm">Click here</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="media d-block mb-4 text-center ftco-media p-md-5 p-4 ftco-animate">
              <div class="ftco-icon mb-3"><span class="display-4 text-muted"><i class="fas fa-crown"></i></span></div>
              <div class="media-body">
                <h5 class="mt-0">VIP</h5>
                <p class="mb-5">Our servers support for a major part on the generous community donations we receive! Support us by buying a <strong>VIP</strong> or <strong>Helper</strong> package!</p>
                <p class="mb-0"><a href="vip" class="btn btn-primary btn-sm">Click here</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="media d-block mb-4 text-center ftco-media p-md-5 p-4 ftco-animate">
              <div class="ftco-icon mb-3"><span class="display-4 text-muted"><i class="fas fa-database"></i></span></div>
              <div class="media-body">
                <h5 class="mt-0">GameME</h5>
                <p class="mb-5">To keep track of all our players and their stats we used the GameME ranking which comes with a webpage. View your statistics here!</p>
                <p class="mb-0"><a href="https://extreme-network.gameme.com" class="btn btn-primary btn-sm">Click here</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="ftco-section ftco-slant ftco-slant-light" id="section-benefits">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center ftco-animate">
            <h2 class="text-uppercase ftco-uppercase">VIP Benefits</h2>
            <div class="row justify-content-center mb-5">
              <div class="col-md-7">
                <p class="lead">To make the VIP packages attractive for our players, we have added the following.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel ftco-owl">
              
              <div class="item ftco-animate">
                <div class="media d-block text-left ftco-media p-md-5 p-4">
                  <div class="ftco-icon mb-3"><span class="display-4"><i class="fas fa-lock-open"></i></span></div>
                  <div class="media-body">
                    <h5 class="mt-0">Reserved Slot</h5>
                    <p>Right this way sir, no problem at all even if the server's full we'll make room just for you! Reserved slots will let you get straight into the action even when it's filled with plebs!</p>
                  </div>
                </div>
              </div>

              <div class="item ftco-animate">
                <div class="media d-block text-left ftco-media p-md-5 p-4">
                  <div class="ftco-icon mb-3"><span class="display-4"><i class="fas fa-music"></i></span></div>
                  <div class="media-body">
                    <h5 class="mt-0">Fortnite Emotes</h5>
                    <p>Emotes's are now available for VIP's in the !emotes command under the Emotes's menu. Dance!</p>
                  </div>
                </div>
              </div>

              <div class="item ftco-animate">
                <div class="media d-block text-left ftco-media p-md-5 p-4">
                  <div class="ftco-icon mb-3"><span class="display-4"><i class="fas fa-tag"></i></span></div>
                  <div class="media-body">
                    <h5 class="mt-0">Custom Tags</h5>
                    <p>Want everybody to know that you're the "Best Aimer in ENW" or "Biggest Weeaboo <?php echo date("Y"); ?>"? Do it in style with our custom tag system! You too can have a beautiful prefix to your name. All for free.</p>
                  </div>
                </div>
              </div>

              <div class="item ftco-animate">
                <div class="media d-block text-left ftco-media p-md-5 p-4">
                  <div class="ftco-icon mb-3"><span class="display-4"><i class="fas fa-headphones-alt"></i></span></div>
                  <div class="media-body">
                    <h5 class="mt-0">Custom VIP Joinsounds</h5>
                    <p>When VIP's join the server a short clip from a song will play, there are songs chosen by you with the !vipmenu command when playing on the servers, each month you can change your song if your vip subscription is still active.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light " id="section-pricing">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center ftco-animate">
            <h2 class="text-uppercase ftco-uppercase">Pricing</h2>
            <div class="row justify-content-center mb-5">
              <div class="col-md-7">
                <p class="lead">Our servers support for a major part on the generous community donations we receive! Support us by buying a <strong>VIP</strong> or <strong>Helper</strong> package!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-md bg-white p-5 m-2 text-center mb-2 ftco-animate">
            <div class="ftco-pricing">
              <h2>Standard VIP</h2>
              <p class="ftco-price-per text-center"><sup>??</sup><strong>2</strong><span>/mo</span></p>
              <ul class="list-unstyled mb-5">
                <li>Access to custom models on a server</li>
                <li>Access to our custom tag plugin</li>
                <li>Discord VIP tag</li>
                <li></li>
              </ul>
              <p><a href="vip" class="btn btn-secondary btn-sm">Get Started</a></p>
            </div>
          </div>
          <div class="col-md bg-white  ftco-pricing-popular p-5 m-2 text-center mb-2 ftco-animate">
            <span class="popular-text">Popular</span>
            <div class="ftco-pricing">
              <h2>Global VIP</h2>
              <p class="ftco-price-per text-center"><sup>??</sup><strong class="text-primary">5</strong><span>/mo</span></p>
              <ul class="list-unstyled mb-5">
                <li>Gives you VIP on <strong>all</strong> of our servers</li>
                <li>Access to custom models & tags</li>
                <li>Discord VIP tag</li>
              </ul>
              <p><a href="vip" class="btn btn-primary btn-sm">Get Started</a></p>
            </div>
          </div>
          <div class="w-100 clearfix d-xl-none"></div>
          <div class="col-md bg-white  ftco-pricing-popular p-5 m-2 text-center mb-2 ftco-animate">
            <span class="popular-text">Popular</span>
            <div class="ftco-pricing">
              <h2>Helper</h2>
              <p class="ftco-price-per text-center"><sup>??</sup><strong class="text-primary">10</strong><span>/mo</span></p>
              <ul class="list-unstyled mb-5">
                <li>Give you some moderation powers</li>
                <li>Includes normal VIP</li>
                <li>The helper tag on our Discord server</li>
              </ul>
              <p><a href="vip" class="btn btn-primary btn-sm">Get Started</a></p>
            </div>
          </div>
          <div class="col-md bg-white p-5 m-2 text-center mb-2 ftco-animate">
            <div class="ftco-pricing">
              <h2>Global Helper</h2>
              <p class="ftco-price-per text-center"><sup>??</sup><strong>15</strong><span>/mo</span></p>
              <ul class="list-unstyled mb-5">
                <li>Give you some moderation powers on <strong>all</strong> of our servers</li>
                <li>Includes normal VIP</li>
                <li>Discord Helper tag</li>
              </ul>
              <p><a href="vip" class="btn btn-secondary btn-sm">Get Started</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="discord-widget">
      <section class="ftco-section ftco-slant-white" id="section-links">
        <div class="container">
          <h2 class="text-uppercase ftco-uppercase">Our <a href="https://discord.io/extreme-network" style="font-weight:bold;color:#7289DA">Discord</a> server</h2>
          <widgetbot
            server="328594601948741632"
            channel="329227746968600587"
            width="1200"
            height="600"
            shard="https://e.widgetbot.io"
          ></widgetbot>
          <script src="https://cdn.jsdelivr.net/npm/@widgetbot/html-embed"></script>
        </div>
      </section>
    </div>
    <!-- END section -->

    <!-- <section class="ftco-section ftco-slant-white" id="section-links">
      <div class="container">
        <h2 class="text-uppercase ftco-uppercase">Our monthly donation bar!</h2>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $totalmonthlypayments ?>%"><?php echo $totalmonthlypayments ?>%</div>
          <p class="alert alert-success raised"><strong>Raised: ??<?php echo $totalmonthlypayments ?></strong></p>
          <p class="alert alert-success goal"><strong>Goal: ??100</strong></p>
        </div>
      </div>
    </section> -->
    
    <!-- <section class="ftco-section " id="section-facts">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center ftco-animate">
            <h2 class="text-uppercase ftco-uppercase">Fun Facts</h2>
            <div class="row justify-content-center mb-5">
              <div class="col-md-7">
                <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md ftco-animate">
            <div class="ftco-counter text-center">
              <span class="ftco-number""><? echo $rowcount ?></span>
              <span class="ftco-label">Connections made to our servers</span>
            </div>
          </div>
          <div class="col-md ftco-animate">
            <div class="ftco-counter text-center">
              <span class="ftco-number" data-number="1239">0</span>
              <span class="ftco-label">Registered VIP Users</span>
            </div>
          </div>
          <div class="col-md ftco-animate">
            <div class="ftco-counter text-center">
              <span class="ftco-number" data-number="124">0</span>
              <span class="ftco-label">Servers</span>
            </div>
          </div>    
        </div>
      </div>
      
    </section> -->
    
    <footer class="ftco-footer ftco-bg-dark">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8">
            <div class="row">
              <!-- <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Company</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">About</a></li>
                    <li><a href="#" class="py-2 d-block">Jobs</a></li>
                    <li><a href="#" class="py-2 d-block">Press</a></li>
                    <li><a href="#" class="py-2 d-block">News</a></li>
                  </ul>
                </div>
              </div> -->
              <div class="col-md">
                 <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Communities</h2>
                  <ul class="list-unstyled">
                    <li><a href="https://discord.gg/art7HC6" class="py-2 d-block">Discord</a></li>
                    <li><a href="https://steamcommunity.com/groups/enw-network" class="py-2 d-block">Steam Group</a></li>
                    <li><a href="forum" class="py-2 d-block">Forums</a></li>
                    <!-- <li><a href="#" class="py-2 d-block">Good Template</a></li> -->
                  </ul>
                </div>
              </div>
              <div class="col-md">
                 <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="vip" class="py-2 d-block">VIP</a></li>
                    <li><a href="sourcebans" class="py-2 d-block">Sourcebans</a></li>
                    <li><a href="https://extreme-network.gameme.com" class="py-2 d-block">GameME</a></li>
                    <li><a href="analytics" class="py-2 d-block">Analytics</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                <li><a href="https://discord.gg/art7HC6"><span class=""><i class="fab fa-discord"></i></span></a></li>
                <li><a href="vip"><span class=""><i class="fas fa-crown"></i></span></a></li>
                <li><a href="sourcebans"><span class=""><i class="fas fa-database"></i></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md text-left">
            <p>&copy; Exclusivity <?php echo date("Y"); ?>. All Rights Reserved.  Made with <span class="icon-heart text-danger"></span>  by <a href="https://free-template.co/">Free-Template.co</a> and edited by <a href="https://steamcommunity.com/id/LeonKong/">LeonKong</a> and <a href="https://steamcommunity.com/id/onebtw/">Zeroh</a>.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#4586ff"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>

    
  </body>
</html>