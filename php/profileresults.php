<?php
    require 'dbconnection.php';
    $id = $_GET["userId"];
    $id = mysqli_real_escape_string($conn, $id);
    $stmt = mysqli_stmt_init($conn);
    $stmt = mysqli_prepare($conn, "select qr.quizID, tut.title, qr.score, us.firstname, us.lastname, us.email from quizresults qr RIGHT OUTER JOIN tutorials tut on tut.quizID = qr.quizID join users us on us.id = qr.id where qr.id = ? or qr.id is null");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $rez = mysqli_stmt_get_result($stmt);

    $finalArr = array();
    $myArray = array();
    $myArray2 = array();
    if($rez) {

        while($row = mysqli_fetch_assoc($rez))
                    $myArray[] = $row;
        //echo json_encode($myArray);
    }

    $stmtop = mysqli_stmt_init($conn);
    $stmtop = mysqli_prepare($conn,"select firstname, lastname, avg(score) as score from quizresults natural join users group by id order by avg(score) desc limit 5");
    mysqli_stmt_execute($stmtop);
    $rezTop = mysqli_stmt_get_result($stmtop);

    if($rezTop){
        
        while($rowTop = mysqli_fetch_assoc($rezTop))
            $myArray2[] = $rowTop;
        // echo json_encode($myArray2);
    }

    $finalArr = array("stats" => $myArray, "top" => $myArray2);

    echo json_encode($finalArr);
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmtop);
