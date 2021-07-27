<?php

class Recipe
{
    public $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Sal Peterino";

    public function displayRecipe()
    {
        return $this->title . " by " . $this->source;
    }

}

$recipe1 = new Recipe();
//echo $recipe1->source;
$recipe1->source = "Terry Prieto";
//echo $recipe1->source;
$recipe1->title = "My First Recipe";

$recipe2 = new Recipe();
$recipe2->source = "Betty Crocker";
$recipe2->title = "My Second Recipe";

echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();

//var_dump($recipe1);