<?php 
   include "../connection.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dressing Hivernal</title>
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
    <!-- glidejs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header section -->
    <header class="header" id="header">
        <!-- navigation section -->
        <div class="navigation">
            <div class="container">
                <div class="nav__center">
                    <div class="nav__header">
                        <div class="nav__logo">
                            <h1><span>L</span>IBRARY</h1>
                        </div>
        
                        <div class="nav__hamburger">
                            <span>
                                <i class="fas fa-bars"></i>
                            </span>
                        </div>
                    </div>

                        <div class="nav__menu">
                            <div class="menu__top">
                                <h1 class="nav__category"><span>L</span>IBRARY</h1>
                                <div class="close__toggle">
                                    <span><i class="fas fa-times"></i></span>
                                </div>
                            </div>
                            <ul class="nav__list">
                                <li class="nav__item">
                                    <a href="#header" class="nav__link scroll-link">Home</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#featured" class="nav__link scroll-link">Featured</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#blog" class="nav__link scroll-link">Blog</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#newsletter" class="nav__link scroll-link">Subscribe</a>
                                </li>
                                <li class="nav__item">
                                    <a href="../librarian/loginL.php" class="nav__link">Login</a>
                                </li>
                                <!-- <li class="nav__item">
                                    <a href="#" class="nav__link">Register</a>
                                </li> -->
                            </ul>
        
                            <ul class="nav__icons">
                                <a href="#" class="icon__item">
                                    <!-- <i class="fas fa-search icon"></i> -->
                                </a>
        
                                <a href="../librarian/displayStudentInfo.php" class="icon__item">
                                    <i class="far fa-user icon"></i>
                                </a>
        
                                <a href="../librarian/send_message.php" class="icon__item">
                                    <i class="fa-solid fa-envelope icon"></i>
                                    <span>0</span>
                                </a>
                            </ul>
                        </div>
                </div>
            </div>
        </div>

        <!-- hero -->
        <div class="hero">
            <div class="hero__content container">
                <h1>
                    <span>Always at your <span class="color">disposal</span> no matter what</span>
                    <span><span class="color">L</span>IBRARY the online book issueing plateform</span>
                </h1>

                <!-- <a href="#" class="btn btn-hero">Shop Now</a> -->
            </div>

            <a href="#new__arrival" class="goto__next scroll-link">
                <span>
                    <i class="fas fa-chevron-down"></i>
                </span>
            </a>
            
        </div>
    </header>
    <!-- header sections ends -->

    <!-- main section -->
    <main>
        <!-- new arrival -->
        <section class="section new__arrival" id="new__arrival">
            <div class="arrivals container">
                <div class="title">
                    <h1 class="primary__title">our environments</h1>
                </div>

                <div class="arrival__center">
                    <div class="product">
                        <div class="img__container">
                            <img src="education/IMG_2473.JPG" alt="">
                        </div>

                        <div class="product__bottom">
                            <div class="rating">
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="far fa-star"></i>
                                </span>
                            </div>
                            <h3>siantou university - coron</h3>
                            <a href="#">visit</a>
                        </div>
                    </div>

                    <div class="product">
                        <div class="img__container">
                            <img src="education/IMG_2469.JPG" alt="">
                        </div>

                        <div class="product__bottom">
                            <div class="rating">
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="far fa-star"></i>
                                </span>
                            </div>
                            <h3>siantou university institute - mvogmbi</h3>
                            <a href="#">visit</a>
                        </div>
                    </div>

                    <div class="product">
                        <div class="img__container">
                            <img src="education/IMG_2470.JPG" alt="">
                        </div>

                        <div class="product__bottom">
                            <div class="rating">
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="far fa-star"></i>
                                </span>
                            </div>
                            <h3>siantou university institute - biteng</h3>
                            <a href="#">visit</a>
                        </div>
                    </div>

                    <!-- <div class="product">
                        <div class="img__container">
                            <img src="images/item4.PNG" alt="">
                        </div>

                        <div class="product__bottom">
                            <div class="rating">
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>
                                    <i class="far fa-star"></i>
                                </span>
                            </div>
                            <h3>Polar Skate Co Devil T Shirt</h3>
                            <a href="#">Add To Cart</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <!-- cart slide -->
        <section class="cart__slide">
            <div class="arrival__slide container">
                <div class="glide" id="glide">
                    <div class="glide__track" data-glide-el="track">
                      <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="arrival">
                                <div class="cart__like">
                                    <div class="image__holder">
                                        <img src="education/IMG_2496.PNG" alt="">
                                    </div>
                                    <div class="cart__details">
                                        <h1>availability of books</h1>
                                        <p>
                                            we offer and present books to students according to the semester program presented by the school
                                            administrative system in every academic specialty
                                        </p>
                                        <div class="rating">
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="far fa-star"></i>
                                            </span>
                                        </div>
                                        <!-- <div class="colors">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div> -->
                                        <!-- <div class="btn__group">
                                            <button>Add To Cart</button>
                                            <button>14000 FCFA</button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="arrival">
                                <div class="cart__like">
                                    <div class="image__holder">
                                        <img src="education/IMG_2494.PNG" alt="">
                                    </div>
                                    <div class="cart__details">
                                        <h1>book quality</h1>
                                        <p>
                                            book quality is always at the rendez-vous especially when it comes 
                                            in rendering or keeping them at the disosal of students them to students.
                                            this also beneficiary for the teachers since they too have to make more research in order
                                            to provide adequate resposes to students.
                                        </p>
                                        <div class="rating">
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="far fa-star"></i>
                                            </span>
                                        </div>
                                        <!-- <div class="colors">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div> -->
                                        <!-- <div class="btn__group">
                                            <button>Add To Cart</button>
                                            <button>14000 FCFA</button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="arrival">
                                <div class="cart__like">
                                    <div class="image__holder">
                                        <img src="education/IMG_2497.PNG" alt="">
                                    </div>
                                    <div class="cart__details">
                                        <h1>entertainement</h1>
                                        <p>
                                            with the slogan "learning without playing makes jack a dull boy", our
                                            plateform <span>L</span>IBRARY offers extra academic documentaries and 
                                            books such as fashion, sports, latest news around the world, 
                                            mangas and educational books about our environment.
                                        </p>
                                        <div class="rating">
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="far fa-star"></i>
                                            </span>
                                        </div>
                                        <!-- <div class="colors">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div> -->
                                        <!-- <div class="btn__group">
                                            <button>Add To Cart</button>
                                            <button>14000 FCFA</button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="arrival">
                                <div class="cart__like">
                                    <div class="image__holder">
                                        <img src="education/IMG_2495.PNG" alt="">
                                    </div>
                                    <div class="cart__details">
                                        <h1>accessiblity</h1>
                                        <p>
                                            accessibility here is 100% enjoyable because not only do we have students who 
                                            have access to our products and services by simply getting to the library hall, but there
                                            is also a plateform across this that helps in managing far away students and even those who need e-books.
                                        </p>
                                        <div class="rating">
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="far fa-star"></i>
                                            </span>
                                        </div>
                                        <!-- <div class="colors">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="btn__group">
                                            <button>Add To Cart</button>
                                            <button>14000 FCFA</button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </li>

                      </ul>
                     </div>
                     <!-- arrows -->
                     <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" id="glide__arrow" data-glide-dir="<">prev</button>
                        <button class="glide__arrow glide__arrow--right" id="glide__arrow" data-glide-dir=">">next</button>
                     </div>
                      <!-- thumbnails -->
                      <div class="glide__bullets" id="glide__bullets" data-glide-el="controls[nav]">
                        <button class="glide__bullet box" id="glide__bullet" data-glide-dir="=0">
                            <div class="thumbnail">
                                <img src="education/IMG_2496.PNG" alt="">
                            </div>
                        </button>

                        <button class="glide__bullet box" id="glide__bullet" data-glide-dir="=1">
                            <div class="thumbnail">
                                <img src="education/IMG_2494.PNG" alt="">
                            </div>
                        </button>

                        <button class="glide__bullet box" id="glide__bullet" data-glide-dir="=2">
                            <div class="thumbnail">
                                <img src="education/IMG_2497.PNG" alt="">
                            </div>
                        </button>

                        <button class="glide__bullet box" id="glide__bullet" data-glide-dir="=3">
                            <div class="thumbnail">
                                <img src="education/IMG_2495.PNG" alt="">
                            </div>
                        </button>
                      </div>
                  </div>                  
            </div>
        </section>

        <!-- special offers -->
        <section class="section special__offer">
            <div class="offer__container">
                <h1>REGISTER NOW</h1>
                <p>to have access to all our services</p>
                <a href="../student/registration.php">OK MOVE</a>
            </div>
        </section>

        <!-- featured products -->
        <section class="section featured" id="featured">
            <div class="featured__container container">
                <div class="title">
                    <h1 class="primary__title">academic specialties</h1>
                </div>
            </div>

            <div class="featured__center">
                <div class="product">
                    <div class="img__container">
                        <img src="education/IMG_2481.PNG" alt="">
                    </div>

                    <div class="product__bottom">
                        <div class="rating">
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                        <h3>software engineering</h3>
                        <a href="#">show more</a>
                    </div>
                </div>

                <div class="product">
                    <div class="img__container">
                        <img src="education/IMG_2480.PNG" alt="">
                    </div>

                    <div class="product__bottom">
                        <div class="rating">
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                        <h3>database management</h3>
                        <a href="#">show more</a>
                    </div>
                </div>

                <div class="product">
                    <div class="img__container">
                        <img src="education/IMG_2489.PNG" alt="">
                    </div>

                    <div class="product__bottom">
                        <div class="rating">
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                        <h3>road and civil engineering</h3>
                        <a href="#">show more</a>
                    </div>
                </div>

                <div class="product">
                    <div class="img__container">
                        <img src="education/IMG_2486.PNG" alt="">
                    </div>

                    <div class="product__bottom">
                        <div class="rating">
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                        <h3>electro-technique engineering</h3>
                        <a href="#">show more</a>
                    </div>
                </div>

                <div class="product">
                    <div class="img__container">
                        <img src="education/IMG_2487.PNG" alt="">
                    </div>

                    <div class="product__bottom">
                        <div class="rating">
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                        <h3>network and security</h3>
                        <a href="#">show more</a>
                    </div>
                </div>

                <div class="product">
                    <div class="img__container">
                        <img src="education/IMG_2483.PNG" alt="">
                    </div>

                    <div class="product__bottom">
                        <div class="rating">
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                        <h3>nursing and medicine</h3>
                        <a href="#">show more</a>
                    </div>
                </div>

                <div class="product">
                    <div class="img__container">
                        <img src="education/IMG_2485.PNG" alt="">
                    </div>

                    <div class="product__bottom">
                        <div class="rating">
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                        <h3>computer graphics and web-design</h3>
                        <a href="#">show more</a>
                    </div>
                </div>

                <div class="product">
                    <div class="img__container">
                        <img src="education/IMG_2488.PNG" alt="">
                    </div>

                    <div class="product__bottom">
                        <div class="rating">
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                        <h3>transports and logistics</h3>
                        <a href="#">show more</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- latest news -->
        <section class="blog" id="blog">
            <div class="blog__container container">
                <div class="title">
                    <h1 class="primary__title">Latest News</h1>
                </div>
                <div class="blog__contents">
                    <div class="blog__center">
                        <div class="blog__box">
                            <div class="img__cover">
                                <img src="images/banner4.JPG" alt="">
                            </div>
                            <div class="box__content">
                                <h2>Here are the trends i see coming this fall</h2>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="blog__center">
                        <div class="blog__box">
                            <div class="img__cover">
                                <img src="images/pic10.JPG" alt="">
                            </div>
                            <div class="box__content">
                                <h2>Here are the trends i see coming this fall</h2>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="blog__center">
                        <div class="blog__box">
                            <div class="img__cover">
                                <img src="images/pic11.JPG" alt="">
                            </div>
                            <div class="box__content">
                                <h2>Here are the trends i see coming this fall</h2>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- newsletter -->
        <section class="section newsletter" id="newsletter">
           <div class="newsletter__container container">
               <div class="title">
                   <h1 class="primary__title">Newsletter</h1>
               </div>

               <div class="newsletter__center">
                   <div class="newsletter__box">
                       <h2>Newsletter</h2>
                       <p>Subscribe to our newsletter and obtain 20% off your product</p>
                   </div>

                   <div class="newsletter__box">
                       <form action="#">
                           <input type="email" placeholder="Your email please">
                           <button>Subscribe</button>
                       </form>
                   </div>
               </div>
           </div>
        </section>
    </main>

    <!-- glide js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <!--custom js -->
    <script src="js/index.js"></script>
    <script src="js/slider.js"></script>
</body>
</html>