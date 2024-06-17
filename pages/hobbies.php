<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jayson Cabrera</title>
  <link rel = "icon" href = "images/tabLogo.png">

  <script defer src = "main.js"></script>
  <link rel = "stylesheet" href="/phpWebsite/style.css" type = "text/css">

</head>
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
  
  <!-- Hobby Cards -->
   <div class = "container">
    <div class = "cardContainer">

        <article class = "cardArticle">
          <img src = "/phpWebsite/images/anime/animeThumbnail.png" alt = "hololive" class = "cardImage">
        
          <div class = "cardData">
            <span class = "cardDescription"> Anime & Manga </span>
            <h2 class = "cardTitle"> Influential </h2>
            <a href = "#" class = "cardButton"> Read More </a> 
          </div>
        </article>

        <article class = "cardArticle">
          <img src = "/phpWebsite/images/hololive/hololiveThumbnail.png" alt = "hololive" class = "cardImage">
        
          <div class = "cardData">
            <span class = "cardDescription"> Hololive </span>
            <h2 class = "cardTitle"> Are They Live? </h2>
            <a href = "/phpWebsite/pages/hololive.php" class = "cardButton"> Read More </a> 
          </div>
        </article>
 

    </div>
   </div>

</body>
</html>