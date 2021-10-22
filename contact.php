<?php
session_start();
include "inc/header.php"
?>

<!-- ========== Home Page Section ========== -->
<section id="page-title">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb container mt-5 m-auto p-4">
            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home fa-1x"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </nav>
</section>
<!--  End Home Page Section  -->

<main id="main">

    <!-- ========== Contact Me Section ========== -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>CONTACTEZ-NOUS</h2>
                <p>Pour toute information sur nos prestations ou sur votre réservation, nous vous invitons à nous contactez via notre formulaire de contact ou bien par téléphone et par mail.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <h3>Envoyer moi un email</h3>
                                <p><i class="fas fa-envelope"></i>contact@charles-cantin.com</p>
                            </div>
                            <div class="info-box mt-4">
                                <h3>Appelle-moi</h3>
                                <p><i class="fas fa-phone-square"></i>+33 01 23 45 67 89</p>
                            </div>
                            <div class="social-links">
                                <a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a>
                                <a href="#" class="instagram"><i class="fab fa-instagram-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="#" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Votre Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Sujet" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea name="messaget" rows="6" class="form-control" id="subject" placeholder="Message"></textarea>
                        </div>
                        <div class="my-3">

                        </div>
                        <div class="text-center">
                            <button type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--  End contact me Section  -->
</main>

<?php
include "inc/footer.php";
?>