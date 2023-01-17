<?php
require("../../LoginPage/connection.php");
if (!isset($_SESSION['user_id'])) {
  header('location: ../../LoginPage/logout.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Avengers</title>
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
              <a href="../../Main Pages/movies.php">
                <h4>Movies</h4>
              </a>
              <p> &nbsp; <strong> -> </strong> &nbsp;</p>
              <a href="product.php">
                <h4>Man Of Steel</h4>
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
            <h1>Man of Steel (2013)</h1>
          </div>

          <h2>Description</h2>
          <p>Superman flies back onto the big screen in this Warner Bros./Legendary Pictures production directed by Zack
            Snyder (Watchmen), produced by Christopher Nolan (The Dark Knight), and featuring a screenplay by David
            Goyer (Blade, The Dark Knight). As the planet of Krypton crumbles, General Zod (Michael Shannon) stages a
            coup as concerned leader Jor-El (Russell Crowe) and his wife send their infant son Kal-El to a distant world
            called Earth. While the young child travels through space with an object containing the DNA of his home
            planet, General Zod and his cohorts are sentenced to an eternity in a black-hole prison. Named Clark and
            raised by kindly farmers Jonathan (Kevin Costner) and Martha Kent (Diane Lane), young Kal-El lives in fear
            of what might happen should his neighbors learn about his extraterrestrial origins, eventually exploring the
            world in search of himself. In time, Clark's travels take him to a frozen tundra, where the American
            government has discovered an 18,000-year-old anomaly buried deep in the ice. Daily Planet reporter Lois Lane
            (Amy Adams) has just come to investigate when, after venturing out with her camera, she has a profound
            encounter with Clark. Convinced that his presence on Earth is proof of life on other planets, Lois finds her
            attempt to publish the story thwarted by her boss Perry White (Laurence Fishburne), who rejects it outright.
            Later, the airwaves are hijacked by General Zod, who threatens to obliterate the human race if they fail to
            hand over Kal-El within 24 hours. Forced to embrace his otherworldly origins for the first time in his life,
            Clark Kent dons the special suit from Krypton and prepares to take a stand against an enemy far more
            powerful than any he's ever known.</p>
          <h2>Actors</h2>
          <p>Henry Cavill , Amy Adams , Michael Shannon , Diane Lane , Russell Crowe , Antje Traue , Harry Lennix ,
            Richard Schiff , Christopher Meloni , Kevin Costner , Ayelet Zurer , Laurence Fishburne , Dylan Sprayberry ,
            Cooper Timberline , Richard Cetrone , Mackenzie Gray , Julian Richings , Mary Black , Samantha Jo , Michael
            Kelly , Rebecca Buller , Christina Wren , David Lewis , Tahmoh Penikett , Doug Abrahams , Brad Kelly , David
            Paetkau , Elizabeth Thai , Ian Rozylo , Alessandro Juliani</p>
          <h2>Directors</h2>
          <p>Zack Snyder</p>
          <h2>Producers</h2>
          <p>Wesley Coller , Curt Kanemoto , Christopher Nolan , Jon Peters , Lloyd Phillips , Charles Roven , Deborah
            Snyder , Emma Thomas , Thomas Tull</p>
          <h2>Writer</h2>
          <p>David S. Goyer , Christopher Nolan , Jerry Siegel , Joe Shuster</p>
          <h2>Release Date</h2>
          <p>21st June 2013</p>
          <h2>Quality</h2>
          <p>Master</p>
          <h2>Genres</h2>
          <p>Action, Sci-Fi, Fantasy</p>
          <h2>Trailer:</h2>
          <div class="tutorial-video-container">
            <video width="620" height="350" controls>
              <source src="trailer.mp4" type="video/mp4">
            </video>
          </div>
          <h2>Download from here:</h2>
          <div class="download-button-container">
            <a href="download.php?file=ManOfSteel.2013.BRRip.Dual" target="_blank" <button> <input type="button"
                name="button" value="Download for free" class="DownloadButton" button></a>
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