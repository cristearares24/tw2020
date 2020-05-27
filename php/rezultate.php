<?php
require "header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/rezultate.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Chestionar</title>
</head>

<?php
require 'dbconnection.php';
?>

<body>
 
	<div id="container">

		<h1>Rezultat chestionar</h1>
		
        <?php
            $questions = mysqli_query($conn, "select answerID from questions where quizID = 1");
            // echo $answer = $_POST["ans1"];
            $contor = 1;
            $total_correct = 0;
            while(true){
                if (!isset($_POST["ans".$contor])){
                    break;
                }
                $rez = explode(",", $_POST["ans".$contor]);
                $questionID = $rez[0];
                $answerID = $rez[1];
                $correct_answer = mysqli_query($conn, "select answerID from questions where questionID =".$questionID);
                $correct_answer = mysqli_fetch_array($correct_answer);
                $correct_answer = $correct_answer["answerID"];
                if ($correct_answer == $answerID){
                    $total_correct++;
                }
                $contor++;
            }
            $contor--;

            echo "<p id = \"rasp\"> Ati raspuns corect la: $total_correct/$contor intrebari. </p>";
            $quizID = $_POST["quizID"];
            $userID = 1;
            //$userID = $_SESSION["userID"];
            $rezultate = mysqli_query($conn, "INSERT INTO quizresults(userID, quizID, score) VALUES ($userID, $quizID, $total_correct)");
        ?>
	
	</div>
 
</body>
 
<?php
require "footer.php";
?>