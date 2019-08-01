<?php
namespace Src\Games\Progression;
use function \cli\line;
use function \cli\prompt;
use function Src\Engine\engine;
function progression()
{
    $correctAnswer = 0;
    $increment = rand(1, 10);
    $start = rand(1, 100);
    $rowOfProgresValue = "";
    for ($i = 1; $i < 11; $i++) {
        if ($increment !== $i) {
            $rowOfProgresValue .= " " . ($start + $i * $increment);
        } else {
            $correctAnswer = $start + $i * $increment;
            $rowOfProgresValue .= " .. " ;
        }
    }
    $data['correctResponse'] = strval($correctAnswer);
    $data['rules'] = 'What number is missing in the progression?';
    $data['question'] = "Question : " . $rowOfProgresValue;
    return $data;
}
function launch()
{
    engine('Src\Games\Progression\progression');
}
