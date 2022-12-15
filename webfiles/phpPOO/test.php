<?
namespace bo;

class test {
    
    //constante
    private String $maVariable = "toto";

    //connstructeur
    //public function __construct() {}

    /////////////////
    //tes fonctions (des classes filles)
    

    /////////////////
    //tes getter setter
    
    //un Getter peux retourner des valeur mais ne peux pas inserer des valeurs
    public function getMaVariable() {
        return $this->maVariable;
    }

    //un Setter peux inserer des valeurs mais pas retourner des valeurs
    public function setMaVariable(String $maVariable) {
        $this->maVariable = $maVariable;
    }

}

?>