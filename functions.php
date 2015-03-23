<?php
//global scope variable, niet beschikbaar in local scope!
$ahh = "Zie je wel!";


// Binnen functie zijn variables local scope. Om toch een global scope variable te bereiken gebruik keyword global!
function praat($persoon, $tekst)
{
	global $ahh;
	echo $persoon . " zegt: \"" . $tekst . "\" <br>";
	echo $ahh;
}


praat("Maarten Nouwen", "Hoe laat is het nu?");
praat("Nathalie Rog", "Ik ben zo moe!");

echo $persoon . $tekst;
