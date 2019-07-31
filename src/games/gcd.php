<?php
namespace Src\Games\GCD;
use function \cli\line;
use function \cli\prompt;
use function Src\Engine\engine;
function getGCD($min, $max)
{
    if ($max % $min === 0) {
        return $min;
    }
    $rest = $max % $min;
    if ($max % $rest === 0 && $min % $rest === 0) {
        return $rest;
    } else {
        return getGCD($rest, $min);
    }
}
function greatest_common_divider($userName)
{
    $minorityNumber = rand(1, 200);
    $largerNumber = rand(1, 200);
    if ($minorityNumber > $largerNumber) {
        list($minorityNumber, $largerNumber) = array($largerNumber, $minorityNumber);
    }
    $correctAnswer = getGCD($minorityNumber, $largerNumber);
    line("Question : {$minorityNumber} {$largerNumber}");
    $userAnswer = intval(prompt("Your answer"));
    if ($correctAnswer === $userAnswer) {
        line("Correct!");
        return true;
    } else {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again, {$userName}");
        return false;
    }
}
function launch()
{
        $rules = 'Find the greatest common divisor of given number';
    engine('Src\Games\GCD\greatest_common_divider', $rules);
}
