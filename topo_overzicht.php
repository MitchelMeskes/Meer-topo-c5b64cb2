<?php

$goed = 0;
$fout = 0;


$alles = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
);

foreach ($alles as $landen=>$stede){
    echo "Wat is he hooftstad van: $landen".PHP_EOL;
    $ant = readline();

    if ($ant === $stede){
        echo "Goed!".PHP_EOL;
        $goed++;
    }
    else {
        echo "Helaas, $ant is niet de hoofdstad van $landen.".PHP_EOL;
        echo "Het goeden antwoord is: $stede".PHP_EOL;
        $fout++;
    }
}

echo "Je hebt $goed van de 10 goed".PHP_EOL;
echo "Je hebt $fout van de 10 fout".PHP_EOL;

//Meer topo


    if ($goed >= 6 ){
        echo "Je hebt het zo goed gedaan dat je landen en de steden daar van mag toevoegen.".PHP_EOL;
        echo "Hoeveel landen wil je toevoegen?".PHP_EOL;


        $verder = readline();

            if (is_numeric($verder));
                else {
                echo "Alleen nummer's!";
                exit;
                }

            for ($i = 1;$i <= $verder; $i++) {
                echo "Welke land wil je toevoegen?\n";
                $land = readline();
                echo "Wat is de hoofdstad van $land?" . PHP_EOL;
                $stad = readline();
                $alles[$land] = $stad;
            }

        echo "De volgende landen zitten in de database." . PHP_EOL;

            foreach ($alles as $land=>$stad) {
                  echo "$land - $stad".PHP_EOL;
            }
    }
    else {
        echo "Als je 6 goeden antwoorden heb mag je landen en de steden er van toevoegen.".PHP_EOL;
    }

