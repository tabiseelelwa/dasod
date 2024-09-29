<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="styles/fontawesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="styles/Style.css">
            <link rel="stylesheet" href="styles/contact.css">
            <title>FiziTechCorp</title>
    </head>
    <body>
    <?php require_once('Pages/navbar.php')?>

        <section class="contact">
            <div class="container contact__container">
                <aside class="contact__aside">
                    <div class="aside__image">
                        <img src="Images/electro3.jpg">
                    </div>
                    <h2>Contactez-nous</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi error placeat, nihil beatae eligendi quaerat officiis deleniti vel rem, assumenda inventore voluptates repellendus, neque delectus. Accusamus quae praesentium necessitatibus quos.
                    </p>
                    <ul class="contact__details">
                        <li>
                            <i class="fa fa-phone-times"></i>
                            <h5>+243 822 077 545</h5>
                        </li>
                        <li>
                            <i class="fa fa-enveloppe"></i>
                            <h5>esubetabiseelelwa@gmail.com</h5>
                        </li>
                        <li>
                            <i class="fa fa-adress"></i>
                            <h5>26, av. NGUMA</h5>
                        </li>
                    </ul>
                    <ul class="contact__socials">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </aside>

                <form class="contact__form">
                    <div class="form__name">
                        <input type="text" name="first-name" placeholder="Nom" required>
                        <input type="text" name="last-name" placeholder="Postnom" required>
                    </div>
                    <input type="email"  name="email" placeholder="Adresse mail" required>
                    <textarea name="message"   rows="7" placeholder="Message" required></textarea>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </section>

        <?php require_once('Pages/footer.php') ?>

        <div class="footer_copyright">
            <small>Copyright &copy; FiziTechCorp</small>
        </div>
        <!-- ================================================== FIN PIED DE PAGE =============================================================== -->
        <script src="Scripts/App.js"></script>
    </body>
</html>