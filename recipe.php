<?php

class Recipe
{
    private $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Sal Peterino";

    public function setTitle($title)
    {
        $this->title = ucwords($title);
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function displayRecipe()
    {
        return $this->title . " by " . $this->source;
    }

}

$recipe1 = new Recipe();
//echo $recipe1->source;
$recipe1->source = "Terry Prieto";
//echo $recipe1->source;
$recipe1->setTitle("my frst recipe");

$recipe2 = new Recipe();
$recipe2->source = "Betty Crocker";
$recipe2->setTitle("my second recipe");

echo $recipe1->getTitle();
echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();

//var_dump($recipe1);