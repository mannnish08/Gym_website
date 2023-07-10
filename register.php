<?php
require_once "cofig.php";
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    //CHECKING USERNAME IS EMPTY
    if (empty(trim($_POST["username"]))) {
        $username_err = "username cannnot be blank";
    } else {
        $sql = "SELECT id FROM users WHERE username  = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            //set the value of param username
            $param_username = trim($_POST['username']);

            //tying to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is alredy taken";
                } else {
                    $username = trim($_POST['username']);
                }

            } else {
                echo "Something went wrong";
            }
        }
    }
    mysqli_stmt_close($stmt);
    //check for password is empty
    if (empty(trim($_POST['password']))) {
        $password_err = "password cannot be blank";
    } elseif (strlen(trim($_POST['password'])) < 5) {
        $password_err = "Password cannot be less than 5 characters";
    } else {
        $password = trim($_POST['password']);
    }

    ///check for confrim password feild


    // if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    // $password_err = "Passwords should match";
    // }

    //if there were no errors , go ahead and insert into the database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
        $sql = "INSERT INTO users(username,password) VALUES (?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);


            //set these parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);



            //TRY TO EXECUTE THE QUERY
            if (mysqli_stmt_execute($stmt)) {
                header("location: login.php");
            } else {
                echo "Something went wrong... cannot redirect!";
            }
        }
        mysqli_stmt_close($stmt);

    }
    mysqli_close($conn);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>GYM | Register </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="Registration.css"> -->
    <style>
        /* * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        } */

        body {
            background: url("imagesused/registerback.jpg")no-repeat center;
            background-size: cover;
        }

        .container {
            width: 100%;
            max-width: 650px;
            background: rgba(0, 0, 0, 0.5);
            padding: 28px;
            margin: 80px 300px;
            border-radius: 10px;
            box-shadow: inset -2px 2px 2px white;
            backdrop-filter: blur(100px)
        }

        .form-title {
            font-size: 40px;
            text-align: center;
            padding-bottom: 6px;
            color: white;
            text-shadow: 2px 2px 2px black;
            border-bottom: solid 1px white;
        }

        .main-user-info {
            display: block;
            justify-content: space-between;
            padding: 20px 0;
        }

        /*HV to understand latter */
        .user-input-box:nth-child(2n) {
            justify-content: end;
        }

        .user-input-box {}

        .user-input-box label {
            display: flex;
            width: 95%;
            color: white;
            font-size: 20px;
            font-weight: 400;
            margin: 5px 0;
        }

        .user-input-box input {
            height: 40px;
            width: 95%;
            border-radius: 7px;
            outline: none;
            border: 1px solid grey;
            padding: 0 10px;
        }



        .form-submit-btn {
            margin-top: 40px;
        }

        .form-submit-btn input {
            display: block;
            width: 100%;
            margin-top: 10px;
            font-size: 20px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: rgb(209, 209, 209);
            background: rgba(63, 114, 76, 0.7);
        }

        .form-submit-btn input:hover {
            color: rgb(255, 255, 255);
            background: rgba(56, 204, 93, 0.7);

        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="form-title">Registration</h1>
        <form action="" method="post">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter Username">
                </div>
                <div class="user-input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password">
                </div>
                <div class="user-input-box">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="password" name="password" placeholder="Confirm Password">
                </div>
            </div>
            <div class="form-submit-btn">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>

</html>