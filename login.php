<?php
//this script will handle login
session_start();

//check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "cofig.php";

$username = $password = "";
$err = "";


//if request method is  post

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }

}
if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;


    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
            {
                mysqli_stmt_bind_result($stmt,$id, $username, $hashed_password);
                if(mysqli_stmt_fetch($stmt))
                {
                    if(password_verify($password , $hashed_password))
                    {
                        //this means the password id correct
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;

                        //Redirect user to welcome page
                        header("location: start.php");
                    }

                }


            }
    
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>GYM |Login </title>
    <!-- <link rel="stylesheet" href="login.css"> -->
    <style>
        * {
            margin: 0px;
            padding: 0px;
            /* background-color: black; */
            font-family: Georgia, 'Times New Roman', Times, serif;
            /* color: rgb(50, 50, 50); */
        }


        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            background: url('https://cdn.pixabay.com/photo/2017/01/09/11/30/dumbbell-1966247_960_720.jpg')no-repeat;
            background-position: center;
            background-size: cover;
        }

        /* section::before{
            background: url("imagesused/firstused.jpg");
            z-index: -1;
            opacity: 1;
        } */

        .form-box {
            position: relative;
            width: 400px;
            height: 450px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h2 {
            font-size: 2em;
            color: white;
            text-align: center;
        }

        .inputbox {
            position: relative;
            margin: 30px 0;
            width: 310px;
            border-bottom: 2px solid white;
        }

        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: white;
            font-size: 1em;
            pointer-events: none;
            transition: .5s;
        }

        input:focus~label,
        input:valid~label {
            top: -5px;
        }

        .inputbox input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: white;
        }

        .inputbox ion-icon {
            position: absolute;
            right: 8px;
            color: white;
            font-size: 1.2em;
            top: 20px;
        }

        .forget {
            margin: -15px 0 15px;
            font-size: .9em;
            color: white;
            display: flex;
            justify-content: center;
        }

        .forget label input {
            margin-right: 3px;
        }

        .forget label a {
            color: white;
            text-decoration: none;
        }

        .forget label a:hover {
            text-decoration: underline;
        }

        button {
            width: 100%;
            height: 40px;
            border-radius: 40px;
            background: white;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
        }

        .register {
            font-size: .9em;
            color: white;
            text-align: center;
            margin: 25px 0 10px;
        }

        .register p a {
            text-decoration: none;
            color: white;
            font-weight: 600;
        }

        .register p a:hover {
            text-decoration: underline;
        }
    </style>

</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="post">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <input type="Ueraname" name="username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <!-- <div class="forget">
                        <label for=""><input type="checkbox">Remember Me <a href="###"> Forget Password</a></label>

                    </div> -->
                    <!-- <button>Log in</button> -->
                    <button type="submit" id="submit">Sign in</button>
                    <div class="register">
                        <p>Don't have an account? <a href="Register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>