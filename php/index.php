<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Accueil - 12:34</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

  <style>
        /* body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f5f5f5; 
        }*/
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input, textarea, button {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            margin-top: 20px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .message {
            margin: 15px auto;
            width: 400px;
            text-align: center;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
  </style>

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h6 class="sitename">12:34 Communications</h6>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Accueil</a></li>
          <li><a href="#about">Apropos</a></li>
          <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="service-details.php#service-details-branding">Branding</a></li>
              <li><a href="service-details.php#service-details-m-digital">Marketing Digital</a></li>
              <li><a href="service-details.php#service-details-m-influence">Marketing d'Influence</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contacts</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="../assets/img/hero-carousel/services-m-digital.jpg" alt="">
          <div class="carousel-container">
            <h2>Bienvenue à 12:34<br></h2>
            <p>Chez 12:34 Communications, nous croyons que chaque minute compte pour faire passer votre message. Comme une horloge qui avance, nous aidons votre marque à progresser, étape par étape pour atteindre vos objectifs.</p>
            <a href="#about" class="btn-get-started">Voir plus <i class="bi bi-arrow-down-circle"></i></a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="../assets/img/hero-carousel/pexels-lee-campbell-18167-115655.jpg" alt="">
          <div class="carousel-container">
            <h2>Libérez votre potentiel avec précision et créativité structurée</h2>
            <p>Notre expertise en branding se fonde sur une réflexion stratégique et une exécution précise pour garantir une progression constante. Chaque projet est une occasion de réinventer votre identité, de la structurer avec soin et de lui donner une dimension unique.</p>
            <a href="#services" class="btn-get-started">Nos Services <i class="bi bi-arrow-down-circle"></i></a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="../assets/img/hero-carousel/call-actions.jpg" alt="">
          <div class="carousel-container">
            <h2>Un service sur lequel vous pouvez compter</h2>
            <p>Nos clients sont nos meilleurs ambassadeurs car plusieurs d’entre eux se disent satisfaits de nos services et nous recommandent auprès de leurs réseaux. Nous avons à cœur de bâtir une relation de confiance mutuelle, fondée sur la qualité et un engagement sans faille.</p>
            <a href="#testimonials" class="btn-get-started">Voir plus <i class="bi bi-arrow-down-circle"></i></a>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
            <img src="../assets/img/aboute.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
          </div>

          <div class="col-lg-7 content ps-lg-4" data-aos="fade-up" data-aos-delay="100">
            <h3>A propos de nous</h3>
            <p>
              Notre mission est simple : aider les marques à se démarquer, à se connecter authentiquement à leur public et à propulser leur croissance dans un monde numérique en constante évolution. Nous croyons que chaque marque a une histoire unique à raconter, et nous nous engageons à la mettre en lumière à travers des stratégies créatives, des campagnes innovantes et des solutions digitales performantes.
            </p>
            <ul>
              <li>
                <i class="bi bi-award"></i>
                <div>
                  <h5>Branding</h5>
                  <p>Votre marque, c’est bien plus qu’un logo. C’est une expérience, une histoire, une émotion. Nous travaillons avec vous pour construire une identité forte et cohérente, qui capte l’attention et reste gravée dans les mémoires.</p>
                </div>
              </li>
              <li>
                <i class="bi bi-card-checklist"></i>
                <div>
                  <h5>Marketing Digital</h5>
                  <p>Le digital est au cœur de la croissance des entreprises modernes. Nous élaborons des stratégies sur mesure pour maximiser votre visibilité, attirer vos prospects et transformer vos visiteurs en clients fidèles.</p>
                </div>
              </li>
              <li>
                <i class="bi bi-lightbulb"></i>
                <div>
                  <h5>Marketing d'influence</h5>
                  <p>Dans un monde où l’opinion des leaders numériques façonne les comportements, le marketing d’influence est un levier puissant pour toucher votre audience.</p>
                </div>
              </li>
            </ul>
            <p>
            Que vous soyez une jeune entreprise en quête d’identité ou une marque établie cherchant à élargir son influence, nous sommes là pour vous accompagner dans toutes les étapes de votre croissance.
            Le temps est précieux, votre message aussi !
            </p>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- SECTION STATISTIQUES -- A RENSEIGNER PLUS TARD -->

    <!-- <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
            </div>
          </div>

        </div>

      </div>

    </section> -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <div><span>Découvrez nos</span> <span class="description-title">Services</span></div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-award"></i></div>
            <div>
              <h4 class="title">Branding</h4>
              <p class="description"><B> Vous êtes prêt à transformer votre vision en réalité ?</B> Découvrez comment nous pouvons vous aider à faire briller votre marque.</p>
              <a href="service-details.php#service-details-branding" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
            <div>
              <h4 class="title">Marketing Digital</h4>
              <p class="description"><B>Et si vous preniez une longueur d’avance sur vos concurrents ?</B> Plongez dans l’univers des possibilités digitales avec notre expertise.</p>
              <a href="service-details.php#service-details-m-digital" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-lightbulb"></i></div>
            <div>
              <h4 class="title">Marketing d'Influence</h4>
              <p class="description"><B>Envie de découvrir le pouvoir du marketing d’influence ?</B> Venez explorer comment nous connectons votre marque à son public idéal.</p>
              <a href="service-details.php#service-details-m-influence" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <!-- End Service Item -->

          <!-- End Service Item -->

          <!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="../assets/img/call-action.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Passez à l'action</h3>
              <p>Et vous, quel est votre prochain grand projet ?</p>
              <p>Prenez contact avec nous dès aujourd’hui et faisons de vos idées une réalité.</p>
              <a class="cta-btn" href="#contact">Débutez l'aventure</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Témoignanges</h2>
        <div><span>Consultez nos </span> <span class="description-title">Témoignages</span></div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item">
              <img src="../assets/img/testimonials/test1.jpeg" class="testimonial-img" alt="">
              <h3>Maynard Kouassi</h3>
              <h4>Ceo de Menachem Tech</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Ce fut un plaisir pour moi de travailler sur certains projet avec 12:34 Communications. La promptitude et la dévouement de cette agence m'ont carrément marqué.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-item">
              <img src="../assets/img/testimonials/test2.jpg" class="testimonial-img" alt="">
              <h3>Yannick</h3>
              <h4>Propriétaire des Résidences KIMA</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Il fut un temps ou je cherchais un CM pour mes Réseaux Sociaux et quand j'ai contacté l'agence, j'ai été totalement statisfait du professionnalisme de l'équipe.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-item">
              <img src="../assets/img/testimonials/test3.jpg" class="testimonial-img" alt="">
              <h3>Pam Yaelle</h3>
              <h4>Responsable de Clean Vision Opticien</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>L'agence 12:34 à su donner une nouvelle image numérique à mon entreprise, je suis statisfaite du boulot.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-item">
              <img src="../assets/img/testimonials/test4.jpg" class="testimonial-img" alt="">
              <h3>Freeman Kouassi</h3>
              <h4>Responsable de Freeway Consulting</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Grâce au contenues de qualités et la gestion de mes pages Web, cette agence a pu me positionner à un certains niveau dans le domaine des voyages.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <div><span>Besoin d’aide ?</span> <span class="description-title">Contactez-Nous</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Addresse</h3>
                  <p>Blv. Houphouet Boigny</p>
                  <p>Yamoussoukro, CIV</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Téléphone</h3>
                  <p>+225 0576551829</p>
                  <p>+225 0747935427</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email </h3>
                  <p>1234.equipes@gmail.com</p>
                  <p>roroange@yahoo.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Horaires </h3>
                  <p>Lundi - Vendredi</p>
                  <p>08:00 - 18:30</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6">
            <form action="../forms/contact.php" method="post">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" id="mail" class="form-control" name="mail" placeholder="Votre mail" required="">
                </div>

                <div class="col-12">
                  <input type="text" id="objet" class="form-control" name="objet" placeholder="Objet" required="">
                </div>

                <div class="col-12">
                  <input type="text" id="contact" class="form-control" name="contact" placeholder="Votre numéro de telephone" required="">
                </div>

                <div class="col-12">
                  <textarea class="form-control" id="commentaire" name="commentaire" rows="6" placeholder="Message..." required=""></textarea>
                </div>

                <div class="col-12 text-center">
                  <button type="submit">Envoyez le Message</button>
                </div>

                <div class="message" id="message">
                    <?php
                    if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])) {
                        foreach ($_SESSION['errors'] as $error) {
                            echo "<p class='error'>$error</p>";
                        }
                        unset($_SESSION['errors']); // Effacer après affichage
                    }

                    if (isset($_SESSION['success'])) {
                        echo "<p class='success'>" . $_SESSION['success'] . "</p>";
                        unset($_SESSION['success']); // Effacer après affichage
                    }
                    ?>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="logo d-flex align-items-center">
            <span class="sitename">12:34 Communications</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Blv. Houphouet Boigny</p>
            <p>Yamoussoukro, CIV</p>
            <p class="mt-3"><strong>Telephone:</strong> <span>+225 05 76 55 18 29</span></p>
            <p><strong>Email:</strong> <span>1234.equipes@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nos Services</h4>
          <ul>
              <li><a href="service-details.php#service-details-branding">Branding</a></li>
              <li><a href="service-details.php#service-details-m-digital">Marketing Digital</a></li>
              <li><a href="service-details.php#service-details-m-influence">Marketing d'Influence</a></li>
              <li><a href="../php/Tableau/php/login.php">Connexion</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
        <div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18906.129712753736!2d6.722624160288201!3d60.12672284414915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x463e997b1b6fc09d%3A0x6ee05405ec78a692!2sJ%C4%99zyk%20trola!5e0!3m2!1spl!2spl!4v1672239918130!5m2!1spl!2spl" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">12:34 Communications</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="#">12:34 Communications</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>