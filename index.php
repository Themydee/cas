<?php
    @include 'database/db.php';
    $query = "SELECT * FROM home";
    $run = mysqli_query($db,$query);
    $user_data = mysqli_fetch_array($run);
?>



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
    <title>CAS</title>
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
                        <a href="index.php" class="nav__link active-link">Home</a>
                    </li>
                    
                    <li class="nav__item">
                        <a href="https://localhost/login/index.php" target="_blank"   class="nav__link">CAS VOTE</a>
                    </li>


                    <li class="nav__item">
                        <a href="contact.php" class="nav__link">Contact</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="uil uil-times"></i>
                </div>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="uil uil-apps"></i>
            </div>

            <a href="https://localhost/blog/index.html" target="_blank" class="button button__header">Our Blog</a>
        </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== HOME ===============-->
        <section class="home" id="home">
            <div class="home__container container">
                <div class="home__data">
                    <h3 class="home__subtitle"><?=$user_data["subtitle"]?></h3>
                    <h1 class="home__title"><?=$user_data["title"]?></h1>
                    <p class="home__description"><?=$user_data["description"]?></p>
                    <a href="" class="button"><?=$user_data["button"]?></a>
                </div>
            </div>

            <div class="about__courses grid">
                <div class="about__course-item">
                    
            <?php
    $query2 = "SELECT * FROM `about_courses` WHERE `about_courses`.`id` = 1";
    $run = mysqli_query($db,$query2);
    $user_data = mysqli_fetch_array($run);

?>
                    <span class="about__course-total"><?=$user_data["course_year"]?></span>
                    <h3 class="about__course-title"><?=$user_data["course_title"]?></h3>
                </div>

                <div class="about__course-item">
                    
                    <?php
            $query2 = "SELECT * FROM `about_courses` WHERE `about_courses`.`id` = 2";
            $run = mysqli_query($db,$query2);
            $user_data = mysqli_fetch_array($run);
        
        ?>
                            <span class="about__course-total"><?=$user_data["course_year"]?></span>
                            <h3 class="about__course-title"><?=$user_data["course_title"]?></h3>
                        </div>


               <div class="about__course-item">
                    
            <?php
    $query2 = "SELECT * FROM `about_courses` WHERE `about_courses`.`id` = 3";
    $run = mysqli_query($db,$query2);
    $user_data = mysqli_fetch_array($run);

?>
                    <span class="about__course-total"><?=$user_data["course_year"]?></span>
                    <h3 class="about__course-title"><?=$user_data["course_title"]?></h3>
                </div>

                <div class="about__course-item">
                    
                    <?php
            $query2 = "SELECT * FROM `about_courses` WHERE `about_courses`.`id` = 4";
            $run = mysqli_query($db,$query2);
            $user_data = mysqli_fetch_array($run);
        
        ?>
                            <span class="about__course-total"><?=$user_data["course_year"]?></span>
                            <h3 class="about__course-title"><?=$user_data["course_title"]?></h3>
                        </div>
            </div>
        </section>

        <!--=============== ABOUT ===============-->
        <section class="about section" id="about">
           <div class="about__container grid container">
                <div class="about__group">

                    <?php
                        $query3 = "SELECT * FROM about_left";
                        $run = mysqli_query($db,$query3);
                        $user_data = mysqli_fetch_array($run);

                    ?>
                    <div class="about__thumb">
                        <img src="assets/Img/<?=$user_data["image-1"]?>" class="about__thumb-img" alt="">
                    </div>

                    <div class="about__banner">
                        <img src="assets/Img/<?=$user_data["image-2"]?>" class="about__banner-img" alt="">
                    </div>

                    <div class="about__students">
                        <img src="assets/Img/<?=$user_data["std-image-1"]?>"  class="about__student-img" alt="">
                        <img src="assets/Img/<?=$user_data["std-image-2"]?>"  class="about__student-img" alt="">
                        <img src="assets/Img/<?=$user_data["std-image-3"]?>"  class="about__student-img" alt="">
                        <img src="assets/Img/<?=$user_data["std-image-4"]?>"  class="about__student-img" alt="">
                        <p class="about__student-details"><?=$user_data["std_details"]?></p>
                    </div>
                </div>
                <div class="about__data">
                    
                        <?php
                            $query = "SELECT * FROM about_right";
                            $run = mysqli_query($db,$query);
                            $user_data = mysqli_fetch_array($run);

                        ?>
                    <h2 class="section__title about__title"><?=$user_data["title-abt"]?></h2>
                    <p class="about__description">
                        <?=$user_data["description-abt"]?>
                    </p>
                    <div class="about__details">
                        <p class="about__details-description">
                            <i class="uil uil-check about__details-icon"></i>
                            <?=$user_data["details-1"]?>
                        </p>
                        <p class="about__details-description">
                            <i class="uil uil-check about__details-icon"></i>
                            <?=$user_data["details-2"]?>
                        </p>
                        <p class="about__details-description">
                            <i class="uil uil-check about__details-icon"></i>
                            <?=$user_data["details-3"]?>
                        </p>
                    </div>
                    <a href="#" class="button button--link">
                        Apply Now
                    </a>
                </div>
           </div> 
        </section>

        <!--=============== ASSOCIATION ===============-->
        <section class="association section" id="association">

        <?php
            $query4 = "SELECT * FROM association";
            $run = mysqli_query($db,$query4);
            $user_data = mysqli_fetch_array($run);

        ?>
            <h2 class="section__title"><?=$user_data["assoc-title"]?></h2>
            <p class="section__subtitle"><?=$user_data["assoc-subtitle"]?></p>

            <div class="association__container grid container">

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 1" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 2" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 3" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 4" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 5" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 6" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>
    
    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 7" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 8" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 9" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://web    .snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 10" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 11" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 12" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 13" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 14" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 15" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 16" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>

    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 17" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>


    <div class="association__item">

        <?php
            $query5 = "SELECT * FROM `association_pan` WHERE `association_pan` . `id` = 18" ;
            $run = mysqli_query($db,$query5);
            $user_data = mysqli_fetch_array($run);

        ?>

        <div class="association__img-box">
            <img src="assets/Img/<?=$user_data["assoc-img"]?>" width="400px" alt="">
        </div>

        <h3 class="association__title"><?=$user_data["assoc-position"]?></h3>
        <span><?=$user_data["assoc-name"]?></span>
        <div class="association__social">

            <a href="https://www.instagram.com/<?=$user_data["assoc-ig"]?> " target="_blank" class="association__social-link">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://www.snapchat.com/<?=$user_data["assoc-sc"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-snapchat-alt"></i>
            </a>
            <a href="https://www.linkedin.com/in/<?=$user_data["assoc-ln"]?>" target="_blank" class="association__social-link">
                <i class="uil uil-linkedin"></i>
            </a>
        </div>

    </div>


    

    </div>
        </section>

        <!--=============== BRANDS ===============-->
        <section class="brand section container">
        <?php
                        $query6 = "SELECT * FROM `brands` " ;
                        $run = mysqli_query($db,$query6);
                        $user_data = mysqli_fetch_array($run);

                    ?>

            <h3 class="brand__title"><?=$user_data["brand-title"]?></h3>

            <div class="brand__container grid">
        
                <a href="https://www.instagram.com/themy_dee"><img src="assets/Img/<?=$user_data["brand-img-1"]?>" alt=""></a>
                <a href="https://www.instagram.com/kayodepelumi"><img src="assets/Img/<?=$user_data["brand-img-2"]?>" alt=""></a>
                <a href="https://www.instagram.com/okpereo"><img src="assets/Img/<?=$user_data["brand-img-3"]?>" alt=""></a>
            </div>

            <span class="brand__button">
                View all <i class="uil uil-arrow-right brand__button-icon"></i>
            </span>
        </section>
        
    </main>

    <!--=============== FOOTER ===============-->
     <footer class="footer section">
        <div class="footer__container grid container">

        <?php
                        $query7 = "SELECT * FROM `footer_header` " ;
                        $run = mysqli_query($db,$query7);
                        $user_data = mysqli_fetch_array($run);

                    ?>
        
            <div class="footer__content">
                <img src="assets/Img/cas-light.png"  width="100px" class="nav__logo logo__light">

                <p class="footer__description"><?=$user_data["footer_desc"]?></p>
                <div class="footer__social">
                    <a href="https://www.instagram.com/<?=$user_data["footer_ig"]?>" class="footer__social-link">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://www.twitter.com/<?=$user_data["footer_twitter"]?>" class="footer__social-link">
                        <i class="uil uil-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/<?=$user_data["footer_linkedin"]?>" class="footer__social-link">
                        <i class="uil uil-linkedin"></i>
                    </a>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">About</h3>

                <ul class="footer__links">
                    <li><a href="#" class="footer__link">About Us</a></li>
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
                    <li><a href="#" class="footer__link">Our Blog</a></li>
                    <li><a href="#" class="footer__link">Past Questions</a></li>
                    
                </ul>
            </div>
        </div>
        <a href="#">
            <span class="footer__copy">&#169; CodedFarmer. All Rights reserved</span>
        </a>
    </footer>

    <!--=============== JS ===============-->
    <script src="assets/Js/main.js"></script>
</body>
</html>