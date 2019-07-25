<?php
namespace BrainGames\Progression; 
use function \cli\line;
use function \cli\prompt;
function progression($nameUser)
{
    $correctAnswer = 0;
    $sizeIncrementalStep = rand(1, 10);
    $startPoint = rand(1, 100);
    $progresValues = "";
    for ($i = 1; $i < 11; $i++) {
        if ($sizeIncrementalStep !== $i) {
            $progresValues .= " " . ($startPoint + $i * $sizeIncrementalStep);
        } else {
            $correctAnswer = $startPoint + $i * $sizeIncrementalStep;
            $progresValues .= " " . ".." . " ";
        }
    }
    line("Question :" . "{$progresValues}\n");
    $userAnswer = intval(prompt("Your answer"));
    if ($userAnswer === $correctAnswer) {
        line("Correct!\n");
        return true;
    } else {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again {$nameUser}");
        return false;
    }
}
