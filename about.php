<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        * {
            margin: 0px;
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

        .heading {
            height: 400px;
            display: flex;
            justify-content: center;
            font-size: 3.5rem;
        }

        .heading h1 {
            color: white;
            margin: 70px 0px;
            padding: 30px;
        }


        /* .heading::before{
            content: "";
            background: url("imagesused/twenty.jpg");
            position: absolute;
            z-index: -1;
            opacity: 1;
            height: 100px;
        } */
        .heading img {
            top: 0;
            position: absolute;
            height: 500px;
            width: 100%;
            display: flex;
            z-index: -1;

        }


        .content {
            margin: 50px 0px;
        }





        .content p {
            font-size: 1.5rem;
            padding: 20px;
        }

        .title {
            display: block;
            text-align: center;
            padding: 20px;
            font-size: 2.2rem;
        }

        /* FOOTER  */





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
            margin: 0px -34px;
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
    <script src="https://kit.fontawesome.com/44f557ccce.js"></script>


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

    <div class="heading">
        <img src="imagesused/twenty.jpg" alt="">
        <h1>IMMERSE</h1>
    </div>
    <div class="content">
        <!-- <h1 class="title1">ABOUT US</h1> -->


        <p>No matter what you're looking for in a gym, we've got a membership option made for you. All IMMERSE
            members enjoy unlimited access to their home club and the support of our friendly, knowledgeable staff
            anytime you need it. 1 year members receive additional benefits, including the ability to bring a
            guest for free and access to any of our gyms. <br> <br>
            Looking for a little extra guidance or inspiration to help you meet your fitness goals? As a Immerse member,
            you
            can take advantage of our free fitness training or find your motivation by reading real member experiences
            on our review section. <br> <br>
            It’s our goal to provide a clean, safe, welcoming environment for anyone who walks through our door, and all
            the equipment, amenities and support you need once you’re here. <br> <br>

        </p>
        <h2 class="title">Our Story</h2>
        <p>Gymnastica has been around for over 10 years, helping people reach their fitness goals. Our trainers are
            certified and experienced, and our facilities are equipped with state-of-the-art equipment. <br> <br>
            We believe that fitness should be accessible to everyone, which is why we offer affordable membership
            options and a variety of classes to suit all fitness levels.</p>

        <h2 class="title">OUR MISSION</h2>
        <p>Our mission is to help people achieve their fitness goals and live a healthier, happier life. We believe that
            a healthy lifestyle is important, and we want to make it easy for people to incorporate fitness into their
            daily routine.</p>

        <h2 class="title">OUR TEAM</h2>
        <p>Our team of trainers and staff are passionate about fitness and helping others. They are dedicated to
            providing a safe and welcoming environment for all members, and are always available to answer any questions
            or provide guidance. <br> <br>
            10+ Certified Trainners with years of experience in fitness industry. <br> <br>
            5 Management employees to take care of our memebers. <br> <br> <br>
            <b>Welcome to Immerse. The Judgement Free Zone®</b>
        </p>


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