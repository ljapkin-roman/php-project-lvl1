<?php
namespace BrainGames\Greatest_Common_Divider;
use function \cli\line;
use function \cli\prompt;
function gcd($min, $max)
{
    if ($max % $min === 0) {
        return $min;
    }
    $rest = $max % $min;
    if ($max % $rest === 0 && $min % $rest === 0 ) {
        return $rest;
    } else {
        return gcd($rest, $min);
    }
}
function greatest_common_divider($nameUser)
{
    $minorityNumber = rand(1, 200);
    $largerNumber = rand(1, 200);
    if ($minorityNumber > $largerNumber) {
        list($minorityNumber, $largerNumber) = array($largerNumber, $minorityNumber);
    }
    $correctAnswer = gcd($minorityNumber, $largerNumber);
    line("Question : {$minorityNumber} {$largerNumber}");
    $userAnswer = intval(prompt("Your answer :"));
    if ($correctAnswer === $userAnswer) {
        line("Correct!");
        return true;
    } else {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again {$nameUser}");
        return false;
    }
}

