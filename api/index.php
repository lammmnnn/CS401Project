<!DOCTYPE php>
<?php
  //for ($j = 0; $j <= sizeof($cardSets[$cardSetChosen])-1; $j++) {
  //    echo "<button class='card' id='c$j' onclick='cardselect($j)'>" . $cardSets[$cardSetChosen][$j] . "</button>";
  //}
?>

<html>
<head>
    <title>Genshin Impact Fanbase | XLK</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
  <div class="topnav">
    <div class="logo">
      <img src="img/mainlogo2.png" height="64" alt=''>
    </div>
    <h2>Fanbase by <span style="color: #007BEF;">XLK</span></h2>
    <a class="loginbutton" href="/api/login.php">Sign in</a>
  </div>
  <div id="navbar">
    <div class="items">
      <a class="button first active">HOME</a>
      <div class="dropdown">
        <a class="button">CHARACTERS</a>
        <div class="dropdown-content">
          <a href="/api/pcharacter.php">Playable Characters</a>
          <a href="/api/ucharacter.php">Unreleased Characters</a>
        </div>
      </div>
      <div class="dropdown">
        <a href="index.php" class="button">ITEMS</a>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
        </div>
      </div>
      <a href="index.html" class="button second">GUIDES</a>
      <a href="index.html" class="button">DPS CALCULATOR</a>
      <a href="index.html" class="button">WORLD MAP</a>
    </div>

    <div class="search">
      <input type="search" placeholder="Search">
      <label class="icon">
        <span class="fas fa-search"></span>
      </label>
    </div>

  </div>
  <main>
  <div>


  </div>
  </main>

<!--  <script>resetCookies();</script>  -->

<!-- MAKE NAVBAR STICKY -->
    <script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
    </script>

</body>
</html>
