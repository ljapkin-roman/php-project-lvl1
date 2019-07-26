<?php
namespace BrainGames\Progression; 
use function \cli\line;
use function \cli\prompt;
use function BrainGames\Engine\engine;
function progression($userName)
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
        line("Let's try again, {$userName}");
        return false;
    }
}
function launch() {
	engine('BrainGames\Progression\progression', 'What number is missing in the progression?');
}
