<?php

class Form
{

    private string $form;
    // 3 initialiser les propriétés nécessaires si besoin d'un get
    // private $method;
    // 2 rajouter les attribue de ma fonction si besoin
    public function __construct(string $method)
    {
        // configurer les propriétés si besoin d'un get
        // $this->method = $method;

        //1  créer les opérations de la fonction
        // echo "<form method = ' ".$method . "'><fieldset>";



        $this->form = "<form method = ' " . $method . "'><fieldset>";
    }
    // Ajouter une zone texte
    public function setText(string $name): void
    {
        // echo "<input type = 'text' name = '".$name ."'>";

        $this->form =  $this->form . "<input type = 'text' name = '" . $name . "'>";
    }

    public function setSubmit(): void
    {
        // echo "<bouton type = 'submit' value = 'Envoyer'>";

        $this->form .= "<input type = 'submit' value = 'Envoyer'>";
    }

    public function getForm(): string
    {
        return $this->form . "</fieldset></form>";
    }
}

class Form2 extends Form{
    public function setRadio(string $id,string $name) :void{
        $this->form .= "<input type = 'radio' id ='" . $id ."' name = '" . $name . "'>";
    }
}


$form = new Form("post");
$form->setText("name");
$form->setText("firsname");
$form->setSubmit();
// afficher le formulaire après le renvoie
echo $form->getForm();
