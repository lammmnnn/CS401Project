<!DOCTYPE php>
<?php
?>

<html>
<head>
    <title>Characters | Genshin Impact Fanbase | XLK</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div class="topnav">
    <div class="logo">
      <img src="../img/mainlogo2.png" height="64" alt=''>
    </div>
    <h2>Fanbase by <span style="color: #007BEF;">XLK</span></h2>
    <a class="loginbutton" href="/api/login.php">Sign in</a>
  </div>
  <div id="navbar">
    <div class="items">
      <a href="index.php" class="button first">HOME</a>
      <div class="dropdown">
        <a class="button active">CHARACTERS</a>
        <div class="dropdown-content">
          <a>Playable Characters</a>
          <a href="ucharacter.php">Unreleased Characters</a>
        </div>
      </div>
      <div class="dropdown">
        <a class="button">ITEMS</a>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
        </div>
      </div>
      <a href="" class="button second">GUIDES</a>
      <a href="" class="button">DPS CALCULATOR</a>
      <a href="" class="button">WORLD MAP</a>
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

  <div class="footer">
    <p>Footer</p>
  </div>

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
