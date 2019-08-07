<?php
namespace Games\Progression;
use function \cli\line;
use function \cli\prompt;
use function Engine\engine;

const DESCRIPTION = 'What number is missing in the progression?';
const LENGTH_OF_PROGRESSION = 11;

function createProgression($start, $step, $lengthOfProgression)
{
    $progression = [];
    for ($i = 0; $i < $lengthOfProgression; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}
function launch()
{

    $progression = function () {
        $correctAnswer = 0;
        $increment = rand(1, 10);
        $start = rand(1, 100);
        $maskElement = rand(0, LENGTH_OF_PROGRESSION - 1);
        $progres = createProgression($start, $increment, LENGTH_OF_PROGRESSION);
        $data['correctResponse'] = strval($progres[$maskElement]);
        $progres[$maskElement] = "..";
        $data['question'] = implode(" ", $progres);
        return $data;
    };
    engine(DESCRIPTION, $progression);
}
