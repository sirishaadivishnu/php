<?php
    // Building text adventure game 
   // Author: Sirisha Adivishnu
function pickMushrooms(){
	
     global $location, $has_mushrooms;
     if ($location !== "woods"){
     echo "There aren't any mushrooms to pick!\n";
    } else {
       echo "You pick some mushrooms.\n";
       $has_mushrooms = TRUE;
    }    
}  