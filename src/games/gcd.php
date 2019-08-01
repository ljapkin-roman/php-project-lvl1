<?php
namespace Src\Games\GCD;
use function \cli\line;
use function \cli\prompt;
use function Src\Engine\engine;
function getGCD($smallNumber, $bigNumber)
{
    if ($bigNumber % $smallNumber === 0) {
        return $smallNumber;
    }
    $rest = $bigNumber % $smallNumber;
    if ($bigNumber % $rest === 0 && $smallNumber % $rest === 0) {
        return $rest;
    } else {
        return getGCD($rest, $smallNumber);
    }
}
function greatest_common_divider()
{
    $smallNumber = rand(1, 200);
    $bigNumber = rand(1, 200);
    if ($smallNumber > $bigNumber) {
        list($smallNumber, $bigNumber) = array($bigNumber, $smallNumber);
    }
    $data['correctResponse'] = strval(getGCD($smallNumber, $bigNumber));
    $data['rules'] = 'Find the greatest common divisor of given number';
    $data['question'] = "Question : {$smallNumber} {$bigNumber}";
    return $data;

}
function launch()
{
    engine('Src\Games\GCD\greatest_common_divider');
}
