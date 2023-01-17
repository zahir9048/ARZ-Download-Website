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
                <h4>John Wick 2014</h4>
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
            <h1>John Wick (2014)</h1>
          </div>

          <h2>Description</h2>
          <p>An ex-hit-man comes out of retirement to track down the gangsters that killed his dog and took his car.
            With the untimely death of his beloved wife still bitter in his mouth, John Wick, the expert former
            assassin, receives one final gift from her--a precious keepsake to help John find a new meaning in life now
            that she is gone. But when the arrogant Russian mob prince, Iosef Tarasov, and his men pay Wick a rather
            unwelcome visit to rob him of his prized 1969 Mustang and his wife's present, the legendary hitman will be
            forced to unearth his meticulously concealed identity. Blind with revenge, John will immediately unleash a
            carefully orchestrated maelstrom of destruction against the sophisticated kingpin, Viggo Tarasov, and his
            family, who are fully aware of his lethal capacity. Now, only blood can quench the boogeyman's thirst for
            retribution.</p>
          <h2>Actors</h2>
          <p>Keanu Reeves , Michael Nyqvist , Alfie Allen , Willem Dafoe , Dean Winters , Adrianne Palicki , Omer Barnea
            , Toby Leonard Moore , Daniel Bernhardt , Bridget Moynahan , John Leguizamo , Ian McShane , Bridget Regan ,
            Lance Reddick , Keith Jardine , Tait Fletcher , Kazy Tauginas , Alexander Frekey , Thomas Sadoski , Randall
            Duk Kim , David Patrick Kelly , Clarke Peters , Kevin Nash , Gameela Wright , Vladislav Koulikov , Munro M.
            Bonnell , Patricia Squire , Vladimir Troitsky , Tommy Bayiokos , Joseph K. Bevilacqua </p>
          <h2>Directors</h2>
          <p>Chad Stahelski , David Leitch</p>
          <h2>Producers</h2>
          <p>Darren Blumenthal , Sam X. Eyde , Tara Finegan , Kevin Scott Frakes , Basil Iwanyk , Peter Lawson , Erica
            Lee , David Leitch , Noel Lohr , Eva Longoria , Doug Monticciolo , Andrew C. Robinson , Raj Brinder Singh ,
            Jared Underwood , Mike Upton , Joseph Vincenti , Jamie Wing , Mike Witherill , Stephen Hamel , Keanu Reeves
            , Chad Stahelski</p>
          <h2>Writer</h2>
          <p>Derek Kolstad</p>
          <h2>Release Date</h2>
          <p>7th November 2014</p>
          <h2>Quality</h2>
          <p>Master</p>
          <h2>Genres</h2>
          <p>Action, Thriller</p>
          <h2>Trailer:</h2>
          <div class="tutorial-video-container">
            <video width="620" height="350" controls>
              <source src="trailer.mp4" type="video/mp4">
            </video>
          </div>
          <h2>Download from here:</h2>
          <div class="download-button-container">
            <a href="download.php?file=JohnWick.2014.BRRip.Dual" target="_blank" <button> <input type="button"
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