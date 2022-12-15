<?php include_once(__DIR__ . "/webfiles/php/fileHead.php"); ?>

<section>
    <h1>choisir un article</h1>
        <button onclick="ajouterArticle(1)">Ajouter Article 1€</button>
        <button onclick="ajouterArticle(10)">Ajouter Article 10€</button>
        <button onclick="ajouterArticle(100)">Ajouter Article 100€</button>
</section>

<section>
    <h2 id="texte-panier">Mon panier est vide</h2>
</section>

</main>

<?php include_once(__DIR__ . "/webfiles/php/fileFooter.php"); ?>
<script src="./webfiles/js/basket.js"></script>

</body>

</html>