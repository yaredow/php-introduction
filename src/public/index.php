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
  <link rel="stylesheet" href="../css/main.css" />
</head>

<body>
  <?php
  $test = "yared";
  function calculator(int $num01, int $num02)

  {
    global $test;
    $result = $num01 + $num02;
    return $result;
  }

  echo calculator(2, 5)

  ?>

</body>

</html>
