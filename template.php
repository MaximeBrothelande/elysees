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


<body>
<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
    <div class="w3-bar w3-xlarge w3-white w3-opacity w3-hover-opacity-off" id="myNavbar">
        <a href="#" class="w3-bar-item w3-button"><img src="./src/images/les-elysées.png" class="navbar-brand" style="height:30px"></a>
        <a class="elysee w3-bar-item">|</a>
        <a href="#menu" class="w3-bar-item w3-button">Menu</a>
        <a class="elysee w3-bar-item">|</a>
        <a href="#galerie" class="w3-bar-item w3-button">Galerie</a>
        <a class="elysee w3-bar-item">|</a>
        <a href="#contact" class="w3-bar-item w3-button">Contact</a>
        <a href="#reservation" class=" w3-right w3-bar-item w3-button w3-elysee">Réservation</a>
    </div>
</div>

<div class="w3-sidebar w3-display-right w3-black w3-opacity w3-hover-opacity-off">
    <a href="#insta" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
    <a href="#facebook" class="w3-bar-item w3-button"><i class="fa fa-facebook-square"></i></a>
    <a href="#twitter" class="w3-bar-item w3-button"><i class="fa fa-twitter-square"></i></a>
</div>


<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-middle w3-center">
        <p><a href="#menu" class="w3-button w3-xxlarge w3-black">Voir le menu</a></p>
    </div>
</header>

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
                <img src="src/images/chef.jpg" style="width:100%;" class="w3-left" alt="Chef">
                <p class="w3-left w3-justify" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300"> lorem ipsum dolor sit amet,
                    consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <div class=" w3-col s6">
                <!-- VIDEO DU CHEF -->
            </div>
        </div>
    </div>

</div>

<!-- Galerie Container -->
<div class="w3-container w3-padding-64 w3-white w3-xlarge" id="galerie">
    <div class="w3-content">
        <h1 class="w3-left-align w3-jumbo" style="margin-bottom:64px"><span class="elysee">| </span> LA GALERIE</h1>
        <div class="w3-row">
            <div class="w3-col s3 w3-hover-opacity zoom" data-aos="fade-right" data-aos-duration="2500">
                <img src="src/images/chef.jpg" style="width:100%;" class="w3-left" alt="Chef">
            </div>
            <div class="w3-col s4 offset-1 w3-hover-opacity zoom" data-aos="fade-up" data-aos-duration="2500">
                <img src="src/images/chef.jpg" style="width:100%;" class="w3-left" alt="Chef">
            </div>
            <div class="w3-col s3 offset-1 w3-hover-opacity zoom" data-aos="fade-left" data-aos-duration="2500">
                <img src="src/images/chef.jpg" style="width:100%;" class="w3-left" alt="Chef">
            </div>
        </div>
        <br>
        <div class="w3-row">
            <div class="w3-col s3 w3-hover-opacity zoom" data-aos="fade-right" data-aos-duration="2500">
                <img src="src/images/chef.jpg" style="width:100%;" class="w3-left" alt="Chef">
            </div>
            <div class="w3-col s3 offset-1 w3-hover-opacity zoom" data-aos="fade-up" data-aos-duration="2500">
                <img src="src/images/chef.jpg" style="width:100%;" class="w3-left" alt="Chef">
            </div>
            <div class="w3-col s4 offset-1 w3-hover-opacity zoom" data-aos="fade-left" data-aos-duration="2500">
                <img src="src/images/chef.jpg" style="width:100%;" class="w3-left" alt="Chef">
            </div>
        </div>
        <br>
        <div class="w3-row">
            <div class="w3-col s4 w3-hover-opacity zoom" data-aos="fade-right"data-aos-duration="2500">
                <img src="src/images/chef.jpg" style="width:100%;" class="w3-left" alt="Chef">
            </div>
            <div class="w3-col s3 offset-1 w3-hover-opacity zoom" data-aos="fade-up"data-aos-duration="2500">
                <img src="src/images/chef.jpg" style="width:100%;" class="w3-left" alt="Chef">
            </div>
            <div class="w3-col s3 offset-1 w3-hover-opacity container zoom" data-aos="fade-left"data-aos-duration="2500">
                <img src="src/images/chef.jpg" style="width:100%;" class="w3-left" alt="Chef">
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
                        <p data-aos="fade-up">Adresse: </p>
                        <p data-aos="fade-up">--------------------------</p>
                        <p data-aos="fade-up">Horaires:</p>
                        <div class="w3-col s6 w3-justify">
                            <p data-aos="fade-up" >
                                Lun - 18:00 - 00:00<span class="elysee"> | </span>
                                Mer - 18:00 - 00:00<span class="elysee"> | </span>
                                Ven - 18:00 - 00:00<span class="elysee"> | </span>
                                Dim - 18:00 - 23:00<span class="elysee"> | </span>
                            </p>
                        </div>
                        <div class="w3-col s6 w3-justify">
                            <p data-aos="fade-up">
                                Mar - 18:00 - 00:00
                                Jeu - 18:00 - 00:00
                                Sam - 18:00 - 00:00
                                & jours fériés
                            </p>
                        </div>
                        <p data-aos="fade-up">
                            contact@les-élysées.com
                        </p>
                        <p data-aos="fade-up">
                            06 12 34 56 78
                        </p>
                        <div class="w3-row" data-aos="fade-up">
                            <div class="w3-col s5 offset-6">
                                <button class="w3-button w3-light-grey w3-block">RESERVER</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <div class="w3-row">
            <div class="w3-col s5">
                &nbsp;
                <!--<img src="/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;">-->
            </div>
            <div class="w3-col s6 offset-1">
                <h1 class="w3-left-align w3-jumbo" style="margin-bottom:64px"><span class="elysee">| </span> VENIR AUX ELYSEES</h1>
                <p data-aos="fade-right" class="w3-left w3-justify"> lorem ipsum dolor sit amet,
                    consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.
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

