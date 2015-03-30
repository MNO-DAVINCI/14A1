<?php
$ahh = "Zie je wel!";

function praat($persoon, $tekst)
{
	global $ahh;
	echo $persoon . " zegt: \"" . $tekst . "\" <br>";
	echo $ahh;
}


praat("Maarten Nouwen", "Hoe laat is het nu?");
praat("Nathalie Rog", "Ik ben zo moe!");

echo $persoon . $tekst;
