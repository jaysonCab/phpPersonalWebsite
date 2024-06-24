<?php
  include ("/Users/Jayso/Desktop/Portfolio/phpWebsite/database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jayson Cabrera</title>
  <link rel = "icon" href = "/phpWebsite/images/tabLogo.png">
  <script defer src = "../main.js"></script>
  <link rel = "stylesheet" href="/phpWebsite/style.css" type = "text/css">

  <!-- Font link Font Awesome Cdn-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
  
  <?php
    $sql = "SELECT * FROM anime WHERE id = '1'";
    $result = mysqli_query($conn, $sql);
    $animeOne = mysqli_fetch_assoc($result);
    
    $sql = "SELECT * FROM anime WHERE id = '2'";
    $result = mysqli_query($conn, $sql);
    $animeTwo = mysqli_fetch_assoc($result);

    $sql = "SELECT * FROM anime WHERE id = '3'";
    $result = mysqli_query($conn, $sql);
    $animeThree = mysqli_fetch_assoc($result);

    $sql = "SELECT * FROM anime WHERE id = '4'";
    $result = mysqli_query($conn, $sql);
    $animeFour = mysqli_fetch_assoc($result);

    $sql = "SELECT * FROM anime WHERE id = '5'";
    $result = mysqli_query($conn, $sql);
    $animeFive = mysqli_fetch_assoc($result);
  ?>


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

  <div class = "sliderContainer">
    <div class = "slide">

      <div class = "item" style = "background-image: url(/phpWebsite/images/anime/haikyuuThumbnail.png);">
        <div class="contentjp">
          <div class = "name"><?php echo $animeOne["title"]?></div>
          <div class="description"><?php echo $animeOne["synopsis"]?></div>
          <a href = "https://myanimelist.net/anime/20583/Haikyuu" target = "_blank">
            <button>See More</button>
          </a>
        </div>
      </div>

      <div class = "item" style = "background-image: url(/phpWebsite/images/anime/fairytailThumbnail.png);">
        <div class="contentjp">
          <div class = "name"><?php echo $animeTwo["title"]?></div>
          <div class="description"><?php echo $animeTwo["synopsis"]?></div>
          <a href = "https://myanimelist.net/anime/6702/Fairy_Tail" target = "_blank">
            <button>See More</button>
          </a>
        </div>
      </div>

      <div class = "item" style = "background-image: url(/phpWebsite/images/anime/nisekoiThumbnail.png);">
        <div class="contentjp">
          <div class = "name"><?php echo $animeThree["title"]?></div>
          <div class="description"><?php echo $animeThree["synopsis"]?></div>
          <a href = "https://myanimelist.net/anime/18897/Nisekoi" target = "_blank">
            <button>See More</button>
          </a>
        </div>
      </div>

      <div class = "item" style = "background-image: url(/phpWebsite/images/anime/onepieceThumbnail.png);">
        <div class="contentjp">
          <div class = "name"><?php echo $animeFour["title"]?></div>
          <div class="description"><?php echo $animeFour["synopsis"]?></div>
          <a href = "https://myanimelist.net/anime/21/One_Piece" target = "_blank">
            <button>See More</button>
          </a>
        </div>
      </div>

      <div class = "item" style = "background-image: url(/phpWebsite/images/anime/demonslayerThumbnail.png);">
        <div class="contentjp">
          <div class = "name"><?php echo $animeFive["title"]?></div>
          <div class="description"><?php echo $animeFive["synopsis"]?></div>
          <a href = "https://myanimelist.net/anime/47778/Kimetsu_no_Yaiba__Yuukaku-hen" target = "_blank">
            <button>See More</button>
          </a>
        </div>
      </div>


    </div>

    <div class="buttonjp">
      <button class = "previous"><i class="fa-solid fa-arrow-left"></i></button>
      <button class = "next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>

  </div>

</body>
</html>