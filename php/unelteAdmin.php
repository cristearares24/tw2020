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
<script>function refreshPage()
{
  window.location.reload(true); 

}</script>

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

  function deleteItem($id)
  {
      require 'dbconnection.php';
      $sql = "DELETE FROM unelte WHERE id=$id";
      mysqli_query($conn, $sql);
  }
  function addItem()
  {
    require 'dbconnection.php';
    $name = $_POST["name"];
    $descriere = $_POST["description"];
    $imageUrl = $_POST["image-url"];
    if (!empty($_POST['name'])) {
    $sql = "INSERT INTO `unelte` (`id`, `name`, `description`, `image`) VALUES (NULL, '$name', '$descriere', '$imageUrl');";
    mysqli_query($conn, $sql);
   }
  }

    $result = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM `unelte`");
    $row = mysqli_fetch_array($result);
    $count = $row['count'];
  {
    echo "<div class=\"grid-item\"> <div class=\"product-img\"><img src='https://i.pinimg.com/originals/10/b2/f6/10b2f6d95195994fca386842dae53bb2.png' height='420' width='327'></div>";
    echo "<div class=\"product-info\"> <div class=\"product-text\">";
    echo "<br><br><br><br>";
    echo '<form action = "unelteAdmin.php" method="post">
    Nume: <input type="text" name="name"><br>
    Descriere: <input type="text" name="description"><br>
    Image-url: <input type="text" name="image-url"><br>
    <input type="submit">
    </form>';
    echo "</div> </div>";
    echo "</div>";

  }

  for ($i = 1; $i <= $count; $i++)
  {   
    $id = mysqli_query($conn, "select id from unelte where id=".$i);
    $id = mysqli_fetch_array($id);
    $id = $id["id"];
    if ($id == 0) {$count = $count + 1; continue;}
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
    echo "<form action = 'unelteAdmin.php' method='post'> <button name='delete' value='$id' ><img src='https://image.flaticon.com/icons/png/512/61/61848.png' height='35' width='30'></button>";
    echo "</div> </div>";
    echo "</div>";
  }

  if(isset($_POST['delete'])){
    deleteItem($_POST['delete']);
  }
  if(isset($_POST['name'])){
    addItem();
  }

  ?>  

</form>
</body>
