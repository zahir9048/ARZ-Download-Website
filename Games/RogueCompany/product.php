<?php
require("../../LoginPage/connection.php");
if (!isset($_SESSION['user_id'])) {
  header('location: ../../LoginPage/logout.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Rogue Company</title>
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
                <h4>Rogue Company</h4>
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
            <h1>Rogue Company Free Download</h1>
          </div>
          <p>Rogue Company Free Download PC Game setup in single direct link for Windows. It is an amazing action,
            adventure and role playing game.</p>
          <h2>Rogue Company Game Overview</h2>
          <p>Gear up and drop in to Rogue Company, the third-person tactical action shooter that puts the fate of the
            world in your hands.
            Defeat the enemy team in objective and action based game modes featuring exotic locales, thrilling gun-play,
            and explosions…lots of explosions.
            Assemble your team and play FREE now!</p>
          <div class="product-img">
            <img src="RC1.jpg" alt="office" style="width: 50%; height: 100%;">
          </div>

          <p>Skydive into high-stakes missions in hot spots around the globe. Take part in action-packed 4v4 and 6v6
            game modes; control the point in King of the Hill,
            fight to survive in Strikeout, or plant and defuse bombs in Demolition. Looking to be more competitive? Join
            the Ranked queue to show off your skills.
            Or relax in a rotating Limited-Time Mode.</p>
          <div class="product-img">
            <img src="RC2.jpg" alt="cod" style="width: 60%; height: 90%;">
          </div>
          <p>Drop in as one of the many agents of Rogue Company, each with their own unique set of skills, weapons, and
            gadgets! Fire explosive napalm with Switchblade’s
            Chaos Launcher, use Saint’s revive drone to save your teammates, or take the enemy team offline with a hack
            from Gl1tch. Which Rogue and play style will you choose?</p>
          <div class="product-img">
            <img src="RC3.jpg" alt="cod" style="width: 60%; height: 90%;">
          </div>
          <p>Throughout each match, you’ll earn cash to spend in the in-game store. Choose how you approach each round
            -- will you buy a katana to get up-and-personal with your foes,
            or the Tyr sniper rifle to take them down from afar? You can also unlock high-tech gadgets, ranging from
            Dima’s favorite explosives to a disorienting tear gas.</p>

          <div class="product-img">
            <img src="RC4.jpg" alt="cod" style="width: 60%; height: 90%;">
          </div>
          <p>Rogue Company is 100% Free to Play. All Rogues can be unlocked free and come with additional free rewards
            that you can collect just by playing the game. Even better:
            Rogue Company supports full cross-play and cross-progression, meaning you can play with your friends
            regardless of platform, and bring your unlocks wherever you game.</p>
          <h2>System Requirements of Rogue Company</h2>
          <p>Before you start Rogue Company Free Download make sure your PC meets minimum system requirements.</p>
          <ul>
            <li>Requires a 64-bit processor and operating system</li>
            <li>OS: Windows 7 64 bit</li>
            <li>Processor: Intel(R) Core i5-2320</li>
            <li>Memory: 4 GB RAM</li>
            <li>Graphics: NVIDIA GeForce GTX 555</li>
            <li>Storage: 20 GB available space</li>
          </ul>
          <div class="product-img">
            <img src="RL4.jpg" alt="office" style="width: 60%;height: 90%;">
          </div>
          <h2>Rogue Company Free Download</h2>
          <p>Click on the below button to start Rogue Company. It is full and free complete game. Just download and
            start playing it. We have provided direct link full setup of the game.</p>
          <div class="download-button-container">
            <a href="download.php?file=RogueCompany" target="_blank" <button> <input type="button" name="button"
                value="Download for free" class="DownloadButton" button></a>
          </div>

          <div style="margin: 1.5rem 0 1rem 0 !important;">
            <strong>
              <p>Here is the video of how to install this game after downloading:</p>
            </strong>
          </div>

          <div class="tutorial-video-container">
            <video width="620" height="350" controls>
              <source src="RCtutorial.mp4" type="video/mp4">
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