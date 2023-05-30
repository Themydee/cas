<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== UNICONS ===============-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/Css/style.css">
    <link href="assets/Img/cas-dark.png" rel="icon">
    

    <title>Contact Us</title>
</head>
<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <img src="assets/Img/cas-dark.png"  width="70px"class="nav__logo logo__dark alt=">
            <img src="assets/Img/cas-light.png"  width="70px"class="nav__logo logo__light alt=">

            <!-- <h1 class="nav__logo logo__light"><a>CAS</a></h1> -->
            <!-- <h1 class="nav__logo logo__dark">C.A.S</h1> -->
            
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link">Home</a>
                    </li>
                    
                    <li class="nav__item">
                        <a href="https://localhost/login/index.php" target="_blank"   class="nav__link">CAS VOTE</a>
                    </li>


                    <li class="nav__item">
                        <a href="contact.php" class="nav__link active-link">Contact</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="uil uil-times"></i>
                </div>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="uil uil-apps"></i>
            </div>

            <a href="#" class="button button__header">Sign Up</a>
        </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== PAGE TITLE ===============-->
        <section class="page__title-area">
            <div class="page__title-wrapper container">
                <h1 class="page__title">Contact Us</h1>

                <nav class="breadstew">
                    <ul class="breadstew__list">
                        <li class="breadstew__item">
                            <a href="index.php" class=" breadstew__link">Home</a>
                        </li>
                        <li class="breadstew__item">
                            <span class="breadstew__link">.</span>
                        </li>
                        <li class="breadstew__item">
                            <span class="breadstew__link">Contact Page</span>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>

        <!--=============== CONTACT ===============-->
        <section class="contact section">
            <div class="contact__container grid container">
                <div class="contact__content">
                    <h2 class="section__title contact__title"> Get in Touch </h2>
                    <p class="contact__subtitle">You have a question or just want to say hi? We would love to hear from you.</p>

                    <form method="POST" class="contact__form">
                        <div class="contact__form-group">
                            <div class="contact__form-div">
                                <input name="name" type="text" class="contact__form-input" placeholder="Your Name">
                            </div>
                            <div class="contact__form-div">
                                <input name="email" type="email" class="contact__form-input" placeholder="Your Email">
                            </div>
                            <div class="contact__form-div">
                                <input name="subject" type="text" class="contact__form-input" placeholder="Subject">
                            </div>
                            <div class="contact__form-div contact__form-area">
                                <textarea name="message" cols="30" rows="10" class="contact__form-input" placeholder="Enter your Message"></textarea>
                            </div>

                            <button class="button" style=" cursor: pointer; border: none; ">Send Message</button>
                        </div>
                    </form>
                </div>

                <div class="contact__group">
                    <div class="contact__info">

                        <div class="contact__item">
                            <i class="uil uil-map-marker contact__icon"></i>

                            <div>
                                <h3 class="contact__item-title">College Of Agricultural Science </h3>
                                <span class="contact__item-subtitle">Landmark University</span>
                                <span class="contact__item-subtitle">Omu-Aran, Kwara State</span>
                            </div>
                            
                        </div>

                        <div class="contact__item">
                            <i class="uil uil-envelope-alt contact__icon"></i>

                            <div>
                                <h3 class="contact__item-title">Email us Directly</h3>
                                <span class="contact__item-subtitle">nifetemiboy@gmail.com</span>
                                <span class="contact__item-subtitle">caaaasvote@gmail.com</span>
                            </div>
                         
                        </div>

                        <div class="contact__item">
                            <i class="uil uil-phone contact__icon"></i>

                            <div>
                                <h3 class="contact__item-title">Call us on </h3>
                                <span class="contact__item-subtitle">07065080140</span>
                                <span class="contact__item-subtitle">09077034764</span>
                            </div>
                        </div>


                        <div class="contact__item">
                            <h3 class="contact__social-title">Follow Us</h3>
                            
                            <div class="contact__social">
                                <a href="https://www.instagram.com/" class="contact__social-link">
                                    <i class="uil uil-instagram"></i>
                                </a>
                                <a href="https://www.twitter.com/" class="contact__social-link">
                                    <i class="uil uil-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com/" class="contact__social-link">
                                    <i class="uil uil-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer section">
        <div class="footer__container grid container">
            <div class="footer__content">
                <img src="assets/Img/cas-light.png"  width="100px"class="nav__logo logo__light alt="">

                <p class="footer__description">We are CAS <br> We are One</p>
                <div class="footer__social">
                    <a href="https://www.instagram.com/" class="footer__social-link">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://www.twitter.com/" class="footer__social-link">
                        <i class="uil uil-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/" class="footer__social-link">
                        <i class="uil uil-linkedin"></i>
                    </a>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">About</h3>

                <ul class="footer__links">
                    <li><a href="#" class="footer__link">About Us</a></li>
                    <li><a href="#" class="footer__link">Newsletter</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Contact Us</h3>

                <ul class="footer__links">
                    <li><a href='mailto:caaasvote@lmu.edu.ng' class="footer__link">Reach us via Email</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Others</h3>

                <ul class="footer__links">
                    <li><a href="news.html" class="footer__link">Our Blog</a></li>
                    <li><a href="#" class="footer__link">Past Questions</a></li>
                    
                </ul>
            </div>
        </div>

        <span class="footer__copy">&#169; CodedFarmer. All Rights reserved</span>
    </footer>

    <!--=============== JS ===============-->
    <script src="assets/Js/main.js"></script>
</body>
</html>