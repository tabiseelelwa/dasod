<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="styles/fontawesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="styles/Style.css">
            <link rel="stylesheet" href="styles/about.css">
            <title>DASOD-FPM</title>
    </head>
    <body>
        <?php require_once('Pages/navbar.php')?>
        <style>
            .courses{
                margin-top: 1rem;
            }
        </style>
        <Section class="courses">
            <h1>Nos formations</h1>
            <div class="container courses__container">
                <article class="course">
                    <img src="Images/progr2.jpg">
                    <div class="course__info">
                        <h4>Programmation</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="formations.php" class="btn btn-primary">Lire plus</a>
                    </div>
                </article>
                <article class="course">
                    <div class="course__images">
                        <img src="Images/bdd4.jpg">
                    </div>
                    <div class="course__info">
                        <h4>Base de données</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="cours.php" class="btn btn-primary">Lire plus</a>
                    </div>
                </article>
                <article class="course">
                    <div class="course__images">
                        <img src="Images/net2.jpg">
                    </div>
                    <div class="course__info">
                        <h4>Réseaux</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="cours.php" class="btn btn-primary">Lire plus</a>
                    </div>
                </article>
                <article class="course">
                    <div class="course__images">
                        <img src="Images/electro4.jpg">
                    </div>
                    <div class="course__info">
                        <h4>Electronique</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="cours.php" class="btn btn-primary">Lire plus</a>
                    </div>
                </article>
                <article class="course">
                    <div class="course__images">
                        <img src="Images/design3.jpg">
                    </div>
                    <div class="course__info">
                        <h4>Infographie</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="cours.php" class="btn btn-primary">Lire plus</a>
                    </div>
                </article>
                <article class="course">
                    <div class="course__images">
                        <img src="Images/class1.jpg">
                    </div>
                    <div class="course__info">
                        <h4>Formation</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="cours.php" class="btn btn-primary">Lire plus</a>
                    </div>
                </article>
            </div>
        </Section>

       <?php require_once('Pages/footer.php')?>
        <!-- ================================================== FIN PIED DE PAGE =============================================================== -->
        <script src="Scripts/App.js"></script>
    </body>

</html>