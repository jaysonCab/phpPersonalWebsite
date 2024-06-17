<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jayson Cabrera</title>
  <link rel = "icon" href = "images/tabLogo.png">

  <script defer src = "/phpWebsite/main.js"></script>
  <link rel = "stylesheet" href="/phpWebsite/style.css" type = "text/css">
</head>

<?php
  $memberLinks = array(
  "https://www.youtube.com/@TokinoSora",
  "https://www.youtube.com/@Robocosan",
  "https://www.youtube.com/@SakuraMiko",
  "https://www.youtube.com/@HoshimachiSuisei",
  "https://www.youtube.com/@AZKi",
  "https://www.youtube.com/@ShirakamiFubuki",
  "https://www.youtube.com/@NatsuiroMatsuri",
  "https://www.youtube.com/@AkaiHaato",
  "https://www.youtube.com/@AkiRosenthal",
  "https://www.youtube.com/@MinatoAqua",
  "https://www.youtube.com/@MurasakiShion",
  "https://www.youtube.com/@NakiriAyame",
  "https://www.youtube.com/@YuzukiChoco",
  "https://www.youtube.com/@OozoraSubaru",
  "https://www.youtube.com/@OokamiMio",
  "https://www.youtube.com/@NekomataOkayu",
  "https://www.youtube.com/@InugamiKorone",
  "https://www.youtube.com/@usadapekora",
  "https://www.youtube.com/@ShiranuiFlare",
  "https://www.youtube.com/@ShiroganeNoel",
  "https://www.youtube.com/@HoushouMarine",
  "https://www.youtube.com/@AmaneKanata",
  "https://www.youtube.com/@TsunomakiWatame",
  "https://www.youtube.com/@TokoyamiTowa",
  "https://www.youtube.com/@HimemoriLuna",
  "https://www.youtube.com/@YukihanaLamy",
  "https://www.youtube.com/@MomosuzuNene",
  "https://www.youtube.com/@ShishiroBotan",
  "https://www.youtube.com/@OmaruPolka",
  "https://www.youtube.com/@LaplusDarknesss",
  "https://www.youtube.com/@TakaneLui",
  "https://www.youtube.com/@HakuiKoyori",
  "https://www.youtube.com/@SakamataChloe",
  "https://www.youtube.com/@HimemoriLuna"
  );

  function live($url) {
    $searchfor = '"text":" watching';
    $content = file_get_contents($url);
    if (strpos($content, $searchfor))
    {
      return "Live !";

    } else {
      return "Not Live !";
    }
  }
?>




<body>
  
  <!-- Navbar -->
  <header>
    <a class = "boldFont" href = "/phpWebsite/index.php">_ Jayson Cabrera</a>
    <nav>
      <ul class = "navLinks">
        <li><a href = "/phpWebsite/pages/hobbies.php"> About Me </a></li>
        <li><a href = "/phpWebsite/pages/hobbies.php"> Portfolio </a></li>
        <li><a href = "/phpWebsite/pages/hobbies.php"> Hobbies </a></li>
      </ul>
    </nav>
    <a class = "cta" href = "/phpWebsite/pages/hobbies.php"> <button class = "contactButton"> Contact Me </button></a>
  </header>

  <!-- Introduction -->
  <div class = "introductionContainer">
    <div>
      <h1 style = "
      text-align: center;
      font-family: 'Montserrat', sans-serif;">
        Welcome!
      </h1>
    </div>
    <div>
      <p style = 
      "text-align: center;
      font-family: 'Montserrat', sans-serif;
      font-size: 20px;">
        This page is used to check all Hololive JP Members' youtube channel to see if they're currnetly live
        using GET commands in php.
      </p>
    </div>
  </div>

  <!-- Gen 0 -->

  <div class = "entireGenContainer">
    <img src = "/phpWebsite/images/hololive/gen0photo.png" class = "leftImage">
      <div class = "genTitleContainer">
        <h2 class = "genTitle">Gen Zero</h2>
        <hr class = "hrTag">
      </div>
      
      <div class = "memberContainer">
        <div class = "soloMemberBox">
          <div class = "status">
            <div>
              <img src = "/phpWebsite/images/hololive/soraProfile.png" alt = "soraPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[0]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/soraThumbnail.png" alt = "soraThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@TokinoSora" target = "_blank">Tokino Sora</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/robocoProfile.png" alt = "robocoPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[1]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/robocoThumbnail.png" alt = "robocoThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@Robocosan" target = "_blank">Roboco</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/mikoProfile.png" alt = "mikoPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[2]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/mikoThumbnail.png" alt = "mikoThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@SakuraMiko" target = "_blank">Sakura Miko</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/suiseiProfile.png" alt = "suiseiPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[3]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/suiseiThumbnail.png" alt = "suiseiThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@HoshimachiSuisei" target = "_blank">Hoshimachi Suisei</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/azkiProfile.png" alt = "azkiPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[4]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/azkiThumbnail.png" alt = "azkiThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@AZKi" target = "_blank">Azki</a>
              </div>
            </div>
          </div> 
        </div> 
      </div>
  </div>

<!-- Gen 1 -->

<div class = "entireGenContainer">
    <img src = "/phpWebsite/images/hololive/gen1photo.png" class = "rightImage">
      <div class = "genTitleContainerLeft">
        <h2 class = "genTitle">Gen One</h2>
        <hr class = "hrTag">
      </div>
      
      <div class = "memberContainer" style = "padding-right: 170px; padding-left: 170px;">
        <div class = "soloMemberBox">
          <div class = "status">
            <div>
              <img src = "/phpWebsite/images/hololive/fubukiProfile.png" alt = "fubukiPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[5]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/fubukiThumbnail.png" alt = "fubukiThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@ShirakamiFubuki" target = "_blank">Shirakami Fubuki</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/matsuriProfile.png" alt = "matsuriPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[6]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/matsuriThumbnail.png" alt = "matsuriThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@NatsuiroMatsuri" target = "_blank">Natsuiro Matsuri</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/haachamaProfile.png" alt = "haachamaPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[7]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/haachamaThumbnail.png" alt = "haachamaThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@AkaiHaato" target = "_blank">Akai Haato</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/akiProfile.png" alt = "akiPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[8]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/akiThumbnail.png" alt = "akiThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@AkiRosenthal" target = "_blank">Aki Rosenthal</a>
              </div>
            </div>
          </div>  
        </div>
      </div>
  </div>

    <!-- Gen 2 -->

    <div class = "entireGenContainer">
    <img src = "/phpWebsite/images/hololive/gen2photo.png" class = "leftImage" style = "object-position: 10% 30%;">
      <div class = "genTitleContainer">
        <h2 class = "genTitle">Gen Two</h2>
        <hr class = "hrTag">
      </div>
      
      <div class = "memberContainer">
        <div class = "soloMemberBox">
          <div class = "status">
            <div>
              <img src = "/phpWebsite/images/hololive/aquaProfile.png" alt = "aquaPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[9]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/aquaThumbnail.png" alt = "aquaThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@MinatoAqua" target = "_blank">Minato Aqua</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/shionProfile.png" alt = "shionPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[10]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/shionThumbnail.png" alt = "shionThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@MurasakiShion" target = "_blank">Murasaki Shion</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/ayameProfile.png" alt = "ayamePfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[11]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/ayameThumbnail.png" alt = "ayameThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@NakiriAyame" target = "_blank">Nakiri Ayame</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/chocoProfile.png" alt = "chocoPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[12]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/chocoThumbnail.png" alt = "chocoThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@YuzukiChoco" target = "_blank">Yusuzuki Choco</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/subaruProfile.png" alt = "subaruPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[13]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/subaruThumbnail.png" alt = "subaruThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@OozoraSubaru" target = "_blank">Oozora Subaru</a>
              </div>
            </div>
          </div> 
        </div> 
      </div>
  </div>

<!-- Gamers -->

  <div class = "entireGenContainer">
    <img src = "/phpWebsite/images/hololive/gengamersphoto.png" class = "rightImage">
      <div class = "genTitleContainerLeft">
        <h2 class = "genTitle">Gamers</h2>
        <hr class = "hrTag">
      </div>
      
      <div class = "memberContainer" style = "padding-right: 350px; padding-left: 350px;">
        <div class = "soloMemberBox">
          <div class = "status">
            <div>
              <img src = "/phpWebsite/images/hololive/mioProfile.png" alt = "mioPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[14]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/mioThumbnail.png" alt = "mioThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@OokamiMio" target = "_blank">Ookami Mio</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/okayuProfile.png" alt = "okayuPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[15]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/okayuThumbnail.png" alt = "okayuThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@NekomataOkayu" target = "_blank">Nekomata Okayu</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/koroneProfile.png" alt = "koronePfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[16]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/koroneThumbnail.png" alt = "koroneThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@InugamiKorone" target = "_blank">Inugami Korone</a>
              </div>
            </div>
          </div>  
        </div>        
      </div>
  </div>

  <!-- Gen 3 -->

  <div class = "entireGenContainer">
    <img src = "/phpWebsite/images/hololive/gen3photo.png" class = "leftImage" style = "object-position: 10% 50%;">
      <div class = "genTitleContainer">
        <h2 class = "genTitle">Gen Three</h2>
        <hr class = "hrTag">
      </div>
      
      <div class = "memberContainer" style = "padding-right: 170px; padding-left: 170px;">
        <div class = "soloMemberBox">
          <div class = "status">
            <div>
              <img src = "/phpWebsite/images/hololive/pekoraProfile.png" alt = "pekoraPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[17]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/pekoraThumbnail.png" alt = "pekoraThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@usadapekora" target = "_blank">Usada Pekora</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/flareProfile.png" alt = "flarePfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[18]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/flareThumbnail.png" alt = "flareThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@ShiranuiFlare" target = "_blank">Shiranui Flare</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/noelProfile.png" alt = "noelPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[19]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/noelThumbnail.png" alt = "noelThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@ShiroganeNoel" target = "_blank">Shirogane Noel</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/marineProfile.png" alt = "marinePfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[20]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/marineThumbnail.png" alt = "marineThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@HoushouMarine" target = "_blank">Houshou Marine</a>
              </div>
            </div>
          </div> 
        </div> 
      </div>
  </div>
  <!-- Gen 4 -->

  <div class = "entireGenContainer">
    <img src = "/phpWebsite/images/hololive/gen4photo.png" class = "rightImage">
      <div class = "genTitleContainerLeft">
        <h2 class = "genTitle">Gen Four</h2>
        <hr class = "hrTag">
      </div>
      
      <div class = "memberContainer" style = "padding-right: 170px; padding-left: 170px;">
        <div class = "soloMemberBox">
          <div class = "status">
            <div>
              <img src = "/phpWebsite/images/hololive/kanataProfile.png" alt = "kanataPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[21]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/kanataThumbnail.png" alt = "kanataThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@AmaneKanata" target = "_blank">Amane Kanata</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/watameProfile.png" alt = "watamePfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[22]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/watameThumbnail.png" alt = "watameThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@TsunomakiWatame" target = "_blank">Tsunomaki Watame</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/towaProfile.png" alt = "towaPfp" class = "profileImage">
            </div>
            <div>
             <?php
                $test = live($memberLinks[23]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/towaThumbnail.png" alt = "towaThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@TokoyamiTowa" target = "_blank">Tokoyami Towa</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/lunaProfile.png" alt = "lunaPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[24]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/lunaThumbnail.png" alt = "lunaThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@HimemoriLuna" target = "_blank">Himemori Luna</a>
              </div>
            </div>
          </div>  
        </div>
      </div>
  </div>
  
  <!-- Gen 5 -->

  <div class = "entireGenContainer">
    <img src = "/phpWebsite/images/hololive/gen5photo.png" class = "leftImage" style = "object-position: 10% 30%;">
      <div class = "genTitleContainer">
        <h2 class = "genTitle">Gen Five</h2>
        <hr class = "hrTag">
      </div>
      
      <div class = "memberContainer" style = "padding-right: 170px; padding-left: 170px;">
        <div class = "soloMemberBox">
          <div class = "status">
            <div>
              <img src = "/phpWebsite/images/hololive/lamyProfile.png" alt = "lamyPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[25]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/lamyThumbnail.png" alt = "lamyThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@YukihanaLamy" target = "_blank">Yukihana Lamy</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/neneProfile.png" alt = "nenePfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[26]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/neneThumbnail.png" alt = "neneThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@MomosuzuNene" target = "_blank">Momosuzu Nene</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/botanProfile.png" alt = "botanPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[27]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/botanThumbnail.png" alt = "botanThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@ShishiroBotan" target = "_blank">Shishiro Botan</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/polkaProfile.png" alt = "polkaPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[28]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/polkaThumbnail.png" alt = "polkaThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@OmaruPolka" target = "_blank">Omaru Polka</a>
              </div>
            </div>
          </div> 
        </div> 
      </div>
  </div>

  <!-- Gen 6 -->

  <div class = "entireGenContainer">
    <img src = "/phpWebsite/images/hololive/gen6photo.png" class = "rightImage" style = "object-position: 10% 70%;">
      <div class = "genTitleContainerLeft">
        <h2 class = "genTitle">Gen Six</h2>
        <hr class = "hrTag">
      </div>
      
      <div class = "memberContainer" >
        <div class = "soloMemberBox">
          <div class = "status">
            <div>
              <img src = "/phpWebsite/images/hololive/laplusProfile.png" alt = "laplusPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[29]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/laplusThumbnail.png" alt = "laplusThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@LaplusDarknesss" target = "_blank">La+ Darknesss</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/luiProfile.png" alt = "luiPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[30]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/luiThumbnail.png" alt = "luiThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@TakaneLui" target = "_blank">Takane Lui</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/koyoriProfile.png" alt = "koyoriPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[31]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/koyoriThumbnail.png" alt = "koyoriThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@HakuiKoyori" target = "_blank">Hakui Koyori</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/chloeProfile.png" alt = "chloePfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[32]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/chloeThumbnail.png" alt = "chloeThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@SakamataChloe" target = "_blank">Sakamata Chloe</a>
              </div>
            </div>
          </div>  
        </div>

        <div class = "soloMemberBox">
          <div class = "status">
            <div>
            <img src = "/phpWebsite/images/hololive/irohaProfile.png" alt = "irohaPfp" class = "profileImage">
            </div>
            <div>
              <?php
                $test = live($memberLinks[33]);
                if ($test == "Live !") {
                  echo "<p class = 'live'> $test </p>";
                } else {
                  echo "<p class = 'notLive'> $test </p>";
                }
              ?>
            </div>
          </div> 
          <div class = "wrapper">
            <div class = "image">
              <img src = "/phpWebsite/images/hololive/irohaThumbnail.png" alt = "irohaThumbnail" class = "thumbnailImage">
              <div class = "content">
                <a class = "memberLink" href = "https://www.youtube.com/@HimemoriLuna" target = "_blank">Kazama Iroha</a>
              </div>
            </div>
          </div>  
        </div>
      </div>
  </div>

</body>
</html>