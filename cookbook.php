<?php
include "classes/recipes.php";
include "classes/render.php";
include "inc/recipes.php";

//$recipe1 = new Recipe("my first recipe");
//echo $recipe1->source;
//$recipe1->setSource("Terry Prieto");
//echo $recipe1->source;
//$recipe1->setTitle("my frst recipe");
//$recipe1->addIngredient("egg", 1);
//$recipe1->addIngredient("flour", 2, "cup");

//$recipe2 = new Recipe("my second recipe");
//$recipe2->setSource("Betty Crocker");
//$recipe2->setTitle("my second recipe");

//$recipe1->addInstruction("This is my first instruction");
//$recipe1->addInstruction("This is my second instruction");

//$recipe1->addTag("Breakfast");
//$recipe1->addTag("Main Course");

//$recipe1->setYield("6 servings");


//echo $recipe1->displayRecipe();
//echo $recipe2->displayRecipe();
//echo $recipe1;
//echo Render::displayRecipe($recipe1);
//echo new Render();

echo Render::displayRecipe($belgian_waffles);
//var_dump($recipe1);