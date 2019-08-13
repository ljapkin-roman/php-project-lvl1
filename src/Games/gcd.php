<?php
namespace Ogurchik\Games\gcd;
use function Ogurchik\Engine\engine;

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
    $generateData = function () {
        $first = rand(1, 200);
        $second = rand(1, 200);
        $data['correctAnswer'] = (string)getGcd($first, $second);
        $data['question'] = "$first $second";
        return $data;
    };
    engine(DESCRIPTION, $generateData);
}
