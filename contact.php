<?php
    include ("header.php");
?>
 <section class="container position-absolute translate-middle bg-op top-50 start-50 ">
<!-- GRILLE COORDONEES + FORUMUALIRE -->
<div class="row m-5 d-flex justify-content-center">
    <!-- GRILLE COORDONNEES -->
    <div class="col-md-9 ">
        <h2 class="h1-responsive text-white my-1 pb-1 text-center">Formulaire de contact</h2>
        <form name="contact-form" id="formulaire" class="text-center mt-5">
        <?php 
        $inpt = [
            [
                "type" => "text",
                "id" => "inputSujet",
                "class" => "form-control bg-body-secondary rounded-0 text-uppercase",
                "placeholder" => "Sujet",
                "name" => "sujet"
            ],
            [
                "type" => "email",
                "id" => "inputEmail",
                "class" => "form-control bg-body-secondary rounded-0 text-uppercase",
                "placeholder" => "E-mail",
                "name" => "email"
            ],
            [
                "type" => "text",
                "id" => "inputFirstName",
                "class" => "form-control bg-body-secondary rounded-0 text-uppercase",
                "placeholder" => "Prénom",
                "name" => "firstName"
            ],
            [
                "type" => "text",
                "id" => "inputFirstName",
                "class" => "form-control bg-body-secondary rounded-0 text-uppercase",
                "placeholder" => "Prénom",
                "name" => "firstName"
            ],
            [
                "type" => "text",
                "id" => "inputFirstName",
                "class" => "form-control bg-body-secondary rounded-0 text-uppercase",
                "placeholder" => "Prénom",
                "name" => "firstName"
            ],
            [
                "type" => "text",
                "id" => "inputFirstName",
                "class" => "form-control bg-body-secondary rounded-0 text-uppercase",
                "placeholder" => "Prénom",
                "name" => "firstName"
            ],
        ];
        for($i=0;$i<count($inpt);$i++){
            if($i == 0 || $i % 2 == 0){
                if($i !== 0){
                    echo "</div>";
                }
                echo "<div class='row mt-4'>";
            };
            echo "<div class='md-form mb-0'>";
            echo "<input type='{$inpt[$i]['type']}' name='{$inpt[$i]['name']}' id='{$inpt[$i]['id']}' class='{$inpt[$i]['class']}'
            placeholder='{$inpt[$i]['placeholder']}'>";

            echo "</div>";
        }
        ?> 
            <div class="mt-4 text-center">
                <button type="submit"  class="btn btn-primary gold rounded-0 w-20 text-uppercase">Envoyer</button>
            </div>
        </form>
    </div>
</div>