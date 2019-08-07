<?php
namespace Engine;
use function \cli\line;
use function \cli\prompt;
use function BrainGames\Calculator\tutu;

const ROUND_GAME = 3;

function engine($description, $game)
{
    line('Welcome to the Brain Engine Games!');
    line($description);
    $usersName = prompt('May i have your name');
    line("Hello, %s!", $usersName);
    for ($i = 0; $i < ROUND_GAME; $i++) {
        $data = $game();
        list('correctResponse' => $correctResponse, 'question' => $question) = $data;
        line($question);
        $usersAnswer = prompt("Your answer");
        if ($usersAnswer !== $correctResponse) {
            line("'{$usersAnswer}' is wrong answer ;(. Correct answer was '{$correctResponse}'");
            line("Let's try again, {$usersName}");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, {$usersName}");
}
