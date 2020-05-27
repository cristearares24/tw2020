<?php
require "header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/quiz.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Chestionar</title>
</head>

<?php
require 'dbconnection.php';
// $query = mysqli_query("select * from questions", $conn);
?>

<body>

<div id="container">
    <h1>Etapele amenajarii unei gradini sau curti</h1>
    <form action="rezultate.php" method="post" id="quiz">
    <div class="quiz">
        <ol>
            <?php
            $quizID = $_GET["quizID"];
            $questions = mysqli_query($conn, "select questionID, questionString from questions where quizID =".$quizID);
            $contor = 1;
            while ($row = mysqli_fetch_array($questions)){
                echo "<li>";
                $rez = mysqli_query($conn, "select answerID, answerString from answers where questionID =".$row["questionID"]);
                echo "<h3>".$row["questionString"]."</h3>";
                while($answer =  mysqli_fetch_array($rez)){
                    echo "<div>";
                    $trans = $row["questionID"].",".$answer["answerID"];
                    echo "<input type=\"radio\" name = \"ans".$contor."\" value = \"".$trans."\""." required/>";
                    echo "<label>".$answer["answerString"]."</label>";
                    echo "</div>";
                }
                echo "</li>";
                $contor++;
            }
            ?>
        </ol>
    </div>
    <input type="hidden" name="quizID" value=<?php echo $quizID ?> >
    <input type="submit" class="buton" value="Afiseaza">
    </form>
</div>

</body>

<?php
require "footer.php";
?>