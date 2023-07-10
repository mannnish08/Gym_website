<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            /* background-color: black; */
            margin: 0px;


        }

        body::before {
            content: "";
            background: url("imagesused/bakkkk.jpg");
            z-index: -1;
            opacity: 1;
            height: 800px;
            width: 100%;
            position: absolute;


        }

        .navbar {
            display: flex;
            padding: 17px;
            justify-items: center;
            align-items: center;
            height: 25px;
            width: 1228px;
            /* background-color: rgb(0, 0, 0); */
            /* position: fixed; */
        }

        .left img {
            height: 92px;
            width: 100px;
            padding: 5px;
            margin: 23px 0px 0px 0px;
        }

        .left h1 {
            margin: 10px;
            padding: 10px;
            color: white;
        }

        .middle {
            margin: 44px 0px 0px -148px;
            padding: 0px;
            width: 1000px;
        }

        .middle ul {
            list-style: none;
            display: flex;
            position: relative;
            padding: 0px 88px 25px 245px;
        }

        .middle ul li {
            cursor: pointer;
            list-style: none;
            display: inline-block;
            margin: 5px;
            position: relative;
        }

        .middle ul li a {
            text-decoration: none;
            padding: 8px;
            margin: 15px;
            color: white;
            /* text-transform: uppercase; */
        }

        .middle ul li a:hover {
            color: black;
        }

        .middle ul li ::after {
            content: "";
            height: 3px;
            width: 0%;
            background-color: burlywood;
            position: absolute;
            left: 0;
            bottom: -10px;
            transition: 0.3s;
        }

        .middle ul li:hover ::after {
            width: 100%;
        }


        .right {
            display: flex;
            margin: 41px 0px 22px 180px;
        }


        .right h5 {
            font-size: 0.3;
            margin: 5px 0px;
            padding: 5px 0px;
        }

        .right h5 a {
            color: white;
            /* text-decoration: none; */
        }

        .right img {
            cursor: pointer;
            height: 25px;
            width: 26px;
            margin: 5px;
            /* padding: 5px; */

        }


        .navbtn {
            border-radius: 7px;
            height: 33px;
            width: 48px;
            background-color: rgb(16, 16, 16);

        }

        .navbtn a {
            text-decoration: none;
            color: white;
        }



        .navbtn {
            border-radius: 40px;

        }

        .conent {
            display: flex;
            justify-content: center;
            margin: 40px;
        }

        .conent img {
            height: 500px;
            width: 600px;
        }

        .container {
            height: 200px;
            max-width: 1170px;
            margin: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer {
            background-color: #000000;
            padding: 70px 0px;
        }

        .gymname {
            color: white;
            font-size: 2.5rem;
            margin: 20px;
        }


        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #faf7f8;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 8px;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: #24262b;
            background-color: #ffffff;
        }

        .social-links {
            margin: -14px;
        }

        .center {
            margin: 127px 0px 0px 0px;
            color: #ffffff;
            display: block;
            text-align: center;

        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="left">
            <img src="imagesused/donelogo.png" lt="++++" id="one">
            <!-- <h1>IMMERSE</h1> -->
        </div>
        <div class="middle">
            <ul>
                <li><a href="start.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="galleryy.php">Gallery</a></li>
                <li><a href="excercise.php">Excercies</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
        <div class="right">
            <button class="navbtn"><a href="logout.php">logout</a></button>
        </div>
    </div>


    <div class="conent">
        <img src="imagesused/gymsedule.jpg" alt="">
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Gym</h4>
                    <ul>
                        <li><a href="start.php">Home</a></li>
                        <li><a href="portfolio.php">Trainer's Portfolio</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Our Trainings</h4>
                    <ul>
                        <li><a href="Strength.php">Strenghth Training</a></li>
                        <li><a href="cardio.php">Cardio Training</a></li>
                        <li><a href="yoga.php">Yoga Training</a></li>
                        <li><a href="zumba.php">Zumba Training</a></li>
                    </ul>
                </div>
                <div class="gymname">
                    <h1>IMMERSE</h1>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
                        <a href="www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="www.linked.com"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="center">
            Copyright &copy; All rights reserved to manish&robinsh
        </div>
    </footer>

</body>

</html>