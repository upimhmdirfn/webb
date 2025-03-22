<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="TemplateMo">

    <title>Tugas Besar Mata Kuliah Coding</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/magnific-popup.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">


</head>

<body>
<?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mutiara_db"; // Ganti dengan nama database Anda
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO pesan_mutiara (name, email, message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            $alertMessage = "Pesan kamu sudah aku terima, nanti aku balas yaa";
        } else {
            $alertMessage = "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close connection
    $conn->close();
    ?>


    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="index.html" class="navbar-brand mx-auto mx-lg-0">N E F A</a>

            <div class="d-flex align-items-center d-lg-none">
                <i class="navbar-icon bi-telephone-plus me-3"></i>
                <a class="custom-btn btn" href="#section_5">
                    +62 812-7411-5754
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Hobby</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_5">Contact</a>
                    </li>
                </ul>

                <div class="d-lg-flex align-items-center d-none ms-auto">
                    <i class="navbar-icon bi-telephone-plus me-3"></i>
                    <a class="custom-btn btn" href=" #section_5">
                        +62 812-7411-5754
                    </a>
                </div>
            </div>

        </div>
    </nav>

    <main>

        <section class="hero d-flex justify-content-center align-items-center warna" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-12">
                        <div class="hero-text">
                            <div class="hero-title-wrap d-flex align-items-center mb-4">
                                <img src="images/jenong5.jpg" class="avatar-image avatar-image-large img-fluid" alt="">

                                <h1 class="hero-title ms-3 mb-0">Hewwooo!</h1>
                            </div>

                            <h2 class="mb-4">I’m Mutiara Nefa Andini</h2>
                            <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">Let's begin</a></p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12 position-relative">
    <div class="hero-image-wrap" style="background-image: url('images/jenong19.jpg'); background-size: cover; background-position: center;">
    </div>
</div>

</div>

</div>



                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#F5F5DC" fill-opacity="1"
                    d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z">
                </path>
            </svg>
        </section>


        <section class="about section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <img src="images/jenong1.jpg" class="about-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <div class="about-thumb">

                            <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                                <h2 class="text-white me-4 mb-0">My Story</h2>

                                <img src="images/jenong4.jpg" class="avatar-image img-fluid" alt="">
                            </div>

                            <h3 class="pt-2 mb-3">a little bit about Jenong</h3>



                            <p>MMutiara is a dedicated student in her law studies. In addition to focusing on her
                                education, she also has many interests and hobbies that make her life balanced and
                                colorful. Her love for mathematics shows her analytical side, while her hobbies of
                                painting and observing the sky reveal her creative and romantic nature. Mutiara is a
                                cheerful and enthusiastic person who always enjoys every moment of her life.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="featured section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <div class="profile-thumb">
                            <div class="profile-title">
                                <h4 class="mb-0">Information</h4>
                            </div>

                            <div class="profile-body">
                                <p>
                                    <span class="profile-small-title">Name</span>
                                    <span>Mutiara Nefa Andini</span>
                                </p>

                                <p>
                                    <span class="profile-small-title">Birthday</span>
                                    <span>Dec 04, 2003</span>
                                </p>

                                <p>
                                    <span class="profile-small-title">Phone</span>
                                    <span><a href="tel: 62 812-7411-5754">+62 812-7411-5754</a></span>
                                </p>

                                <p>
                                    <span class="profile-small-title">Email</span>
                                    <span><a href="mailto:hello@josh.design">mutiaranefaandini04@gmail.com</a></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <div class="about-thumb">
                            <div class="row">
                                <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                    <strong class="featured-numbers">SDN 10</strong>

                                    <p class="featured-text">Argamakmur</p>
                                </div>

                                <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                    <strong class="featured-numbers">SMPN 1</strong>

                                    <p class="featured-text">Argamakmur</p>
                                </div>

                                <div class="col-lg-6 col-6 pt-4">
                                    <strong class="featured-numbers">SMAN 1</strong>

                                    <p class="featured-text">Argamakmur</p>
                                </div>

                                <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                    <strong class="featured-numbers">HUKUM</strong>

                                    <p class="featured-text">Universitas Bengkulu</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="clients section-padding">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12 col-12">
                        <h3 class="text-center mb-5">Schools I've had studied</h3>
                    </div>

                    <div class="col-lg-2 col-4 ms-auto clients-item-height">
                        <img src="images/clients/v.svg" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 clients-item-height">
                        <img src="images/clients/xc.png" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 clients-item-height">
                        <img src="images/clients/hehe.jpeg" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 clients-item-height">
                        <img src="images/clients/x.svg" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 me-auto clients-item-height">
                        <img src="images/clients/v.svg" class="clients-image img-fluid" alt="">
                    </div>

                </div>
            </div>
        </section>


        <section class="services section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                            <img src="images/jenong2.jpg" class="avatar-image img-fluid" alt="">

                            <h2 class="text-white ms-4 mb-0">Hobbies</h2>
                        </div>

                        <div class="row pt-lg-5">
                            <div class="col-lg-6 col-12">
                                <div class="services-thumb">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="mb-0">Mathematic</h3>

                                        <div class="services-price-wrap ms-auto">
                                            <p class="services-price-text mb-0">⋆.˚🦋༘⋆</p>
                                            <div class="services-price-overlay"></div>
                                        </div>
                                    </div>

                                    <p> As a lover of mathematics, you find joy in exploring the world of numbers, patterns, and structures. You might enjoy solving math puzzles, tackling problems, or even just appreciating the beauty in the simplicity of numbers.


                                    </p>

                                    <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                    <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                        <i class="services-icon bi-globe"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="services-thumb services-thumb-up">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="mb-0">Drawing</h3>

                                        <div class="services-price-wrap ms-auto">
                                            <p class="services-price-text mb-0">⋆.˚🦋༘⋆</p>
                                            <div class="services-price-overlay"></div>
                                        </div>
                                    </div>

                                    <p>Drawing is a way for you to express your creativity and imagination. Through pencil strokes or brushstrokes, you bring ideas and emotions to life in visual form. You may find peace and satisfaction in the process of creation, or perhaps you're inspired by the world around you to create stunning works of art.</p>

                                    <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                    <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                        <i class="services-icon bi-lightbulb"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="services-thumb">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="mb-0">Selfies</h3>

                                        <div class="services-price-wrap ms-auto">
                                            <p class="services-price-text mb-0">⋆.˚🦋༘⋆</p>
                                            <div class="services-price-overlay"></div>
                                        </div>
                                    </div>

                                    <p>For you, selfies are a way to share important moments in your life and express yourself visually. You enjoy capturing special moments, happiness, or even just your best appearance on any given day. Through selfies, you share slices of your life with the world, creating digital memories that are precious.</p>

                                    <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                    <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                        <i class="services-icon bi-phone"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="services-thumb services-thumb-up">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="mb-0">Research</h3>

                                        <div class="services-price-wrap ms-auto">
                                            <p class="services-price-text mb-0">⋆.˚🦋༘⋆</p>
                                            <div class="services-price-overlay"></div>
                                        </div>
                                    </div>

                                    <p>TYou are a diligent knowledge seeker, enjoying exploration and discovery across various topics. Through research, you satisfy your curiosity about the world and everything in it. You might delve into topics ranging from science to history, finding satisfaction in uncovering new facts and expanding your understanding of the world.</p>

                                    <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                    <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                        <i class="services-icon bi-google"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="projects section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-md-8 col-12 ms-auto">
                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                            <img src="images/jenong5.jpg" class="avatar-image img-fluid" alt="">

                            <h2 class="text-white ms-4 mb-0">Galleries</h2>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="projects-info">
                                <small class="projects-tag">Branding</small>

                                <h3 class="projects-title">Shoppin'</h3>
                            </div>

                            <a href="images/projects/jenong2.jpg" class="popup-image">
                                <img src="images/projects/jenong2.jpg" class="projects-image img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="projects-info">
                                <small class="projects-tag">Orientation</small>

                                <h3 class="projects-title">Campus</h3>
                            </div>

                            <a href="images/projects/jenong13.jpg" class="popup-image">
                                <img src="images/projects/jenong13.jpg" class="projects-image img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="projects-info">
                                <small class="projects-tag">Beauty</small>

                                <h3 class="projects-title">Overall</h3>
                            </div>

                            <a href="images/projects/jenong6.jpg" class="popup-image">
                                <img src="images/projects/jenong6.jpg" class="projects-image img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="contact section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                            <img src="images/jenong16.jpg" class="avatar-image img-fluid" alt="">

                            <h2 class="text-white ms-4 mb-0">Say Hi</h2>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-3 col-md-6 col-12 pe-lg-0">
                        <div class="contact-info contact-info-border-start d-flex flex-column">
                            <strong class="site-footer-title d-block mb-3">Website for</strong>

                            <ul class="footer-menu">
                                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Tugas </a></li>

                                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Besar</a></li>

                                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Mata Kuliah</a></li>

                                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Coding</a></li>
                            </ul>

                            <strong class="site-footer-title d-block mt-4 mb-3">Stay connected</strong>

                            <ul class="social-icon">
                                <li class="social-icon-item"><a href="https://x.com/berbiiiii"
                                        class="social-icon-link bi-twitter"></a></li>

                                <li class="social-icon-item"><a href="https://www.instagram.com/mutiaranefa/"
                                        class="social-icon-link bi-instagram"></a></li>

                                <li class="social-icon-item"><a href="#" class="social-icon-link bi-pinterest"></a></li>

                                <li class="social-icon-item"><a
                                        href="https://www.facebook.com/profile.php?id=100007804755471"
                                        class="social-icon-link bi-facebook"></a></li>
                            </ul>

                            <strong class="site-footer-title d-block mt-4 mb-3">Website by</strong>

                            <p class="mb-0">Mutiara Nefa Andini <b>B1A023172</b></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 ps-lg-0">
                        <div class="contact-info d-flex flex-column">
                            <strong class="site-footer-title d-block mb-3">About</strong>

                            <p class="mb-2">
                                Mutiara is a dedicated student in her law studies. In addition to focusing on her
                                education, she also has many interests and hobbies that make her life balanced and
                                colorful. Her love for mathematics shows her analytical side, while her hobbies of
                                painting and observing the sky reveal her creative and romantic nature. Mutiara is a
                                cheerful and enthusiastic person who always enjoys every moment of her life.
                            </p>

                            <strong class="site-footer-title d-block mt-4 mb-3">Email</strong>

                            <p>
                                <a href="mailto:mutiaranefaandini04@gmail.com">
                                    mutiaranefaandini04@gmail.com
                                </a>
                            </p>

                            <strong class="site-footer-title d-block mt-4 mb-3">Call</strong>

                            <p class="mb-0">
                                <a href="tel: 62 812-7411-5754">
                                    +62 812-7411-5754
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <form action="" method="post" class="custom-form contact-form" role="form">

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                            required="">

                                        <label for="floatingInput">Name</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            class="form-control" placeholder="Email address" required="">

                                        <label for="floatingInput">Email address</label>
                                    </div>
                                </div>


                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message"
                                            placeholder="Tell me about the project"></textarea>
                                        <label for="floatingTextarea">Say hi to me ♡</label>
                                        <button type="submit" class="form-control" onclick="showAlert()">Send</button>


                        </form>
                    </div>

                </div>
            </div>
            </div>
        </section>

    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="copyright-text-wrap">
                        <p class="mb-0">
                            <span class="copyright-text">Copyright © 2024 <a href="#">Mutiara Nefa Andini</a>
                                rights reserved.</span>
                           by:
                            <a rel="sponsored" href="#" target="_blank">B1A023172</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/custom.js"></script>
    <script>
    // Menampilkan alert ketika form terkirim
    function showAlert() {
        alert("Pesan kamu sudah aku terima, nanti aku balas yaa");
        // Setelah alert ditampilkan, tunggu 3 detik (3000 milidetik) sebelum melakukan refresh
        setTimeout(function(){
            window.location.href = "index.php"; 
        }, 3000); // Waktu tunda dalam milidetik (misalnya, 3000 untuk 3 detik)
    }
</script>



</body>

</html>