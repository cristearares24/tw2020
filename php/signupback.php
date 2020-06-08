<?php
// aici verificam ca a apasat butonul de submit si vrea sa isi faca cont
if (isset($_POST['signup-submit']))
{
    require 'dbconnection.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    // errors handler
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($passwordRepeat))
    {
        header("Location: ./signup.php?error=emptyfields&firstname=" . $firstname . "&mail=" . $email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location: ./signup.php?error=invalidmailuid&mail=");
        exit();
    }
    else if ($password !== $passwordRepeat)
    {
        header("Location: ./signup.php?error=passwordcheck&mail=" . $email);
        exit();
    }
    else
    {
        $sql = "SELECT email FROM users WHERE email=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ./signup.php?error=sqlerroratSELECT");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0)
            {
                header("Location: ./signup.php?error=usertaken&email=" . $email);
                exit();
            }
            else
            {
                $sql = "INSERT INTO users (firstname,lastname, email, pwd) VALUES (?, ?, ?, ?) ";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ./signup.php?error=sqlerroratINSERT");
                    exit();
                }
                else
                {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssss",$firstname, $lastname, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ./signup.php?signup=success");
                    exit();
                }
            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else
{
    header("Location: ./signup.php");
    exit();
}

