<?php
include "classes/recipes.php";
//testing new origin

$recipe1 = new Recipe();
//echo $recipe1->source;
$recipe1->source = "Terry Prieto";
//echo $recipe1->source;
$recipe1->setTitle("my frst recipe");
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cup");

$recipe2 = new Recipe();
$recipe2->source = "Betty Crocker";
$recipe2->setTitle("my second recipe");

echo $recipe1->getTitle();
foreach($recipe1->getIngredients() as $ing){
    echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
}

//echo $recipe1->displayRecipe();
//echo $recipe2->displayRecipe();




//var_dump($recipe1);