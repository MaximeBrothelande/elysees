<?php
/**
 * Created by PhpStorm.
 * User: mxbro
 * Date: 22/11/2018
 * Time: 16:38
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Les Elysées</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Avenir">
    <link href="./src/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="./src/vendor/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet"/>
    <link href="./src/vendor/bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet"/>
    <link href="./src/vendor/font-awesome/css/fontawesome-all.min.css" rel="stylesheet"/>
    <link href="./src/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="./src/css/style.css" rel="stylesheet"/>
    <link href="./src/css/w3.css" rel="stylesheet"/>
    <link href="./src/vendor/node_modules/aos/dist/aos.css" rel="stylesheet">

</head>
<script src="./src/vendor/jquery/js/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-scrollTo').on('click', function() { // Au clic sur un élément
            var page = $(this).attr('href'); // Page cible
            var speed = 750; // Durée de l'animation (en ms)
            $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
            return false;
        });
    });
</script>


<body>
<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
    <div class="w3-bar w3-xlarge w3-white w3-opacity w3-hover-opacity-off" id="myNavbar">
        <a href="#home" class="w3-bar-item w3-button js-scrollTo"><img src="./src/images/les-elysées.png" class="navbar-brand" style="height:30px"></a>
        <a class="elysee w3-bar-item">|</a>
        <a href="#menu" class="w3-bar-item w3-button js-scrollTo">Menu</a>
        <a class="elysee w3-bar-item">|</a>
        <a href="#galerie" class="w3-bar-item w3-button js-scrollTo">Galerie</a>
        <a class="elysee w3-bar-item">|</a>
        <a href="#contact" class="w3-bar-item w3-button js-scrollTo">Contact</a>
        <a href="./reservation.php" class=" w3-right w3-bar-item w3-button w3-elysee">Réservation</a>
    </div>
</div>

<div class="w3-sidebar w3-display-right w3-black w3-opacity w3-hover-opacity-off">
    <a href="#insta" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
    <a href="#facebook" class="w3-bar-item w3-button"><i class="fa fa-facebook-square"></i></a>
    <a href="#twitter" class="w3-bar-item w3-button"><i class="fa fa-twitter-square"></i></a>
</div>


<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="centered">
        <p class="logo" data-aos="flip-up" data-aos-duration="3000">
            <img src="src/images/les-elysées.png" style="width:100%;" alt="logo"><br>
            <a href="#menu" class="logo w3-button w3-xxlarge w3-black js-scrollTo">Voir le menu</a>
        </p>
    </div>
</header>
<div class="w3-container w3-white w3-padding-64 w3-xxlarge" id="histoire">
    <div class="w3-content">
        <div class="w3-row">
            <div class="w3-col s6 offset-3">
                <img src="src/images/les-elysées.png" style="width:100%;" alt="logo">
            </div>
        </div>
        <br>
        <div class="w3-row">
            <div class="w3-col s6">
                <img src="./src/images/restaurant2.JPG" style="width: 100%;" alt="restaurant">
            </div>
            <div class="w3-col s6">
                <p class="w3-justify" data-aos="fade-left" data-aos-duration="3000">
                    <b>Notre Histoire</b><br>
                    Le restaurant Les Elysées se tient sur la plus belle avenue du monde depuis
                    plus de 50 ans.<br>
                    Venez découvrir de nouvelles saveurs dans ce restaurant gastronomique
                    et profiter de l'ambiance qui y règne.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Menu Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
    <div class="w3-content">
        <h1 class="w3-left-align w3-jumbo" style="margin-bottom:64px"><span class="elysee">| </span> LA CARTE</h1>
        <div class="w3-row">
            <div class="w3-col s6">
                <div class="w3-row w3-left w3-border w3-border-dark-grey">
                    <h1 class="w3-center elysee"><b>ENTREES</b></h1>
                    <hr>

                    <h1><b>Entrée du jour</b> <span class="w3-tag w3-elysee w3-round">Journalier</span><span class="w3-right w3-tag w3-dark-grey w3-round">70.00€</span></h1>
                    <p class="w3-text-grey">En fonction des arrivages</p>
                    <hr>

                    <h1><b>Feuilleté de gibier</b> <span class="w3-right w3-tag w3-dark-grey w3-round">65.00€</span></h1>
                    <p class="w3-text-grey">Avec son foie gras aux pistaches et champignons en pickles</p>
                    <hr>

                    <h1><b>Ballade en forêt</b> <span class="w3-right w3-tag w3-dark-grey w3-round">92.00€</span></h1>
                    <p class="w3-text-grey">Macaroni truffe noire, foie gras, céleri, gratinés au parmesan</p>
                    <hr>

                    <h1><b>St-Jacques</b> <span class="w3-right w3-tag w3-dark-grey w3-round">85.00€</span></h1>
                    <p class="w3-text-grey">Saint-Jacques de Port-en-Bessin snackées, crème de cresson et truffe blanche</p>
                    <hr>

                    <h1><b>Araignée de mer décortiquée</b> <span class="w3-right w3-tag w3-dark-grey w3-round">95.00€</span></h1>
                    <p class="w3-text-grey"> Dans sa carapace, accompagnée de sa mayonnaise</p>
                    <hr>

                    <h1><b>Mille-feuilles de foie gras</b> <span class="w3-right w3-tag w3-dark-grey w3-round">65.00€</span></h1>
                    <p class="w3-text-grey">Accompagné de champignons de Carrières-sur-Seine et d'une délicate gelée de dashi</p>
                    <hr>

                    <h1><b>Raviolis de radis noir</b><span class="w3-right w3-tag w3-dark-grey w3-round">55.00€</span></h1>
                    <p class="w3-text-grey">Au saunom avec son coulis ail et petits pois</p>

                </div>
            </div>
            <div class="w3-col s5 offset-1">
                <div class="w3-row w3-right w3-border w3-border-dark-grey">
                    <h1 class="w3-center elysee"><b>PLATS</b></h1>
                    <hr>

                    <h1><b>Plat du jour</b> <span class="w3-tag w3-elysee w3-round">Journalier</span> <span class="w3-right w3-tag w3-dark-grey w3-round">90.00€</span></h1>
                    <p class="w3-text-grey">En fonction des arrivages</p>
                    <hr>

                    <h1><b>Ris de veau croustillant</b><span class="w3-right w3-tag w3-dark-grey w3-round">85.00€</span></h1>
                    <p class="w3-text-grey">Ris de veau croustillant aux herbes à tortue, carotte, gingembre-orange</p>
                    <hr>

                    <h1><b>Homard-vanillé</b> <span class="w3-right w3-tag w3-dark-grey w3-round">150.00€</span></h1>
                    <p class="w3-text-grey">Homard de nos côtes nourri de vanille, potirons et châtaignes en cocotte lutée</p>
                    <hr>

                    <h1><b>Lièvre à la Royale</b><span class="w3-right w3-tag w3-dark-grey w3-round">95.00€</span></h1>
                    <p class="w3-text-grey">Lièvre à la Royale, à la cuillère, recette du Sénateur Aristide Couteaux</p>
                    <hr>

                    <h1><b>Canard Colvert</b> <span class="w3-right w3-tag w3-dark-grey w3-round">90.00€</span></h1>
                    <p class="w3-text-grey">Canard Colvert "Apicius", chou vert, navets poivrées, la cuisse en jus moelleux à l'avoine</p>
                    <hr>

                    <h1><b>Bar de ligne</b><span class="w3-right w3-tag w3-dark-grey w3-round">135.00€</span></h1>
                    <p class="w3-text-grey">Bar de ligne / caviar / lait Ribot de mon enfance</p>
                </div>
            </div>
        </div>
        <br>
        <div class="w3-row">
            <div class="w3-col s5">
                <div class="w3-row w3-left w3-border w3-border-dark-grey">
                    <h1 class="w3-center elysee"><b>DESSERTS</b></h1>
                    <hr>

                    <h1><b>Dessert du jour</b><span class="w3-right w3-tag w3-dark-grey w3-round">30.00€</span></h1>
                    <p class="w3-text-grey">En fonction des arrivages</p>
                    <hr>

                    <h1><b>Mangue dorée</b><span class="w3-right w3-tag w3-dark-grey w3-round">30.00€</span></h1>
                    <p class="w3-text-grey">Avec un jus acidulé passion-citron vert et une glace vanille</p>
                    <hr>

                    <h1><b>Palet d'Automne</b><span class="w3-right w3-tag w3-dark-grey w3-round">30.00€</span></h1>
                    <p class="w3-text-grey">chocolat, noix, cèpes</p>
                </div>
            </div>
            <div class="w3-col s6 offset-1">
                <div class="w3-row w3-right w3-border w3-border-dark-grey">
                    <h1 class="w3-center elysee"><b>BOISSONS</b></h1>
                    <hr>

                    <h1><b>Bouteille d'eau minérale</b><span class="w3-right w3-tag w3-dark-grey w3-round">10.00€</span></h1>
                    <hr>

                    <h1><b>Verre de vin</b> <span class="w3-right w3-tag w3-dark-grey w3-round">18.00€</span></h1>
                    <hr>

                    <h1><b>Bouteille de vin</b> <span class="w3-right w3-tag w3-dark-grey w3-round">40.00€</span></h1>
                    <hr>

                    <h1><b>Coupe de champagne</b> <span class="w3-right w3-tag w3-dark-grey w3-round">28.00€</span></h1>
                    <hr>

                    <h1><b>Bouteille de champagne</b> <span class="w3-right w3-tag w3-dark-grey w3-round">100.00€</span></h1>
                    <hr>

                    <h1><b>Café</b> <span class="w3-right w3-tag w3-dark-grey w3-round">8.00€</span></h1>
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="w3-content">
        <h1 class="w3-left-align w3-jumbo" style="margin-bottom:64px"><span class="elysee">| </span> LE CHEF</h1>
        <div class="w3-row">
            <div class=" w3-col s6">
                <img src="src/images/chef.jpg" style="width:100%;" class="w3-left zoom" alt="Chef">
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col s6">
                <p class="w3-left w3-justify" data-aos="fade-right" data-aos-duration="2500" data-aos-delay="500">
                    Notre Chef et son équipe vous préparerons les meilleurs plats avec des produits frais,
                    des menus de saison et suivant l'arrivage des marchés. Redécouvrez des saveurs grâce à notre Chef.
                </p>
            </div>
            <div class=" w3-col s5 offset-1">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/oYwqEeOM_zY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

</div>

<!-- Galerie Container -->
<div class="w3-container w3-padding-64 w3-white w3-xlarge" id="galerie">
    <div class="w3-content">
        <h1 class="w3-left-align w3-jumbo" style="margin-bottom:64px"><span class="elysee">| </span> LA GALERIE</h1>
        <div class="w3-row">
            <div class="w3-col s3 w3-hover-opacity" data-aos="fade-right" data-aos-duration="2100" data-aos-delay="200">
                <img src="src/images/plat.jpg" style="width:100%;" class="w3-left zoom" alt="Plat">
            </div>
            <div class="w3-col s4 offset-1 w3-hover-opacity" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="500">
                <img src="src/images/plat1.jpg" style="width:100%;" class="w3-left zoom" alt="Plat">
            </div>
            <div class="w3-col s3 offset-1 w3-hover-opacity" data-aos="fade-left" data-aos-duration="2300" data-aos-delay="100">
                <img src="src/images/plat2.jpg" style="width:100%;" class="w3-left zoom" alt="Plat">
            </div>
        </div>
        <br>
        <div class="w3-row">
            <div class="w3-col s3 w3-hover-opacity" data-aos="fade-right" data-aos-duration="1900" data-aos-delay="800">
                <img src="src/images/plat5.jpg" style="width:100%;" class="w3-left zoom" alt="Plat">
            </div>
            <div class="w3-col s3 offset-1 w3-hover-opacity" data-aos="fade-up" data-aos-duration="1850" data-aos-delay="200">
                <img src="src/images/plat3.jpg" style="width:100%;" class="w3-left zoom" alt="Plat">
            </div>
            <div class="w3-col s4 offset-1 w3-hover-opacity" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="500">
                <img src="src/images/restaurant.JPG" style="width:100%;" class="w3-left zoom" alt="Restaurant">
            </div>
        </div>
        <br>
        <div class="w3-row">
            <div class="w3-col s4 w3-hover-opacity" data-aos="fade-right"data-aos-duration="3000" data-aos-delay="100">
                <img src="src/images/plat4.jpg" style="width:100%;" class="w3-left zoom" alt="Plat">
            </div>
            <div class="w3-col s3 offset-1 w3-hover-opacity" data-aos="fade-up"data-aos-duration="1200">
                <img src="src/images/restaurant2.JPG" style="width:100%;" class="w3-left zoom" alt="Restaurant">
            </div>
            <div class="w3-col s3 offset-1 w3-hover-opacity container" data-aos="fade-left"data-aos-duration="2000" data-aos-delay="200">
                <img src="src/images/chef.jpg" style="width:100%;" class="w3-left zoom" alt="Chef">
                <div class="centered"> Voir plus de photos sur Instagram</div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Container -->
<div id="contact" class="w3-container w3-padding-64 w3-black w3-xlarge">
    <div class="w3-content">
        <h1 class="w3-left-align w3-jumbo" style="margin-bottom:64px"><span class="elysee">| </span> CONTACTEZ NOUS</h1>
        <div class="w3-row">
            <div class="w3-col s6">
                <form action="/action_page.php" target="_blank">
                    <div class="w3-row">
                        <div class="w3-col s5">
                            <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nom" required name="nom">
                        </div>
                        <div class="w3-col s5 offset-1">
                            <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Prénom" required name="prenom">
                        </div>
                    </div>
                    <br>
                    <div class="w3-row">
                        <div class="w3-col s5">
                            <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Sujet" required name="sujet">
                        </div>
                        <div class="w3-col s5 offset-1">
                            <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Mail" required name="mail">
                        </div>
                    </div>
                    <br>
                    <div class="w3-row">
                        <div class="w3-col s11">
                            <textarea class="w3-input w3-border" type="text" placeholder="Message" required name="message" rows="5"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="w3-row">
                        <div class="w3-col s5 offset-6">
                            <button class="w3-button w3-light-grey w3-block" type="submit">ENVOYER</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="w3-col s5 offset-1">
                <div>
                    <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">Adresse: </p>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">74 Av. des Champs-Elysées</p>
                    <p data-aos="fade-up" data-aos-duration="1100" data-aos-delay="500">Horaires:</p>
                    <div class="w3-col s6 w3-justify">
                        <p data-aos="fade-up" data-aos-duration="1400" data-aos-delay="500">
                            Lun - 18:00 - 00:00<span class="elysee"> | </span>
                            Mer - 18:00 - 00:00<span class="elysee"> | </span>
                            Ven - 18:00 - 00:00<span class="elysee"> | </span>
                            Dim - 18:00 - 23:00<span class="elysee"> | </span>
                        </p>
                    </div>
                    <div class="w3-col s6 w3-justify">
                        <p data-aos="fade-up" data-aos-duration="1700" data-aos-delay="500">
                            Mar - 18:00 - 00:00
                            Jeu - 18:00 - 00:00
                            Sam - 18:00 - 00:00
                            & jours fériés
                        </p>
                    </div>
                    <p data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
                        contact@les-élysées.com
                    </p>
                    <p data-aos="fade-up" data-aos-duration="2500" data-aos-delay="500">
                        06 12 34 56 78
                    </p>
                    <div class="w3-row" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="500">
                        <div class="w3-col s5 offset-6">
                            <a href="./reservation.php" class="w3-button">Réserver</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <div class="w3-row">
            <div class="w3-col s5">
                <img src="./src/images/map2.JPG" class="w3-image w3-greyscale" style="width:100%;">
            </div>
            <div class="w3-col s6 offset-1">
                <h1 class="w3-left-align w3-jumbo" style="margin-bottom:64px"><span class="elysee">| </span> VENIR AUX ELYSEES</h1>
                <p data-aos="fade-right" data-aos-duration="2500" data-aos-delay="500" class="w3-left w3-justify"> Par les transports en commun, le restaurant se trouve entre les stations <b>Georges V</b> et <b>Franklin D Roosevelt</b> de la ligne 1.
                    Un parking sécurisé est disponible à côté du restaurant. Venez profiter de la plus belle avenue du monde, aux Elysées.
                </p>
            </div>
        </div>
    </div>
    <!-- Image Google Map -->
    <!--<img src="/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;">-->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
    <div class="row">
        <div class="col-6 offset-3">
            <a href="#insta" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i> Instagram</a> <span class="elysee">| </span>
            <a href="#facebook" class="w3-bar-item w3-button"><i class="fa fa-facebook-square"></i> Facebook</a> <span class="elysee">| </span>
            <a href="#twitter" class="w3-bar-item w3-button"><i class="fa fa-twitter-square"></i> Twitter</a>
        </div>
    </div>

</footer>

<script>
    // Tabbed Menu
    function openMenu(evt, menuName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("menu");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-elysee", "");
        }
        document.getElementById(menuName).style.display = "block";
        evt.currentTarget.firstElementChild.className += " w3-elysee";
    }
    document.getElementById("myLink").click();
</script>
<script src="src/vendor/node_modules/aos/dist/aos.js" type="application/javascript"></script>
<script>
    AOS.init();
</script>
</body>
</html>

