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
    <link href="./src/vendor/datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet"/>

</head>


<body>
<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
    <div class="w3-bar w3-xlarge w3-white w3-opacity w3-hover-opacity-off" id="myNavbar">
        <a href="./index.php" class="w3-bar-item w3-button"><img src="./src/images/les-elysées.png" class="navbar-brand" style="height:30px"></a>
        <a class="elysee w3-bar-item">|</a>
        <a href="./index.php#menu" class="w3-bar-item w3-button">Menu</a>
        <a class="elysee w3-bar-item">|</a>
        <a href="./index.php#galerie" class="w3-bar-item w3-button">Galerie</a>
        <a class="elysee w3-bar-item">|</a>
        <a href="./index.php#contact" class="w3-bar-item w3-button">Contact</a>
        <a href="#reservation" class=" w3-right w3-bar-item w3-button w3-elysee">Réservation</a>
    </div>
</div>


<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-content centered w3-white formulaire">
        <div class="w3-row">
            <img src="src/images/les-elysées.png" style="width:100%;" alt="logo">
        </div>
        <h1 class="w3-left-align w3-jumbo" style="margin-bottom:64px"><span class="elysee">| </span> RESERVEZ</h1>
        <div class="w3-row">
                <form action="/action_page.php" target="_blank">
                    <div class="w3-row">
                            <label>Nombre de participants :</label> <input class="w3-input w3-padding-16 w3-border" type="number" required name="personnes">
                    </div>
                    <div class="w3-row">
                        <div class="w3-col s5">
                            <label for="nom">Nom :</label>
                            <input class="w3-input w3-padding-16 w3-border" type="text"required name="sujet" id="nom">
                        </div>
                        <div class="w3-col s5 offset-2">
                            <label for="table">Salle :</label>
                            <select class="w3-input w3-padding-16 w3-border" type="date" required name="table" id="table">
                                <option></option>
                                <optgroup label="Rez de chaussée">
                                    <option>Côté Rue</option>
                                    <option>Côté Jardin</option>
                                </optgroup>
                                <optgroup label="Salle de réception">
                                    <option>Grande salle (50 personnes)</option>
                                    <option>Petite salle (20 personnes)</option>
                                </optgroup>
                                <optgroup label="Terrasse sur le toit">
                                    <option>Terrasse</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="w3-row">
                        <div class="w3-col s5" id="date">
                            <label>Date :</label>
                            <input class="w3-input w3-padding-16 w3-border" type="text" required name="date" data-date-format="dd/m/yyyy">
                        </div>
                        <div class="w3-col s5 offset-2">
                            <label for="type">Type d'évènement :</label>
                            <select class="w3-input w3-padding-16 w3-border" type="text" required name="type" id="type">
                                <option></option>
                                <option>Romantique</option>
                                <option>Découverte</option>
                                <option>Célébration</option>
                                <option>NSP</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="w3-row">
                        <div class="w3-col">
                            <label>Un message particulier :</label>
                            <textarea class="w3-input w3-border" type="text" required name="message" rows="5"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="w3-row">
                        <div class="w3-col s6 offset-3">
                            <button class="w3-button w3-light-grey w3-block" type="submit">Réserver</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</header>

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

<script src="./src/vendor/jquery/js/jquery.min.js"></script>
<script src="./src/vendor/datepicker/js/bootstrap-datepicker.min.js" type="application/javascript"></script>
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
<script>
    $('#date input').datepicker({
        locale: 'fr'
    });
</script>
<script src="src/vendor/node_modules/aos/dist/aos.js" type="application/javascript"></script>
<script>
    AOS.init();
</script>

</body>
</html>

