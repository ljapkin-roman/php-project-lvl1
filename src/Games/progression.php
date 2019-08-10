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
    $uploadData = function () {
        $increment = rand(1, 10);
        $start = rand(1, 100);
        $hiddenIndex = rand(0, LENGTH_OF_PROGRESSION - 1);
        $progression = createProgression($start, $increment, LENGTH_OF_PROGRESSION);
        $data['correctAnswer'] = strval($progression[$hiddenIndex]);
        $progression[$hiddenIndex] = "..";
        $data['question'] = implode(" ", $progression);
        return $data;
    };
    engine(DESCRIPTION, $uploadData);
}
