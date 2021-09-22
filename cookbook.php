<?php
include "classes/recipes.php";
include "classes/render.php";

$recipe1 = new Recipe();
//echo $recipe1->source;
$recipe1->setSource("Terry Prieto");
//echo $recipe1->source;
$recipe1->setTitle("my frst recipe");
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cup");

$recipe2 = new Recipe();
$recipe2->setSource("Betty Crocker");
$recipe2->setTitle("my second recipe");

/*echo $recipe1->getTitle();
foreach($recipe1->getIngredients() as $ing){
    echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
}*/

$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");

//echo implode("\n", $recipe1->getInstructions());

$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

//echo implode(", ", $recipe1->getTags());

$recipe1->setYield("6 servings");
//echo $recipe1->getYield();
//echo $recipe1->getSource();


//echo $recipe1->displayRecipe();
//echo $recipe2->displayRecipe();

echo Render::displayRecipe($recipe1);


//var_dump($recipe1);