<?php

require "header.php";

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/unelte.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Unelte</title>
</head>


<body>
  <?php

  if (!isset($_SESSION['userId']))
    {
      header("Location: ./index.php");
      exit();
    }

  require 'dbconnection.php';

  echo "<div class=\"grid-container\">";
  $id = $_SESSION['userId'];
  $result = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM `unelte`");
  $row = mysqli_fetch_array($result);
  $count = $row['count'];

  for ($i = 1; $i <= $count; $i++)
  {
    $image = mysqli_query($conn, "select image from unelte where id=".$i);
    $image = mysqli_fetch_array($image);
    $image = $image["image"];
    $title = mysqli_query($conn, "select name from unelte where id=".$i);
    $title = mysqli_fetch_array($title);
    $title = $title["name"];
    $descriere = mysqli_query($conn, "select description from unelte where id =".$i);
    $descriere = mysqli_fetch_array($descriere);
    $descriere = $descriere["description"];
    echo "<div class=\"grid-item\"> <div class=\"product-img\"><img src=$image height='420' width='327'></div>";
    echo "<div class=\"product-info\"> <div class=\"product-text\">";
    echo "<h1>$title</h1>";
    echo "<br>";
    echo "<p>$descriere</p>";
    echo "</div> </div>";
    echo "</div>";

  }
  echo "</div> </div>";
  
  ?>

</body>
