<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            /* font-family: Georgia, 'Times New Roman', Times, serif; */
        }





        /* NAVBAR SECTION  */




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

        .content {
            height: 252px;
            ;
        }

        .content::before {
            content: "";
            background: url("imagesused/yoga22.jpg") center center;
            top: 0px;
            position: absolute;
            height: 400px;
            width: 100%;
            z-index: -1;
            opacity: 1;
        }

        .content h1 {
            color: white;
            font-size: 4rem;
            display: block;
            text-align: center;
            margin: 90px;
        }

        .about {
            margin: 50px 70px;
            display: flex;
        }

        .about h1 {
            color: black;
            font-size: 2.5rem;
            margin: 20px;
        }

        .about h3 {
            font-size: 1.9rem;
            margin: 20px;
        }

        .about p {
            font-size: 1.3rem;
            margin: 20px;
        }

        .about img {
            margin: 20px;
            height: 300px;
            width: 250px;
        }


        .about2 {
            margin: 50px 70px;
        }

        .about2 h3 {
            font-size: 1.9rem;
            margin: 20px;
        }

        .about2 p {
            font-size: 1.3rem;
            margin: 30px;
        }

        .ullist {
            list-style: none;
            display: flex;
            margin: 30px 0px 10px 14px;
            font-size: 19px;

        }

        .ullist img {
            display: flex;
            margin: 0px;
            padding: 0px;
            height: 20px;
            width: 25px;
        }

        .click {
            margin: 20px;
            background-color: rgb(227, 72, 72);
            height: 50px;
        }

        .click h1 {
            color: white;
            padding: 10px;
        }

        .benifits {
            margin: 50px 70px;
            display: flex;
        }

        .benifits h2 {
            margin: 20px;
            font-size: 1.8rem;
        }

        .benifits img {
            margin: 20px;
            height: 300px;
            width: 250px;
        }

        .benifits h1 {
            font-size: 1.9rem;
            margin: 20px;
        }

        .benifits p {
            font-size: 1.3rem;
            margin: 30px;
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

    <section class="content">
        <h1>Yoga</h1>
    </section>
    <section class="about">
        <div class="part1">
            <h1><b>Benefits of Yoga</b></h1>
            <h3>Build Muscle, Lose Weight & Feel Great</h3>
            <p>Looking to improve your overall health? Make sure strength training is a part of your health and fitness
                routine. Strength training offers many benefits and is often a fundamental component of exercise
                programs. World Gym® offers strength training classes that will work one or more muscle to help you
                build muscle, lose weight, and increase strength. Weight training is a type of exercise using either
                equipment or bodyweight to build muscle mass. Often referred to as resistance training or weight
                training, strength training is one of our most popular classes, as it offers benefits for just about
                everyone, regardless of their fitness goals.</p>
        </div>
        <img src="https://images.pexels.com/photos/6454159/pexels-photo-6454159.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
    </section>
    <section class="about2">
        <h3>What to Expect in a Yoga</h3>
        <p>At World Gym, we always keep our classes fresh. It’s tough to stay motivated and reach goals when you do the
            same thing day in and day out. That’s why we offer a variety of group workout classes that ensure you’ll
            never get bored. Our strength training classes incorporate several different types of exercises that work
            every area of your body. You can expect to find some of the following in these classes.</p>
        <ul class="ullist">
            <img src="imagesused/tickk.png" alt="">
            <li>Free weights, including dumbbells, kettlebells, barbells, and medicine balls</li>
        </ul>
        <ul class="ullist">
            <img src="imagesused/tickk.png" alt="">
            <li>Resistance bands and loop bands</li>
        </ul>
        <ul class="ullist">
            <img src="imagesused/tickk.png" alt="">
            <li>Suspension equipment like straps and ropes</li>
        </ul>
        <p>Our classes will also incorporate bodyweight exercises that use gravity and your own weight to build muscle.
            These will include everything from push-ups to squats to lunges.</p>


        <div class="click">
            <h1><a href="">Click here.</a> To Join Now</h1>
        </div>
    </section>

    <section class="benifits">
        <div class="part1">
            <h1><b>Benefits of Yoga </b></h1>
            <p>Looking to improve your overall health? Make sure strength training is a part of your health and fitness
                routine. Strength training offers many benefits and is often a fundamental component of exercise
                programs. World Gym® offers strength training classes that will work one or more muscle to help you
                build muscle, lose weight, and increase strength. Weight training is a type of exercise using either
                equipment or bodyweight to build muscle mass. Often referred to as resistance training or weight
                training, strength training is one of our most popular classes, as it offers benefits for just about
                everyone, regardless of their fitness goals.</p>
        </div>
        <img src="imagesused/strenghth.jpg" alt="">
    </section>

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