<?php

class Render
{
    public function displayRecipe($recipe)
    {
        return $recipe->getTitle() . " by " . $recipe->getSource();
    }

}
