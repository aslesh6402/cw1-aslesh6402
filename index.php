<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/db.php";


    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aslesh Adhikari- Ethical Hacking And Cyber Security</title>

    <!-- 
    - favicon5
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Open+Sans:wght@400;500;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body id="top">

    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <a href="#">
                <h1 class="logo">Aslesh Adhikari</h1>
            </a>

            <button class="nav-toggle-btn" aria-label="Toggle Menu" data-nav-toggle-btn>
        <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" class="close-icon"></ion-icon>
      </button>

            <nav class="navbar container">
                <ul class="navbar-list">

                    <li>
                        <a href="#home" class="navbar-link" data-nav-link>Home</a>
                    </li>

                    <li>
                        <a href="#about" class="navbar-link" data-nav-link>About</a>
                    </li>

                    <li>
                        <a href="#portfolio" class="navbar-link" data-nav-link>Portfolio</a>
                    </li>

                    <li>
                        <a href="#skills" class="navbar-link" data-nav-link>Skills</a>
                    </li>

                    <li>
                        <a href="#contact" class="navbar-link" data-nav-link>Contact</a>
                    </li>

                    <?php if (isset($user)): ?>

                       <li>Hello <?=htmlspecialchars($user["username"])?></li>
                        <li><a href="logout.php">Log out</a></li>
<?php else: ?>
<li><a href="login.php">Login</a></li>
<li><a href="signup.html">Sign Up</a></li>
<?php endif;?>



                </ul>
            </nav>

        </div>
    </header>





    <main>
        <article>

            <!-- 
        - #HERO
      -->

            <section class="hero" id="home">
                <div class="container">

                    <div class="hero-banner">

                        <img src="assets/images/2.jpg" alt="" width="400" height="464" loading="lazy" alt="" class="img-cover">
                        <div class="elem elem-1">
                            <p class="elem-title">2</p>

                            <p class="elem-text">Years of Success</p>
                        </div>

                        <div class="elem elem-2">
                            <p class="elem-title">3+</p>

                            <p class="elem-text">Projects Completed</p>
                        </div>

                        <div class="elem elem-3">
                            <ion-icon name="trophy"></ion-icon>
                        </div>

                        <img src="./assets/images/rotate-img.png" width="169" height="172" alt="I'm developer from New York" class="rotate-img">

                    </div>

                    <div class="hero-content">

                        <h2 class="hero-title">
                            <span>Hello I'm</span>
                            <strong>Aslesh Adhikari</strong> Ethical Hacking And Cyber Security
                        </h2>

                        <p class="hero-text">
                            Hacking is not just a career, it's a responsibility to make the digital world more secure.
                        </p>

                        <div class="btn-group">
                            <a href="#contact" class="btn btn-primary blue">Get a Quote!</a>

                            <a href="#about" class="btn">About Me</a>
                        </div>

                    </div>

                </div>
            </section>





            <!-- 
        - #ABOUT
      -->

            <section class="section about" id="about">
                <div class="container">

                    <figure class="about-banner">

                        <img src="./assets/images/3.jpg" width="800" height="652" loading="lazy" alt="" class="img-cover">



                        <div class="abs-icon abs-icon-1">
                            <ion-icon name="logo-css3"></ion-icon>
                        </div>

                        <div class="abs-icon abs-icon-2">
                            <ion-icon name="logo-javascript"></ion-icon>
                        </div>

                        <div class="abs-icon abs-icon-3">
                            <ion-icon name="logo-angular"></ion-icon>
                        </div>

                    </figure>

                    <div class="about-content">

                        <p class="section-subtitle">I'm a Web Developer with passinated</p>

                        <h2 class="h2 section-title">I Develop Website that Help Peoples</h2>

                        <p class="section-text">
                            I have ability to create websites that serve the purpose of aiding people in various ways. I am passionate about using my skills to make a positive impact on society and help individuals achieve their goals.
                        </p>



                        <a href="#portfolio" class="btn btn-primary blue">View Portfolio</a>

                    </div>

                </div>
            </section>





            <!-- 
        - #PORTFOLIO
      -->

            <section class="section portfolio" id="portfolio">
                <div class="container">

                    <p class="section-subtitle">Portfolio</p>

                    <h2 class="h2 section-title">My Amazing Works</h2>

                    <p class="section-text">
                        It is not just a job for me; it is a calling that drives me to make a positive impact on the lives of others. Guided by my unwavering dedication, I strive to be a catalyst for transformation and growth, empowering individuals to turn their dreams into
                        reality.
                    </p>

                    <ul class="portfolio-list">


                    </ul>

                </div>
            </section>





            <!-- 
        - #SKILLS
      -->

            <section class="section skills" id="skills">
                <div class="container">

                    <p class="section-subtitle">My Skills</p>

                    <h2 class="h2 section-title">Always Ready for Daily challanges</h2>

                    <p class="section-text">
                        I am a cyber Security with a passion for learning. I love to work on projects that are challenging and challenging to complete. I am also a good mentor to help others learn new skills.
                    </p>

                    <ul class="skills-list">

                        <li class="skills-item">
                            <div class="wrapper" style="width: 95%">
                                <h3 class=" skills-title">CSS</h3>

                                <data class="skills-data" value="95">95%</data>
                            </div>

                            <div class="skills-progress-box">
                                <div class="skills-progress" style="width: 95%"></div>
                            </div>
                        </li>

                        <li class="skills-item">
                            <div class="wrapper" style="width: 75%">
                                <h3 class="skills-title">C</h3>

                                <data class="skills-data" value="75">75%</data>
                            </div>

                            <div class="skills-progress-box">
                                <div class="skills-progress" style="width: 75%"></div>
                            </div>
                        </li>

                        <li class="skills-item">
                            <div class="wrapper" style="width: 90%">
                                <h3 class="skills-title">HTML</h3>

                                <data class="skills-data" value="90">90%</data>
                            </div>

                            <div class="skills-progress-box">
                                <div class="skills-progress" style="width: 90%"></div>
                            </div>
                        </li>

                        <li class="skills-item">
                            <div class="wrapper" style="width: 70%">
                                <h3 class="skills-title">Python</h3>

                                <data class="skills-data" value="70">70%</data>
                            </div>

                            <div class="skills-progress-box">
                                <div class="skills-progress" style="width: 70%"></div>
                            </div>
                        </li>

                        <li class="skills-item">
                            <div class="wrapper" style="width: 80%">
                                <h3 class="skills-title">PHP</h3>

                                <data class="skills-data" value="80">80%</data>
                            </div>

                            <div class="skills-progress-box">
                                <div class="skills-progress" style="width: 80%"></div>
                            </div>
                        </li>

                        <li class="skills-item">
                            <div class="wrapper" style="width: 75%">
                                <h3 class="skills-title">JavaScript</h3>

                                <data class="skills-data" value="75">75%</data>
                            </div>

                            <div class="skills-progress-box">
                                <div class="skills-progress" style="width: 75%"></div>
                            </div>
                        </li>

                    </ul>

                </div>
            </section>





            <!-- 
        - #CONTACT
      -->

            <section class="section contact" id="contact">
                <div class="container">

                    <div class="contact-card">

                        <p class="card-subtitle">Don't be shy</p>

                        <h2 class="h2 section-title">Drop Me a Line You like</h2>

                        <div class="wrapper">

                            <form action="mail.php" class="contact-form" method="POST">

                                <input type="text" name="name" placeholder="Name" required class="contact-input">

                                <input type="email" name="email" placeholder="Email" required class="contact-input">

                                <textarea name="message" placeholder="Message" required class="contact-input"></textarea>

                                <button type="submit" class="btn-submit">Submit Message</button>




                            </form>

                            <ul class="contact-list">

                                <li class="contact-item">

                                    <div class="contact-icon">
                                        <ion-icon name="location"></ion-icon>
                                    </div>

                                    <div>
                                        <h3 class="contact-item-title">Address</h3>

                                        <address class="contact-item-link">
                                            tarakeshwor 05 kathamndu nepal
                    </address>
                                    </div>

                                </li>

                                <li class="contact-item">

                                    <div class="contact-icon">
                                        <ion-icon name="mail"></ion-icon>
                                    </div>

                                    <div>
                                        <h3 class="contact-item-title">Email</h3>

                                        <a href="mailto:hello@ethan.com" class="contact-item-link">adhikariaslesh@gmail.com</a>
                                    </div>

                                </li>

                                <li class="contact-item">

                                    <div class="contact-icon">
                                        <ion-icon name="call"></ion-icon>
                                    </div>

                                    <div>
                                        <h3 class="contact-item-title">Phone number</h3>

                                        <a href="tel:+1234567890" class="contact-item-link">+977 9866296130</a>
                                    </div>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>
            </section>






            <!-- 
        - #BLOG
      -->

            <section class="section blog" id="blog">
                <div class="container">

                    <p class="section-subtitle">Latest News</p>

                    <h2 class="h2 section-title">Checkout My Recent Blogs</h2>

                    <p class="section-text">
                        Check out my latest blog posts.
                    </p>

                    <ul class="blog-list">


                    </ul>

                </div>
            </section>

        </article>
    </main>





    <!-- 
    - #FOOTER
  -->

    <footer class="footer">
        <div class="container">

            <p class="copyright">
                &copy; 2022 <a href="#" class="copyright-link">codewithaslesh</a>. All Rights Reseverd
            </p>

            <ul class="footer-list">
                <li>
                    <a href="#" class="footer-link">Terms & Condition</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Privacy Policy</a>
                </li>
            </ul>

        </div>
    </footer>





    <!-- 
    - #BACK TO TOP
  -->

    <a href="#top" class="back-to-top" data-back-to-top>BACK TOP</a>





    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>