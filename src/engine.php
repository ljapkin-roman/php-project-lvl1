<?php
namespace Ogurchik\Engine;

use function \cli\line;
use function \cli\prompt;

const ROUNDS_COUNT = 3;

function engine($description, $generateData)
{
    line('Welcome to the Brain Games!');
    line($description);
    $usersName = prompt('May i have your name');
    line("Hello, %s!", $usersName);
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        list('correctAnswer' => $correctAnswer, 'question' => $question) = $generateData();
        line("Question : {$question}");
        $usersAnswer = prompt("Your answer");
        if ($usersAnswer !== $correctAnswer) {
            line("'{$usersAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
            line("Let's try again, {$usersName}");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, {$usersName}");
}
