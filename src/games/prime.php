<?php
namespace BrainGames\Prime;
use function \cli\line;
use function \cli\prompt;
function prime($nameUser)
{
    $correctAnswer;
    $offerNumber = rand(2, 1000);
    for ($i = 2;$i < round($offerNumber/2); $i++) {
        if ($offerNumber % $i === 0) {
            $correctAnswer = "no";
            break;
        }
        $correctAnswer = "yes";
    }
    line("Question: {$offerNumber}");
    $userAnswer = prompt("Your answer");
    if ($userAnswer === $correctAnswer) {
        line("Correct!");
        return true;
    } else {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again {$nameUser}");
    }

}

