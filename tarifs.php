<?php
session_start();
include "inc/header.php"
?>

<!-- ========== Home Page Section ========== -->
<section id="page-title">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb container mt-5 m-auto p-4">
            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home fa-1x"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Tarifs et prestations</li>
        </ol>
    </nav>
</section>
<!--  End Home Page Section  -->

<main id="main">

    <!-- ========== Prices Section ========== -->
    <section id="price" class="price">
        <div class="container">
            <div class="section-title">
                <h2>Tarifs et prestations</h2>
                <p>Consultez les tarifs 2021 de nos prestations.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>Juste moi</h3>
                        <h4>130<sup>€</sup></h4>
                        <ul>
                            <li>Séance pour une personne, en extérieur<br> ou en studio</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-reservation">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                    <div class="box">
                        <h3>Pour deux</h3>
                        <h4>195<sup>€</sup></h4>
                        <ul>
                            <li>Pour deux personnes, en extérieur ou en<br> studio</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-reservation">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mt-4 mt-lg-0">
                    <div class="box">
                        <h3>Famille</h3>
                        <h4>220<sup>€</sup></h4>
                        <ul>
                            <li>Pour la famille ou les amis jusqu'à 4 personnes,<br> en extérieur ou en studio 30 euros en<br> supplément par personne au-delà de 4 <br>(hormis enfant jusqu'à 2 ans)</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-reservation">Réserver</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
            <br>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>Il était une fois</h3>
                        <h4>160<sup>€</sup></h4>
                        <ul>
                            <li>Photo de grossesse (à votre domicile, en <br>extérieur ou en studio)</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-reservation">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                    <div class="box">
                        <h3>Mon bébé</h3>
                        <h4>100<sup>€</sup></h4>
                        <ul>
                            <li>Photo d'enfant jusqu'à 3 ans (photo à <br>domicile)</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-reservation">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div class="box">
                        <h3>J'imortalise l'événement</h3>
                        <h4>sur mesure<sup></sup></h4>
                        <ul>
                            <li>Prestation de mariage ou baptême sur <br>devis</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-reservation">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  End Prices Section  -->
</main>

<?php
include "inc/footer.php";
?>