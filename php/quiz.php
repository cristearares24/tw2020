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
            $userID = 1;
            $quizID = $_GET["quizID"];
            $questions = mysqli_query($conn, "select questionID, questionString from questions where quizID =".$quizID);
            $contor = 1;
            $rez = mysqli_query($conn, "select * from quizresults where userID= $userID and quizID = $quizID");
            if (mysqli_num_rows($rez) == 0)
            {
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
            echo "</div>";
            echo "<input type=\"hidden\" name=\"quizID\" value=$quizID>";
            echo "<input type=\"submit\" class=\"buton\" value=\"Afiseaza\">";
           
            }
            else
            {   
              $score = mysqli_query($conn, "select score from quizresults where userID =$userID and quizID = $quizID");
              $score = mysqli_fetch_array($score);
              $score = $score["score"];
              if($score < 3){
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
                echo "</div>";
                echo "<input type=\"hidden\" name=\"quizID\" value=$quizID>";
                echo "<input type=\"submit\" class=\"buton\" value=\"Afiseaza\">";
              }
              elseif ($score >= 3)
                echo "<p id=\"rasp\"> Ati facut deja acest tutorial. </p>";
                echo "</div>";
            }
            echo "</ol>";
            ?>
    
    </form>
</div>

</body>

<?php
require "footer.php";
?> 