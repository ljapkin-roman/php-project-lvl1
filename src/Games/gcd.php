<?php
namespace Games\GCD;
use function \cli\line;
use function \cli\prompt;
use function Engine\engine;

const DESCRIPTION = 'Find the greatest common divisor of given number';

function getGcd($first, $second)
{
    if ($second % $first === 0) {
        return $first;
    }
    $rest = $second % $first;
    if ($second % $rest === 0 && $first % $rest === 0) {
        return $rest;
    } else {
        return getGcd($rest, $first);
    }
}

function launch()
{
    $gcd = function () {
        $first = rand(1, 200);
        $second = rand(1, 200);
        $data['correctResponse'] = strval(getGcd($first, $second));
        $data['question'] = "Question : {$first} {$second}";
        return $data;
    };
    engine(DESCRIPTION, $gcd);
}
