<?php
require("../../LoginPage/connection.php");
if (!isset($_SESSION['user_id'])) {
  header('location: ../../LoginPage/logout.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Avatar</title>
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
                <h4>Avatar</h4>
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
            <h1>Avatar</h1>
          </div>

          <h2>Description</h2>
          <p>A paraplegic ex-marine finds a new life on the distant planet of Pandora, only to find himself battling
            humankind alongside the planet's indigenous Na'vi race in this ambitious digital 3D sci-fi epic from Academy
            Award-winning Titanic director James Cameron. The film, which marks Cameron's first dramatic feature since
            1997's Titanic, follows Jake Sully (Sam Worthington), a war veteran who gets called to the depths of space
            to pick up the job of his slain twin brother for the scientific arm of a megacorporation looking to mine the
            planet of Pandora for a valued ore. Unfortunately the biggest deposit of the prized substance lies
            underneath the home of the Na'vi, a ten-foot-tall, blue-skinned native tribe who have been at war with the
            security arm of the company, lead by Col. Miles Quaritch (Stephen Lang). Because of the planet's hostile
            atmosphere, humans have genetically grown half-alien/half-human bodies which they can jack their
            consciousnesses into and explore the world in. Since Jake's brother already had an incredibly expensive
            Avatar grown for him, he's able to connect with it using the same DNA code and experience first-hand the
            joys of Pandora while giving the scientific team, led by Grace Augustine (Sigourney Weaver) and Norm
            Spellman (Joel David Moore), some well-needed protection against the planet's more hostile forces. On a
            chance meeting after getting separated from his team, Jake's Avatar is rescued by Neytiri (Zoe Saldana), a
            Na'vi princess, who brings him into her tribe in order to give the humans a second chance at relating to
            this new environment. When word gets out of his increasing time with the alien species, Quaritch enlists
            Jake to do some reconnaissance for the company, as they'd like to persuade the tribe to move their home
            before taking more drastic measures to harness the treasure hidden below. Yet as Jake becomes one with the
            tribe and begins to understand the secrets of Pandora, his conscience is torn between his new adopted world
            and the wheelchair-bound one awaiting him when the psychic connection to his Avatar is broken. Soon battle
            lines are drawn and Jake needs to decide which side he will fight on when the time comes. The film was shot
            on the proprietary FUSION digital 3D cameras developed by Cameron in collaboration with Vince Pace, and
            offers a groundbreaking mix of live-action dramatic performances and computer-generated effects. The
            revolutionary motion-capture system created for the film allows the facial expressions of actors to be
            captured as a virtual camera system enables them to see what their computer-generated counterparts will be
            seeing in the film, and Peter Jackson's Oscar-winning Weta Digital visual-effects house supervises Avatar's
            complex special effects.</p>
          <h2>Actors</h2>
          <p>Sam Worthington , Zoe Saldana , Sigourney Weaver</p>
          <h2>Directors</h2>
          <p>James Cameron</p>
          <h2>Producers</h2>
          <p>Brooke Breton , James Cameron , Laeta Kalogridis , Jon Landau , Josh McLaglen , Janace Tashjian , Peter M.
            Tobyansen , Colin Wilson</p>
          <h2>Writer</h2>
          <p>N/A</p>
          <h2>Release Date</h2>
          <p>1st January 2010</p>
          <h2>Quality</h2>
          <p>Master</p>
          <h2>Genres</h2>
          <p>Action, Sci-Fi, Fantasy, Adventure</p>
          <h2>Trailer:</h2>
          <div class="tutorial-video-container">
            <video width="620" height="350" controls>
              <source src="trailer.mp4" type="video/mp4">
            </video>
          </div>
          <h2>Download from here:</h2>
          <div class="download-button-container">
            <a href="download.php?file=Avatar2009.DUB" target="_blank" <button> <input type="button" name="button"
                value="Download for free" class="DownloadButton" button></a>
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