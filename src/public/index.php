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
  <link rel="stylesheet" href="css/main.css" />
</head>


<body>
  <main class="main">
    <form action="/includes/formhandler.inc.php" method="post">
      <input type="text" name="username" placeholder="Username...">
      <input type="text" name="pwd" placeholder="Password...">
      <input type="email" name="email" placeholder="Email...">
      <button type="submit">Submit</button>
    </form>
  </main>
</body>

</html>
