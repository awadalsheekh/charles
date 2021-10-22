<?php
session_start();
include "inc/header.php"
?>

<!-- ========== Home Page Section ========== -->
<section id="page-title">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb container mt-5 m-auto p-4">
            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home fa-1x"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Galerie</li>
        </ol>
    </nav>
</section>
<!--  End Home Page Section  -->

<main id="main">
    <!-- ========== Portfolio Section ========== -->
    <section class="portfolio">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h2>Galeries</h2>
                </div>
            </div>

            <div class="row">
                <div class="filter-buttons">
                    <ul id="filter-btns">
                        <li class="active" data-target="all">TOUTES</li>
                        <li data-target="mariage">MARIAGE</li>
                        <li data-target="grossesse">GROSSESSE</li>
                        <li data-target="bebe">BEBE</li>
                        <li data-target="famille">FAMILLE</li>
                        <li data-target="bapteme">BAPTEME</li>
                        <li data-target="couple">COUPLE</li>
                        <li data-target="portrait">PORTRAIT</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="portfolio-gallery">
                    <div class="item" data-id="mariage">
                        <div class="inner">
                            <img src="img/img1.jpg" alt="Photo de mariage">
                        </div>
                    </div>
                    <div class="item" data-id="mariage">
                        <div class="inner">
                            <img src="img/img2.jpg" alt="Photo de mariage">
                        </div>
                    </div>
                    <div class="item" data-id="bebe">
                        <div class="inner">
                            <img src="img/img13.jpg" alt="Photo de bébé">
                        </div>
                    </div>
                    <div class="item" data-id="famille">
                        <div class="inner">
                            <img src="img/img7.jpg" alt="Photo de famille">
                        </div>
                    </div>
                    <div class="item" data-id="bapteme">
                        <div class="inner">
                            <img src="img/img16.jpg" alt="Photo de baptême">
                        </div>
                    </div>
                    <div class="item" data-id="couple">
                        <div class="inner">
                            <img src="img/img4.jpg" alt="Photo de couple">
                        </div>
                    </div>
                    <div class="item" data-id="portrait">
                        <div class="inner">
                            <img src="img/img15.jpg" alt="Photo de portrait">
                        </div>
                    </div>
                    <div class="item" data-id="grossesse">
                        <div class="inner">
                            <img src="img/img9.jpg" alt="Photo de grossesse">
                        </div>
                    </div>
                    <div class="item" data-id="portrait">
                        <div class="inner">
                            <img src="img/img11.jpg" alt="Photo de portrait">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  End Portfolio Section  -->
</main>

<?php
include "inc/footer.php";
?>