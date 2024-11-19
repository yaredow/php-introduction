<?php
// This is a title
$title = "Welcome to my PHP page!";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title ?? 'Document'; ?></title>
</head>

<body>
  <main>
    <form action="../includes/formhandlers.php" method="post">
      <label for="firstname">First Name</label>
      <input id="firstname" type="text" name="firstname" placeholder="First name..." />

      <label for="lastname">Last Name</label>
      <input id="lastname" type="text" name="lastname" placeholder="First name..." />

      <label for="firstname">Favorite Pet</label>
      <select id="favoritepet" name="favoritepet">
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
        <option value="bird">Bird</option>
      </select>

      <button type="submit">Submit</button>
    </form>
  </main>
</body>

</html>
