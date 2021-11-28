<?php
include "classes/recipes.php";
include "classes/render.php";
include "classes/recipecollection.php";
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

//echo Render::displayRecipe($belgian_waffles);
//var_dump($recipe1);

$cookbook = new RecipeCollection("Treehouse Recipes");
$cookbook->addRecipe($lemon_chicken);
$cookbook->addRecipe($granola_muffins);
$cookbook->addRecipe($belgian_waffles);
$cookbook->addRecipe($pepper_casserole);
$cookbook->addRecipe($lasagna);
$cookbook->addRecipe($dried_mushroom_ragout);
$cookbook->addRecipe($rabbit_catalan);
$cookbook->addRecipe($grilled_salmon_with_fennel);
$cookbook->addRecipe($pistachio_duck);
$cookbook->addRecipe($chili_pork);
$cookbook->addRecipe($crab_cakes);
$cookbook->addRecipe($beef_medallions);
$cookbook->addRecipe($silver_dollar_cakes);
$cookbook->addRecipe($french_toast);
$cookbook->addRecipe($corn_beef_hash);
$cookbook->addRecipe($granola);
$cookbook->addRecipe($spicy_omelette);
$cookbook->addRecipe($scones);

//var_dump($cookbook);
//print_r($cookbook);

//echo Render::listRecipes($cookbook->getRecipeTitles());

$breakfast = new RecipeCollection("Favorite Breakfasts");
foreach($cookbook->filterByTag("breakfast") as $recipe){
    $breakfast->addRecipe($recipe);
}

echo Render::listRecipes($breakfast->getRecipeTitles());








