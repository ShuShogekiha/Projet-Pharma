<?php include_once(__DIR__ . "/webfiles/php/fileHead.php"); ?>


    <div class="form">
        <form class="register-form togle" method="POST">
            <input type="text" name="regiEmail" placeholder="email">
            <input type="password" name="regiPassword" placeholder="mot de passe">
            <input type="password" name="password" placeholder="saisir a nouveau le mot de passe">
            <button>s'enregistrer</button>
            <!-- <input type="button" value="s'enregistrer"> -->
            <p class="message">déjà enregistrer? <a class="action" href="#">connecte toi</a></p>
        </form>
        <form class="login-form" method="POST">
            <input type="text" name="logEmail" placeholder="email">
            <input type="password" name="logPassword" placeholder="mot de passe">
            <p class="mdp"><a href="#">mot de passe oublié</a></p>
            <button>connexion</button>
            <!-- <input type="button" value="connexion"> -->
            <p class="message">pas enregistrer? <a class="action" href="#">créer toi un compte</a></p>
        </form>
    </div>
</main>
<?php include_once(__DIR__ . "/webfiles/php/fileFooter.php"); ?>
<script src="./webfiles/js/register-login.js"></script>

</body>

</html>