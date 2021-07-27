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
echo $recipe1->source;
$recipe1->source = "Terry Prieto";
echo $recipe1->source;

var_dump($recipe1);