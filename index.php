<?php include_once(__DIR__ . "/webfiles/php/fileHead.php"); ?>

<!-- Mise en page Accueil -->
<section id="main-illustration">
    <img src="./src/img/st-martin.webp" alt="avant de la pharmacie">
    <h1>Acceuil</h1>
</section>

<section id="promos">
    <h2>Nos Promotions</h2>
    <div class="owl-carousel owl-theme">
        <div class="promo-item">
            <span></span>
            <img src="./src/img/promo/dermasoin-huile-lavante.jpeg" alt="produit, dermasoin huile lavante">
            <p>6.80€</p>
            <p>Dermasoin huile lavante relipidante, 400ml</p>
        </div>
        <div class="promo-item">
            <span></span>
            <img src="./src/img/promo/gifrer-liniment.jpg" alt="produit gifrer liniment">
            <p>8.90€</p>
            <p>Gifrer liniment oleocalcaire stabilise, 900ml</p>
        </div>
        <div class="promo-item">
            <span></span>
            <img src="./src/img/promo/meridol-protection-gencives-dentifrice.png"
                alt="deux boite de dentitrice meridol">
            <p>7.95€</p>
            <p>Meridol protection gencive dentitrice, 2 x 75ml</p>
        </div>
    </div>
</section>


<section id="contact">
    <h2>Nous trouver / contacter</h2>
    <div class="global-container">
        <div id="right-container">
            <img src="./src/img/Deventure.webp" alt="devanture de la pharmacie">
        </div>
        <div id="left-container">
            <p><span class="underline">Adresse :</span>
                <a
                    href="https://www.google.com/maps/place/37+Rue+Saint-Martin,+02200+Soissons/@49.378624,3.3261683,17z/data=!3m1!4b1!4m5!3m4!1s0x47e85eb627b501d3:0x9bda15fc09c50f83!8m2!3d49.378624!4d3.328357">
                    &nbsp;37 Rue Saint-Martin, 02200 Soissons
                </a>
            </p>
            <p>
                <span class="underline">Horaires :</span>
                &nbsp; lundi &agrave; partir de&nbsp;12h30&nbsp;jusqu’&agrave;&nbsp;19h et
                du mardi&nbsp;au&nbsp;samedi de&nbsp;9h&nbsp;&agrave;&nbsp;12h30 et
                de&nbsp;13h30&nbsp;&agrave;&nbsp;19h
            </p>
            <p>
                <span class="underline">Téléphone :</span>
                <a href="tel:0323532556">&nbsp;03 23 53 25 56</a>
            </p>
            <p>
                <span class="underline">Email :</span>
                <a href="mailto:pharmastmartin02@gmail.com">&nbsp;pharmastmartin02@gmail.com</a>
            </p>
        </div>
    </div>
</section>

<!-- Fin de Mise en page Accueil -->
</main>

<?php include_once(__DIR__ . "/webfiles/php/fileFooter.php"); ?>
<script src="https://code.jquery.com/jquery-3.6.2.slim.min.js"
    integrity="sha256-E3P3OaTZH+HlEM7f1gdAT3lHAn4nWBZXuYe89DFg2d0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="./webfiles/js/carousell.js"></script>

</body>

</html>