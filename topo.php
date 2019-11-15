<?php

$array = array('Mexico' => 'Burrito', 'Nederland' => 'Amsterdam');

$aantal_correcte_antwoorden = 0;

foreach ($array as $land => $city)
{
  $gebruikers_antwoord;
  echo 'Wat is de hoofdtstad van ' . $land . '?' . "\n";
  $gebruikers_antwoord = readline();
  CheckAntwoord($gebruikers_antwoord, $city);
}


echo 'Je hebt er ' . $aantal_correcte_antwoorden . ' goed van de ' . count($array) . "\n";


function CheckAntwoord($string, $correcte_antwoord)
{

  global $aantal_correcte_antwoorden;

  if ($string == $correcte_antwoord)
  {
    echo "Correct! \n";
    $aantal_correcte_antwoorden++;
  }
  else
  {
    echo "Helaas het antwoord was " . $correcte_antwoord . ' :(' . "\n";
  }


}


 ?>
