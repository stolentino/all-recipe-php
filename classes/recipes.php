<?php

class Recipe
{
    private $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Sal Peterino";

    private $measurements = array(
        "tsp",
        "tbsp",
        "cup",
        "oz",
        "lb",
        "fl oz",
        "pint",
        "quart",
        "gallon",
    );

    public function setTitle($title)
    {
        $this->title = ucwords($title);
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function addIngredient($item, $amount = null, $measure = null)
    {
        if($amount != null && !is_float($amount) && !is_int($amount)){
            exit("The amount must be a float: " . gettype($amount) . " $amount given");
        }
        if($measure != null && !in_array(strtolower($measure), $this->measurements)){
            exit("Please enter a valid measurement: " . implode(", ", $this->measurements));
        }
        $this->ingredients[] = array(
            "item" => ucwords($item),
            "amount" => $amount,
            "measure" => $measure
        );
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
$recipe1->addIngredient("egg", 1);

$recipe2 = new Recipe();
$recipe2->source = "Betty Crocker";
$recipe2->setTitle("my second recipe");

echo $recipe1->getTitle();
echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();

//var_dump($recipe1);