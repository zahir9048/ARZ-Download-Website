<?php
require("../../LoginPage/connection.php");
if (!isset($_SESSION['user_id'])) {
  header('location: ../../LoginPage/logout.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Rocket League V1.59</title>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="png" href="../../meta data/logo3.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <link rel="stylesheet" href="../../Main Pages/bootstrap.min.css">
</head>

<body>
  <div class="page">
    <header class="header1">
      <div id="logocontainer">
        <a href="../../meta data/logo3.png" target="_blank"><img id="logo" src="../../meta data/logo3.png"
            alt="main logo"></a>
      </div>
      <nav class="header-nav">
        <ul>
          <li>
            <a href="../../Main Pages/homepage.php" class="bn3637 bn36">Home</a>
          </li>
          <li>
            <a href="../../Main Pages/softwares.php" id="softwares-btn" class="bn3637 bn36">Softwares</a>
          </li>
          <li>

            <a href="../../Main Pages/games.php" id="" class="bn3637 bn36">Games</a>
          </li>
          <li>
            <a href="../../Main Pages/movies.php" class="bn3637 bn36">Movies</a>
          </li>
        </ul>
      </nav>
      <div class="dropdown">
        <a href="../../Main Pages/clear_acc_scr.php" id="btn-account" class="bn3637 bn36 dropbtn">My Account</a>
        <div class="dropdown-content main-menu clicky-menu no-js">
          <a href="../../Main Pages/clear_acc_scr.php">Account Settings</a>
          <a href="../../LoginPage/logout.php">Log Out</a>
        </div>
      </div>
    </header>
    <main class="main-content">
      <section class="index-banner">
        <div class="container-1">
          <div class="navbar-container">
            <div class="navigation">
              <a href="../../Main Pages/games.php">
                <h4>Games</h4>
              </a>
              <p> &nbsp; <strong> -> </strong> &nbsp;</p>
              <a href="product.php">
                <h4>Rocket League</h4>
              </a>
            </div>
          </div>
          <div class="hr">
            <hr>
          </div>
          <div class="menubar">
            <nav class="menu" id="menu1">
              <h2><!-- Title for menuset 1 -->Trending Softwares </h2>
              <ul>
                <!-- List of links under menuset 1 -->
                <li><a href="../../Softwares/Pycharm/product.php" title="Link">PyCharm Pro 2021</a></li>
                <li><a href="../../Softwares/Unity/product.php" title="Link">Unity Pro 2019 + Addons + Support
                    Files</a>
                </li>
                <li><a href="../../Softwares/Netbeans/product.php" title="Link">NetBeans</a></li>
                <li class="notimp">
                  <!-- notimp class is applied to remove this link from the tablet and phone views --><a
                    href="../../Softwares/Intellij2022/product.php" title="Link">IntelliJ IDEA</a>
                </li>
              </ul>
            </nav>
            <nav class="menu" id="menu2">
              <h2><!-- Title for menuset 1 -->Trending Games </h2>
              <ul>
                <!-- List of links under menuset 1 -->
                <li><a href="../../Games/Fortnite/product.php" title="Link">Fortnite</a></li>
                <li><a href="../../Games/Valorant/product.php" title="Link">Valorant</a></li>
                <li><a href="../../Games/NFSRivals/product.php" title="Link">Need For Speed Rivals</a></li>
                <li class="notimp">
                  <!-- notimp class is applied to remove this link from the tablet and phone views --><a
                    href="../../Games/CSGO/product.php" title="Link">CS: Global Offensive</a>
                </li>
              </ul>
            </nav>
            <nav class="menu" id="menu3">
              <h2><!-- Title for menuset 1 -->Trending Movies </h2>
              <ul>
                <!-- List of links under menuset 1 -->
                <li><a href="../../Movies/JohnWick1/product.php" title="Link">John Wick 2014</a></li>
                <li><a href="../../Movies/Avatar/product.php" title="Link">Avatar 2010</a></li>
                <li><a href="../../Movies/ManOfSteel/product.php" title="Link">Man Of Steel</a></li>
                <li class="notimp">
                  <!-- notimp class is applied to remove this link from the tablet and phone views --><a
                    href="../../Movies/Transporter1/product.php" title="Link">The Transporter 2002</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="hr">
            <hr>
          </div>
          <div class="advertisement-container">
            <div class="advertisement-1">
              <a target="_blank" href="https://fastendtechnologies.dreamhosters.com/"><img class="ad-img-1"
                  src="../../meta data/advertisement.jpg" alt="advertisement" width="100" height="100"></a>
            </div>
            <div class="advertisement-2">
              <a target="_blank" href="https://getintopc.com/donate/"><img class="ad-img-2"
                  src="../../meta data/donate.png" alt="advertisement" width="100" height="100"></a>

            </div>
          </div>
        </div>
        <div class="container-2">
          <div class="product-h1">
            <h1>Rocket League v 1.59 Free Download</h1>
          </div>

          <p style="margin: 0 !important;">Rocket League v 1.59 Free Download PC Game setup in single direct link for
            Windows. It is an amazing action, adventure and role playing game.</p>
          <h2>Rocket League v 1.59 PC Game 2015 Overview</h2>
          <p>Soccer meets driving once again in the long-awaited, physics-based sequel to the beloved arena classic,
            Supersonic Acrobatic Rocket-Powered Battle-Cars!</p>
          <div class="product-img">
            <img src="RL1.jpg" alt="office" style="width: 50%; height: 100%;">
          </div>

          <p>A futuristic Sports-Action game, Rocket League®, equips players with booster-rigged vehicles that can be
            crashed into balls for incredible goals or epic
            saves across multiple, highly-detailed arenas. Using an advanced physics system to simulate realistic
            interactions, Rocket League® relies on mass and momentum
            to give players a complete sense of intuitive control in this unbelievable, high-octane re-imagining of
            association football.</p>
          <div class="product-img">
            <img src="RL2.jpg" alt="cod" style="width: 60%; height: 90%;">
          </div>
          <h2>Features of Rocket League v 1.59</h2>
          <p>Following are the main features of Rocket League v 1.59 that you will be able to experience after the first
            install on your Operating System.</p>
          <ul>
            <li>Season Mode that allows players to enjoy a full single-player experience</li>
            <li>Extensive Battle-Car customizations with more than 10 billion possible combinations</li>
            <li>Unlockable items and vehicles, stat tracking, leaderboards, and more</li>
            <li>Addictive 8-player online action with a variety of different team sizes and configurations</li>
            <li>Amazing 2-, 3-, and 4-player splitscreen mode that can be played locally or taken online against other
              splitscreen players</li>
            <li>Broadcast-quality replays that allow you to fast forward, rewind, or view the action from anywhere in
              the arena</li>
            <li>Competitive cross-platform gameplay with PlayStation®4, Xbox One, and Nintendo Switch users</li>
          </ul>
          <h2>DLC</h2>
          <ul>
            <li> Monstercat Vol. 5;</li>
            <li> McLaren 570S Car Pack;</li>
            <li> Monstercat Vol. 4;</li>
            <li> Hot Wheels® Triple Threat DLC Pack;</li>
            <li> X Monstercat Vol. 3;</li>
            <li> Jurassic World™ Car Pack;</li>
            <li> X Monstercat Vol. 2;</li>
            <li> DC Super Heroes DLC Pack;</li>
            <li> Fast & Furious™ ’99 Nissan® Skyline GT-R R34;</li>
            <li> Fast & Furious™ ’70 Dodge® Charger R/T;</li>
            <li> NBA Flag Pack;</li>
            <li> Marauder;</li>
            <li> Masamune;</li>
            <li> Esper;</li>
            <li> Aftershock;</li>
            <li> Hot Wheels® Bone Shaker™;</li>
            <li> X Monstercat Vol. 1;</li>
            <li> The Fate of the Furious™ Ice Charger;</li>
            <li> Hot Wheels® Twin Mill™ III;</li>
            <li> Triton;</li>
            <li> Vulcan;</li>
            <li> Proteus;</li>
            <li> Batman v Superman: Dawn of Justice Car Pack;</li>
            <li> Chaos Run DLC Pack;</li>
            <li> Back to the Future™ Car Pack;</li>
            <li> Revenge of the Battle-Cars DLC Pack;</li>
            <li> Supersonic Fury DLC Pack</li>
          </ul>
          <h2>Technical Specifications of This Release.</h2>
          <ul>
            <li>Game Version : V 1.59 + All DLCs</li>
            <li>Interface Language: English</li>
            <li>MD5SUM : b758c0525a124b3ca7d556deafb40e01</li>
          </ul>
          <div class="product-img">
            <img src="RL3.jpg" alt="cod" style="width: 60%; height: 90%;">
          </div>
          <h2>System Requirements of Rocket League v 1.59</h2>
          <p>Before you start Rocket League v 1.59 Free Download make sure your PC meets minimum system requirements.
          </p>
          <ul>
            <li>Operating System: Windows 7/8/8.1/10</li>
            <li>CPU: 2.4 GHz Dual core</li>
            <li>Graphics: NVIDIA GTX 260 or ATI 4850</li>
            <li>RAM: 2GB</li>
            <li>Setup Size: 4.1GB</li>
            <li>Hard Disk Space: 6GB</li>
          </ul>
          <div class="product-img">
            <img src="RL4.jpg" alt="office" style="width: 60%;height: 90%;">
          </div>
          <h2>Rocket League v 1.59 Free Download</h2>
          <p>Click on the below button to start Rocket League v 1.59. It is full and free complete game. Just download
            and
            start playing it. We have provided direct link full setup of the game.</p>
          <div class="download-button-container">
            <a href="download.php?file=RocketLeague" target="_blank" <button> <input type="button" name="button"
                value="Download for free" class="DownloadButton" button></a>
          </div>

          <div style="margin: 1.5rem 0 1rem 0 !important;">
            <strong>
              <p>Here is the video of how to install this game after downloading:</p>
            </strong>
          </div>

          <div class="tutorial-video-container">
            <video width="620" height="350" controls>
              <source src="tutorial.mp4" type="video/mp4">
            </video>
          </div>

        </div>
      </section>

    </main>
    <footer class="footer1">
      <div class="footer-links">
        <ul class="footer-main-links">
          <li><a href="../../Main Pages/homepage.php">Home</a></li>
          <li><a href="../../Main Pages/softwares.php">Softwares</a></li>
          <li><a href="../../Main Pages/games.php">Games</a></li>
          <li><a href="../../Main Pages/movies.php">Movies</a></li>
        </ul>

        <ul class="footer-main-cases">
        </ul>
      </div>


      <div class="footer-social">
        <div class="footer-h2">
          <h2>Visit Us</h2>
        </div>
        <div class="footer-sm">
          <div class="img-container">
            <a href="#">
              <img class="yt-img" src="../../meta data/youtube.png" alt="Youtube icon">
            </a>
          </div>
          <div class="img-container">
            <a href="#">
              <img class="tw-img" src="../../meta data/twitter.png" alt="Twitter icon">
            </a>
          </div>
          <div class="img-container">
            <a href="#">
              <img class="fb-img" src="../../meta data/fb.png" alt="Facebook icon">
            </a>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <span>© 2023 ARZ All rights reserved.</span>
        <span><a href="">Terms of Use</a></span>
        <span><a href="">Privacy and Cookies</a></span>
        <span><a href="">Contact us</a></span>
      </div>
    </footer>
  </div>
</body>

</html>