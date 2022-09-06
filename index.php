<?php

class Form{

    private $form;
    // 3 initialiser les propriétés nécessaires si besoin d'un get
    // private $method;
    // 2 rajouter les attribue de ma fonction si besoin
    public function __construct($method)
    {
        // configurer les propriétés si besoin d'un get
        // $this->method = $method;

        //1  créer les opérations de la fonction
        // echo "<form method = ' ".$method . "'><fieldset>";


        
        $this -> form = "<form method = ' ".$method . "'><fieldset>";

    }
    // Ajouter une zone texte
    public function setText($name){
        // echo "<input type = 'text' name = '".$name ."'>";

        $this -> form =  $this -> form . "<input type = 'text' name = '".$name ."'>";
    }

    public function setSubmit(){
        // echo "<bouton type = 'submit' value = 'Envoyer'>";

        $this -> form .= "<bouton type = 'submit' value = 'Envoyer'>";
    }
    
    public function getForm(){
        return $this -> form;
    }

}

