<?php
require("../../LoginPage/connection.php");
if (!isset($_SESSION['user_id'])) {
  header('location: ../../LoginPage/logout.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>3 idiots</title>
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
                <h4>3 Idiots</h4>
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
                <li><a href="#" title="Link">JetBrains PyCharm Pro 2021 </a></li>
                <li><a href="#" title="Link">Unity Pro 2019 + Addons + Support </a></li>
                <li><a href="#" title="Link">NetBeans 8.0.2 Complete Bundle</a></li>
                <li class="notimp">
                  <!-- notimp class is applied to remove this link from the tablet and phone views --><a href="#"
                    title="Link">Cisco Packet Tracer 6.2 </a>
                </li>
              </ul>
            </nav>
            <nav class="menu" id="menu2">
              <h2><!-- Title for menuset 1 -->Trending Games </h2>
              <ul>
                <!-- List of links under menuset 1 -->
                <li><a href="#" title="Link">JetBrains PyCharm Pro 2021 </a></li>
                <li><a href="#" title="Link">Unity Pro 2019 + Addons + Support </a></li>
                <li><a href="#" title="Link">NetBeans 8.0.2 Complete Bundle</a></li>
                <li class="notimp">
                  <!-- notimp class is applied to remove this link from the tablet and phone views --><a href="#"
                    title="Link">Cisco Packet Tracer 6.2 </a>
                </li>
              </ul>
            </nav>
            <nav class="menu" id="menu3">
              <h2><!-- Title for menuset 1 -->Trending Movies </h2>
              <ul>
                <!-- List of links under menuset 1 -->
                <li><a href="#" title="Link">JetBrains PyCharm Pro 2021 </a></li>
                <li><a href="#" title="Link">Unity Pro 2019 + Addons + Support </a></li>
                <li><a href="#" title="Link">NetBeans 8.0.2 Complete Bundle</a></li>
                <li class="notimp">
                  <!-- notimp class is applied to remove this link from the tablet and phone views --><a href="#"
                    title="Link">Cisco Packet Tracer 6.2 </a>
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
            <h1>3 idiots</h1>
          </div>

          <h2>Description</h2>
          <p>Chetan Bhagat's best-selling novel 5 Point Someone makes the leap to the big screen in this comedy about
            three engineering students whose friendship stands the test of time. As Farhan (R. Madhavan) and Raju
            (Sharman Joshi) search the valleys for their missing friend Rancho (Aamir Khan), their memories drift back
            to the days when they we're all college roommates, and Rancho incurred the wrath of their headstrong dean
            Viru Sahastrabudhhe (aka Virus) (Boman Irani) by daring to propose radical theories that directly
            contradicted his teacher's lessons. Later, Rancho begins dating Virus' daughter Pia (Kareena Kapoor), and
            gradually begins to gain the dean's respect. Flashing back to the present day, Farhan and Raju uncover some
            previously unknown facts about their old friend that leads them to question everything they ever thought
            they knew about him.</p>
          <h2>Actors</h2>
          <p>Aamir Khan , Madhavan , Sharman Joshi , Kareena Kapoor , Boman Irani , Omi Vaidya , Mona Singh , Javed
            Jaffrey , Parikshat Sahni , Olivier Lafont , Rahul Kumar , Amardeep Jha , Farida Dadi , Mukund Bhatt ,
            Chaitali Bose , Jayant Kripalani , Arun Bali , Shoaib Ahmed , Dushyant Wagh , Pooja Goswami , A.S. Duggal ,
            Annapurna Kaul , Chandrashekhar , R.S. Kodange , Dharmendra Bhurji , Meghna Bhalla , Harvinder Singh ,
            Dilshad Edibam , Rajeev Ravindranathan , Hitesh Tak </p>
          <h2>Directors</h2>
          <p>Rajkumar Hirani</p>
          <h2>Producers</h2>
          <p>Vidhu Vinod Chopra , Vir Chopra , Anil Davda , Sanjiv Kishinchandani , Aman Mahajan , Ravi Sarin</p>
          <h2>Writer</h2>
          <p>Rajkumar Hirani , Abhijat Joshi , Chetan Bhagat , Vidhu Vinod Chopra ,</p>
          <h2>Release Date</h2>
          <p>24th December 2009</p>
          <h2>Quality</h2>
          <p>Master</p>
          <h2>Genres</h2>
          <p>Comedy, Drama</p>
          <h2>Trailer:</h2>
          <div class="tutorial-video-container">
            <video width="620" height="350" controls>
              <source src="trailer.mp4" type="video/mp4">
            </video>
          </div>
          <h2>Download from here:</h2>
          <div class="download-button-container">
            <a href="download.php?file=3.Idiots.2009" target="_blank" <button> <input type="button" name="button"
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