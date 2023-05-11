// Write a program of mad libs story 
// Author: Sirisha Adivishnu 
<?php
function generateStory($singular_noun, $verb, $color, $distance_unit)
{
  $story = "\nThe ${singular_noun}s are lovely, dark, and ${color}.\n
  But I have promises to keep,\n
  And ${distance_unit} to go before I ${verb},\n
  And ${distance_unit} to go before I ${verb}.\n";
     return $story;
}
echo generateStory("bear", "swim", "blue", "42");
echo generateStory("cat", "climb", "brown", "7");
echo generateStory("bird", "fly", "red", "2");
