<html>
  <head>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div id="navbar">
      <a href="index.html" class="button first active">HOME</a>
      <div class="dropdown">
        <a href="index.html" class="button">CHARACTERS</a>
        <div class="dropdown-content">
          <a href="#">Playable Characters</a>
          <a href="#">Unreleased Characters</a>
        </div>
      </div>
      <div class="dropdown">
        <a href="index.html" class="button">ITEMS</a>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
        </div>
      </div>
      <a href="index.html" class="button second">GUIDES</a>
      <a href="index.html" class="button">DPS CALCULATOR</a>
      <a href="index.html" class="button">WORLD MAP</a>
    </div>

    <div>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Something</th>
            <th>St2</th>
          </tr>
        </thead>
        <tbody>
          <?php
            function renderTableContentS() {
              $contents = file_get_contents("something.dat");
              $lines = explode("\n", trim($contents));
              $header = array_shift($lines);
              echo "<thead><tr><th>{$header[0]}</th><th>{$header[1]}</th>
              <th>{$header[2]}</th></tr></thead><tbody>";
              foreach ($lines as $line) {
                list($name, $sthing, $sthing2) = explode("|", trim($line));
                echo "<tr><td>{$name}</td><td>{$sthing}<td>{$sthing2}</td></tr>";
              }
            }
          ?>

          <?php

          class User {

            public $id;
            public $username;
            public $password;
            public $permissions;
            public $age;

            public function __construct($id, $username = "default") {
                $this->username = $username;
            }

            public function checkPassword($password) {
              $users = $this->getUsers();
              return ($user[$this->username] === $password);
            }

            public function checkUser() {
              $users = $this->getUsers();
            }

            public function getUsers () {
              $contents = file_get_contents("users.dat");
              $line = explode("\n", trim($contents));
              $header = array_shift($lines);
              foreach ($lines as $line) {
                list($username, $password) = explode("|", trim($line));
                $user[$username] = $password;
              }
              echo print_r($users,1);
            }
          }

          $a = new User(1, "lamnguyen");
          echo $a->username . "\n";
          if ($a->checkPassword("abc123")) {
            echo "logged in\n";
          } else {
            echo "nope\n";
          }
          ?>

  </body>
</html>
