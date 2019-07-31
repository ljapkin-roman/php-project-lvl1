<?php
namespace Src\Engine;
use function \cli\line;
use function \cli\prompt;
use function BrainGames\Calculator\tutu;

function engine($fn, $rule)
{
    line('Welcome to the Brain Engine Games!');
    line($rule);
    $userName = prompt('May i have your name');
    line("Hello, %s!", $userName);
    $counterAnswer = 0;
    while ($counterAnswer <= 3) {
        if (!$fn($userName)) {
            return false;
        }
        $counterAnswer++;
        if ($counterAnswer === 3) {
            line("Congratulations, {$userName}");
            return true;
        }
    }
}
