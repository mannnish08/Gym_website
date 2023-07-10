<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projectwork.css">
    <title>Gym Website</title>
    <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alice&family=Domine:wght@400;600&family=Labrada:ital@1&family=Macondo&family=Merienda:wght@300;500;600&family=Shantell+Sans:ital@1&display=swap" rel="stylesheet">

</head>


<body>
    <div class="navbar">
        <div class="left">
            <img src="imagesused/donelogo.png"lt="++++" id="one">
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
            <img src="imagesused/usser1.png" alt="+++" id="two">
            <?php echo "Welcome ". $_SESSION['username']?>
            <button class="navbtn"><a href="logout.php">logout</a></button>
        </div>
    </div>
    <section class="content">
        <h1>LET'S START YOUR<br>JOURNEY</h1>
        <h3>WITH US</h3>
        <button class="btn" type="button"> <a href="https://docs.google.com/forms/d/e/1FAIpQLSfVZBmUaijF7HLHQuhmjY7MkiGA52LrceWbS2ux5m5ZdOA7wA/viewform">join us</a></button>
    </section>

    <section id="services-container">
        <div class="vdo">
            <video autoplay loop muted play-inline center>
                <source src="video/Fitness_Cinematic_video___Gym_commercial___Cinematic_fitness_film___Fitness_commercial(1080p).mp4">
            </video>
        </div>
        <h1 class="honeh">Something For Everyone</h1>
        <div id="services">
            <div id="box1" class="boxes">
                <a href="Strength.html"><img src="imagesused/strenghth.jpg" alt="#StrengthTraining"></a>
                <h2 class="hpp"><a href="Strength.php">Strength</a></h2>
            </div>
            <div id="box2" class="boxes">
                <a href="cadio.php"><img src="imagesused/cardio.jpg" alt=""></a>
                <h2 class="hpp"><a href="cadio.php">Cardio</a></h2>
            </div>
            <div id="box3" class="boxes">
                <a href="dance.php"><img src="imagesused/dance.jpg" alt=""></a>
                <h2 class="hpp"><a href="zumba.php">Zumba</a></h2>
            </div>
            <div id="box4" class="boxes">
                <a href="yoga.php"><img src="imagesused/yoga22.jpg"center alt=""></a>
                <h2 class="hpp"><a href="yoga.php">Yoga</a></h2>
            </div>
        </div>

        <div class="para">
            <p>Getting fit doesn’t work if you only focus on fitness. And going it alone should never be a sign of strength. Our coaches support you in a way no one else can with the best fitness and holistic help inside the gym – and out. And our community of members are waiting to meet you.
            Try Us For Free</p>
        </div>
    </section>
    
    <section class="abt">
        <div class="vdoo">
            <video autoplay loop muted play-inline center slow>
                <source src="video/Gym_cinematic_promotion_video(1080p)_1.mp4">
            </video>
        </div>
        <h1>Exciting Plans</h1>
        <section id="pt">
            <div class="boxtwo">
                <h2 class="h">Unlimited access to everything</h2>
                <h3>₹2,000<span>/month</h3>
                <h3>₹11,000<span>/6months</h3>
                <h3>₹20,000<span>/1year</h3>
                <ul class="ullist">
                    <img src="imagesused/tickk.png" alt="">
                    <li>All equipments</li>
                </ul>
                <ul class="ullist">
                    <img src="imagesused/tickk.png" alt="">
                    <li>Trainers to guide</li>
                </ul>
                <ul class="ullist">
                    <img src="imagesused/tickk.png" alt="">
                    <li>1 session/weak of yoga & dance classes</li>
                </ul>
            </div>
            <div>
                <img src="imagesused/gymsedule.jpg" alt="" center>
            </div>
        </section>
    </section>
    <section class="client-review">
        <div class="rev-section">

            <h2 class="title">Our Members Love Us</h2>
            <p class="note"></p>

            <div class="reviews">

                <div class="review">
                    <div class="head-review">
                        <img src="https://images.unsplash.com/photo-1488161628813-04466f872be2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80"
                            width="250px">
                    </div>
                    <div class="body-review">
                        <div class="name-review">Karan</div>
                        <div class="place-review">badarpur,delhi</div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                        <div class="desc-review">IMMERSE has been awesome to me. Their trainers are exceptional, the overall vibe is great and I have had nothing but good experiences.</div>
                    </div>
                </div>
                <div class="review">
                    <div class="head-review">
                        <img src="https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                            width="250px">
                    </div>
                    <div class="body-review">
                        <div class="name-review">Preeti sharma</div>
                        <div class="place-review">delhi</div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="desc-review">Hands down, ,<br> best choice I’ve made training at Immerse. VERY friendly team who make me actually want to go train.</div>
                    </div>
                </div>
                <div class="review">
                    <div class="head-review">
                        <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            width="250px">
                    </div>
                    <div class="body-review">
                        <div class="name-review">Satyam mishra</div>
                        <div class="place-review">badarpur,new delhi</div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                        <div class="desc-review"> AMAZING GYM, <br> AMAZING WORKOUTS! <br> The staff here is incredibly friendly and extremely qualified!</div>
                    </div>
                </div>

            </div>

        </div>

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