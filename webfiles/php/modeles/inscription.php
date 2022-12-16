<?php 

$newUser = trim($_POST['regiEmail']);
$newPass = trim($_POST['regiPassword']);
$verifyPass = trim($_POST['password']);

$errorsArray;

if($newUser !== "" && $newPass !== "" && $verifyPass != ""){

    if(!filter_var($newUser, FILTER_VALIDATE_EMAIL)){
        $errorsArray["email"] = "email invalide";
    }

    if($newPass !== $verifyPass){        
        $errorsArray["password"] = "Mot de passes différents";
    }
}

if(isset($errorsArray)){
    foreach($errorsArray as $singleError){
        echo $singleError;
    }
}
else{
    require_once("../fileBDD.php");

    
        $req = "INSERT INTO IF NOT EXISTS utilisateurs (Mail, Pass) VALUES ('$newUser', '$newPass')";
        $result = $connect->query($req);

        if($result === false){
            // if()
            echo "Echec d'inscription";
        }
        else{
            echo "Inscription réussie";
        }
}

?>