<?php
namespace BrainGames\Progression;
use function \cli\line;
use function \cli\prompt;
function progression() {
    $sizeIncrementalStep = rand(1, 10);
    $startPoint = rand(1,100);
    $progresValues = "";
    for ($i = 1;$i < 11;$i++) {
        $progresValues .= ": ". $startPoint + $i * $sizeIncrementalStep;	
    }
    print_r($progresValues);
}
