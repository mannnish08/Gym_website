<!DOCTYPE html>
<html>

<head>
    <title>Learning CSS</title>

    <link href="https://fonts.googleapis.com/css?family=Dokdo" rel="stylesheet">

    <style type="text/css">
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

        h1 {
            text-align: center;
        }

        p {
            font-size: 24px;
        }


        .main::before {
            content: "";
            background: url("imagesused/threeused.jpg");
            top: 0px;
            left: 0px;
            position: absolute;
            height: 900px;
            width: 100%;
            z-index: -1;
            opacity: 1;
        }

        header {

            font-family: 'Dokdo', cursive;
            font-size: 30px;
            padding: 20px;
        }

        main {
            height: 600px;
            margin-left: 120px;
            width: 100%;
            margin-top: 40px;
        }

        .box {
            width: 20%;
            float: left;
            padding: 7px;
            padding-left: 10px;
            display: block;
            overflow: hidden;
            border-radius: 3px;

        }

        img {
            width: 100%;
            border-radius: 4px;

        }

        img:hover {
            transform: scale(2, 2);
            transition: .3s transform;

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


    <header>
        <div class="main">

            <h1>
                Photo Gallery <p>IMMERSE Fitness Center</p>
            </h1>
        </div>

    </header>

    <main>
        <div class="box">
            <img
                src="https://media.istockphoto.com/id/1183038884/photo/view-of-a-row-of-treadmills-in-a-gym-with-people.jpg?s=612x612&w=0&k=20&c=VnTSyKHKl-YFOmpFqW_hNyIlis0sFksfcR9Ei3-r29s=">
        </div>
        <div class="box">
            <img
                src="https://media.istockphoto.com/id/1149241593/photo/man-doing-cross-training-exercise-with-rope.jpg?s=612x612&w=0&k=20&c=zYQ51RLNjFHvLvk_QCqx1jY9WXNZTvPFKxuRkh3Oe9c=">
        </div>
        <div class="box">
            <img
                src="https://media.istockphoto.com/id/894242814/photo/cheerful-male-athlete-talking-to-his-friend-on-exercising-training-in-a-health-club.jpg?s=612x612&w=0&k=20&c=LWfxClwkYXbXclssb-mD1_-ZxRREkcJ3pg211PEhzDU=">
        </div>
        <div class="box">
            <img
                src="https://media.istockphoto.com/id/1125866502/photo/eyes-on-the-prize-giving-up-is-never-an-option.jpg?s=612x612&w=0&k=20&c=USn_FYywyYuM8r2Ss808uANQPBl2abXako7cyhcJl0A=">
        </div>
        <div class="box">
            <img
                src="https://media.istockphoto.com/id/601902710/photo/closeup-of-weightlifter-clapping-hands-before-barbell-workout-a.jpg?s=612x612&w=0&k=20&c=0rknDe7xm1zefbQddglWR8xeKRrY4ue4Vhd737kpC2E=">
        </div>
        <div class="box">
            <img
                src="https://media.istockphoto.com/id/1080265654/photo/happy-sweaty-woman-running-on-treadmill-in-a-gym.jpg?s=612x612&w=0&k=20&c=XMV5VXCv724auYUjgw7JYaE3QBHPqlCpv0M0ktonBZQ=">
        </div>
        <div class="box">
            <img
                src="https://media.istockphoto.com/id/909416522/photo/active-senior-man-having-strength-exercise-with-barbell-in-a-gym.jpg?s=612x612&w=0&k=20&c=3wpZNa07mennB8HCmKqcq0q_EEebejY59IRNwjCwQS0=">
        </div>
        <div class="box">
            <img
                src="https://media.istockphoto.com/id/954554026/photo/cross-training-female-athlete-resisting-weight-of-heavy-barbells.jpg?s=612x612&w=0&k=20&c=c3SYqm-eHFAERIATo7DUS7uDyMKsMVg3HrzuTbRIjBs=">
        </div>
    </main>
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