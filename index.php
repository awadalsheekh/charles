<?php
session_start();
include "inc/header.php"
?>

<!-- ========== Home Page Section ========== -->
<section id="home-page">
    <div class="home-page-container">
        <h1>“Charles Cantin - Photographe”</h1>
        <h2>JE SUIS PHOTOGRAPHE PROFESSIONNEL A PARIS</h2>
    </div>
</section>
<!--  End Home Page Section  -->

<main id="main">
    <!-- ========== About Me Section ========== -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>À propos</h2>
                <p>Bonjour, je m'appelle Charles Cantin et je suis photographe professionnel basé à paris.</p>
            </div>
            <div class="row">
                <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
                <div class="col-lg-8 d-flex flex-column align-items-stretch">
                    <div class="content ps-lg-4 d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-lg-8">
                                <p class="a-propos">Je vous présente ici mon parcours et ma passion pour la photographie.
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                                <ul>
                                    <li><strong>Nom:</strong><span>Charles Cantin</span></li>
                                    <li><strong>Site:</strong><span>www.charles-cantin.com</span></li>
                                    <li><strong>Téléphone:</strong><span>+33 01 23 45 67 89</span></li>
                                    <li><strong>Ville:</strong><span>Paris, FRANCE</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--  End About Me Section  -->
</main>

<?php
include "inc/footer.php";
?>