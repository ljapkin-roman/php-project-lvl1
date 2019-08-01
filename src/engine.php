<?php
namespace Src\Engine;
use function \cli\line;
use function \cli\prompt;
use function BrainGames\Calculator\tutu;

function engine($game)
{
    line('Welcome to the Brain Engine Games!');
    line($game()['rules']);
    $usersName = prompt('May i have your name');
    line("Hello, %s!", $usersName);
    $roundCount = 0;
    for ($roundCount = 0; $roundCount < 3; $roundCount++) {
        $data = $game();
        list('correctResponse' => $correctResponse, 'rules' => $rules, 'question' => $question) = $data;
        line($question);
        $usersAnswer = prompt("Your answer");
        if ($usersAnswer !== $correctResponse) {
            line("'{$usersAnswer}' is wrong answer ;(. Correct answer was '{$correctResponse}'");
            line("Let's try again, {$usersName}");
            return false;
        }
        line("Correct!");
    }
    line("Congratulations, {$usersName}");
}
