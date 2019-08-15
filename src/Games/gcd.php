<?php
namespace Ogurchik\Games\gcd;
use function Ogurchik\Engine\engine;

const DESCRIPTION = 'Find the greatest common divisor of given number';

function getGcd($first, $second)
{
        return $first % $second ? getGcd($second, $first % $second) : $second;
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
