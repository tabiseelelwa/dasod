<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/Style.css">

    <!-- Importation SWIPERJS -->
    <link rel="stylesheet" href="package/swiper-bundle.min.css"/>
    <title>DASOD-FPM</title>
    <style></style>
</head>
<body>
  <?php require_once('Pages/navbar.php')?>

    <!-- ================== FIN DE NAVBAR ======================= -->

    <header>
        <div class="container header__container">
            <div class="header__right">
                <div class="header__right-image">
                    <img src="Images/armoirie.png" alt="">
                </div>
            </div>
            <div class="header__left">
                <h1>DYNAMIQUE ACTION POUR LA SOLIDARITE ET LE DEVELOPPEMENT - FORMATION PROFESSIONNELLE ET METIERS</h1>
            </div>
        </div>
    </header>

    <!-- ============================== Fin du Header ====================================== -->

    <Section class="courses">
        <h1>Actualité</h1>
        <div class="container courses__container">
            <!-- <article class="course">
                <div class="course__images">
                    <img src="Images/class1.jpg">
                </div>
                <div class="course__info">
                    <h4>Formation</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="cours.php" class="btn btn-primary">Lire plus</a>
                </div>
            </article> -->
        </div>
    </Section>

    <section class="categories">
        <div class="container categories__container">
            <div class="categories__left">
                <h1>Les formations</h1>
                <p>
                    Sous la tutelle du Ministère de la formation Professionnelle et Métiers, DASOD-FPM  offre une multitude de formations en faveur de 
                    la jeunesse congolaise dans le cadre de l'autonomisation de celle-ci.
                </p>
                <a href="cours.php" class="btn">Voir toutes les formations</a>
            </div>
            <div class="categories__right">
                <a href="categories?catDesign=programmtion">
                    <article class="category">
                        <h5>Programmation</h5>
                        <p>Lorem ipsum dolor sit amet consectetur elit. </p>
                    </article>
                </a>
                <a href="categories?catDesign=programmtion">
                    <article class="category">
                        <h5>Réseaux</h5>
                        <p>Lorem ipsum dolor sit amet consectetur  elit. </p>
                    </article>
                </a>
                <a href="categories?catDesign=programmtion">
                    <article class="category">
                        <h5>BDD</h5>
                        <p>Lorem ipsum dolor sit amet consectetur  elit. </p>
                    </article>
                </a>
                <a href="categories?catDesign=programmtion">
                    <article class="category">
                        <h5>Electronique</h5>
                        <p>Lorem ipsum dolor sit amet consectetur  elit. </p>
                    </article>
                </a>
                <a href="categories?catDesign=programmtion">
                    <article class="category">
                        <h5>Infographie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur  elit. </p>
                    </article>
                <a href="categories?catDesign=programmtion">
                    <article class="category">
                        <h5>Formation</h5>
                        <p>Lorem ipsum dolor sit amet consectetur  elit. </p>
                    </article>
                </a>
            </div>
        </div>
    </section>

    <!-- ======================= FIN DES SERVICES ================================= -->

    <?php require_once('Pages/footer.php') ?>
    <!-- ================================================== FIN PIED DE PAGE =============================================================== -->
    
    <script src="Scripts/App.js"></script>

    <!-- Swiper JS -->
    <script src="package/swiper-bundle.min.js"></script>

    <!-- Initialisation de  Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            centeredSlides: true,
            spaceBetween: 30,
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },
        });
    </script>
</body>
</html>