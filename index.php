<?php
/**
 * @param $leeftijd
 * @return string
 */

function cinema($leeftijd)
{
    if ($leeftijd < 16) {
        echo $leeftijd . ' jaar is te jong voor deze film.';
    } elseif ($leeftijd > 18) {
        echo 'Je bent al ' . $leeftijd . ' jaar. Geniet van de film!';
    } else {
        echo $leeftijd . ' jaar, je hebt ouderlijk toezicht nodig.';
    }  
};

echo cinema(13), PHP_EOL;
echo cinema(17), PHP_EOL;
echo cinema(20), PHP_EOL;