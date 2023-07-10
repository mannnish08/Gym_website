<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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

        .intro {
            height: 300px;
        }

        .intro h1 {
            margin: 130px 10px 10px 10px;
            color: white;
            font-size: 3rem;
        }

        .intro h3 {
            color: white;
            margin: 155px 10px;
            font-size: 1.2rem;

        }

        .intro::before {
            content: "";
            position: absolute;
            background: url("imagesused/fiveused.jpg");
            z-index: -1;
            opacity: 1;
            top: 0%;
            left: 0%;
            height: 500px;
            width: 100%;

        }

        /* .excercise img{
            width: 600px;
            height: 500px;
        }
        .excercise h3{
            font-size: 2.3rem;
        }
        .excercise p{
            font-size: 1.8rem;
        }  */

        #hone {
            /* background-color: #000000; */
            margin: 0px;
            padding: 0px;
            display: flex;
            justify-content: center;
            font-size: 3rem;
            height: 122px;
        }

        .honeh {
            font-size: 3rem;
            margin: 20px;
            padding: 20px;
        }

        .para {
            font-size: 1.3rem;
        }


        /* STRENTH TRAINING  */

        .abt {
            /* background-color: black; */
            height: 2500px;
            padding: 40px 0px;
        }


        #st {
            height: 500px;
            display: flex;
            padding: auto;
        }


        #st img {
            height: 402px;
            width: 400px;
            border-radius: 20px;
        }


        .boxone {
            /* border: 2px solid red; */
            width: 500px;
            display: flex;
            padding: 2px 2px;
            margin: 7px 59px 10px 16px;
            border-radius: 20px;

        }






        /* SECOND BOX  */


        #pt {
            height: 500px;
            display: flex;
            margin: 10px;
            padding: auto;
        }



        #pt img {
            height: 402px;
            padding: 19px 3px 12px 14px;
            margin: 17px 0px 17px 69px;
            width: 400px;
            border-radius: 40px;
        }

        .boxtwo {
            /* border: 2px solid red; */
            padding: 36px;
            margin: 5px 29px 5px 20px;
            border-radius: 20px;
            width: 634px;
            /* background-color: rgb(252, 241, 241); */
        }





        #ct {
            height: 500px;
            display: flex;
            margin: 7px;
            padding: auto;
        }


        #ct img {
            height: 402px;
            width: 400px;
            border-radius: 20px;
        }


        .h {
            /* text-align: center; */
            display: flex;
            justify-content: center;
            font-size: 2.5rem;
            margin: 8px 4px;
            padding: 11px 0px;
        }

        .container {
            max-width: 1170px;
            /* margin: auto; */
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        ul {
            list-style: none;
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

    <section class="intro">
        <h1>TOP EXERCISES THAT SHOULD BE IN YOUR <br> WORKOUT ROUTINE</h1>
        <h3>Though there's no definitive list of exercises, these moves should get consideration.</h3>
    </section>
    <section class="abt">
        <section id="st">
            <div class="boxone">
                <img src="imagesused/deadlift.jpg" alt="">
            </div>
            <div class="boxone01">
                <h2 class="h">Back: Deadlift</h2>
                <p class="para">The bread and butter of countless gym routines, this move, if done properly, will
                    predominantly engage your back and legs, while building overall strength for you entire body. If you
                    want to master the deadlift, check out this article <br><br>While most people are fixated with
                    building up their chest or biceps, a strong, muscular back is fundamental to your overall strength
                    and fitness—with the added bonus of looking pretty damn good when you take your shirt off. Do you
                    want to get a V-tapered back so thick that it’ll even show under your shirts? In order to achieve
                    the back of your dreams, you need to focus on compound movements using progressive overload
                    techniques. Thankfully, all you need to accomplish that is a bench and a barbell.</p>
            </div>
        </section>
        <section id="pt">
            <div class="boxtwo">
                <h2 class="h">Back: T-Bar Rows</h2>
                <p class="para">As the favorite back exercise of Arnold Schwarzenegger himself, the T-bar row transcends
                    all mere mortal workouts simply because of the Austrian Oak’s blessing. Here’s how to do it.
                    <br><br>Before they had any high-tech equipment at their disposal, bodybuilders lifted nearly
                    anything they could get their hands on in the gym to make the muscular gains they wanted. One of
                    their favorite and most utilized inventions was the T-bar row – minus the shiny coat of paint and
                    soft chest pad. That’s right: State-of-the-art meant a barbell with a few plates on one side.
                </p>
            </div>
            <div>
                <img src="imagesused/sixused.jpg" alt="">
            </div>
        </section>
        <section id="st">
            <div class="boxone">
                <img src="imagesused/curl.jpg" alt="">
            </div>
            <div class="boxone01">
                <h2 class="h">Arms: Seated Incline Dumbbell Curl</h2>
                <p class="para">Staying seated while curling may seem like just a slight adjustment to standing, but you
                    won’t be able to deny how hard your arms are working with this move. Sit on an adjustable bench
                    between 45 and 60 degrees for the ideal effect.<br><br>Ask seven people what the seven best arm
                    exercises of all-time are and answers are likely to vary drastically. Movements that spark muscle
                    growth for one person may not yield the same results for another. (That’s another reason we’re
                    constantly on you to change your exercise selection, sets, reps and rest periods on a consistent
                    basis.)</p>
            </div>
        </section>
        <section id="pt">
            <div class="boxtwo">
                <h2 class="h">Arms: Dips</h2>
                <p class="para">You don’t need any fancy equipment for dips (even a park bench will do), which makes
                    this an ideal bodyweight workout for triceps. The different variations available can also target
                    your pecs.<br><br>There are few exercises I would refer to as classics, but the basic “Dip” is
                    certainly one of them. This movement has been around forever, and not only is this because it does
                    not necessarily take any specialized equipment to perform it, but also because it is one of the most
                    effective exercises one can do for building upper body mass and strength.</p>
            </div>
            <div>
                <img src="imagesused/dips.jpg" alt="">
            </div>
        </section>
        <section id="st">
            <div class="boxone">
                <img src="imagesused/bench press.jpg" alt="">
            </div>
            <div class="boxone01">
                <h2 class="h">Bench Press Boost</h2>
                <p class="para">Back in my younger days one of my biggest goals was to be able to bench press five
                    “plates” on each side of an Olympic bar, or 495 lb. I had eventually progressed to 455 but stalled
                    at this weight and could seem to go no further. Then I added weighted dips into my routine on a
                    regular basis and as I increased the poundage I could do in this movement, I also began to improve
                    my bench press. At the point I could do a set of dips strictly with three plates hanging at my waist
                    I successfully hit 495 for a single in the bench press! Yes, dips can help you “boost your bench!
                </p>
            </div>
        </section>
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