<?php
namespace Ogurchik\Games\progression;
use function Ogurchik\Engine\engine;

const DESCRIPTION = 'What number is missing in the progression?';
const LENGTH = 10;

function createProgression($start, $step, $length)
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}
function launch()
{
    $generateData = function () {
        $diff = rand(1, 10);
        $start = rand(1, 100);
        $hiddenElementIndex = rand(0, LENGTH - 1);
        $progression = createProgression($start, $diff, LENGTH);
        $data['correctAnswer'] = (string)$progression[$hiddenElementIndex];
        $progression[$hiddenElementIndex] = "..";
        $data['question'] = implode(" ", $progression);
        return $data;
    };
    engine(DESCRIPTION, $generateData);
}
