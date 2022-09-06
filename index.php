<?php

class Form{
    // 3 initialiser les propriétés nécessaires
    private $method;
    // 2 rajouter les attribue de ma fonction si besoin
    public function __construct($method)
    {
        // configurer les propriétés
        $this->method = $method;

        //1  créer les opérations de la fonction
        echo "<form method = ' ".$method . "'>";
    }
}