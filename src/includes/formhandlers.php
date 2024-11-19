<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo $_SERVER['REQUEST_METHOD'];
  $firstname = htmlspecialchars($_POST["firstname"]);
  $lastname = htmlspecialchars($_POST["lastname"]);
  $pets = htmlspecialchars($_POST["favoritepet"]);

  echo "These are the data that the user submitted:";
  echo "<br>";
  echo $firstname;
  echo "<br>";
  echo $lastname;
  echo "<br>";
  echo $pets;
}
