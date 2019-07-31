<?php
namespace Src\Games\Calculator;
use function \cli\line;
use function \cli\prompt;
use function Src\Engine\engine;

function calculator($userName)
{
    $correctAnswer = 0;
    $variantSign = ["+", "-", "*"];
    $symbolOperation = rand(0, 2);
    $firstOperand = rand(1, 50);
    $secondOperand = rand(1, 50);
    switch ($symbolOperation) {
        case 0:
            $correctAnswer = $firstOperand + $secondOperand;
            break;
        case 1:
            $correctAnswer = $firstOperand - $secondOperand;
            break;
        case 2:
            $correctAnswer = $firstOperand * $secondOperand;
            break;
    }
    line("Question: {$firstOperand} {$variantSign[$symbolOperation]} {$secondOperand}");
    $answerUser = intval(prompt("Your answer  "));
    if ($answerUser === $correctAnswer) {
        line("Correct!");
        return true;
    } else {
        line("'{$answerUser}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again, {$userName}");
        return false;
    }
}
function launch()
{
    $rules ='What is the result of the expression?';
    engine('Src\Games\Calculator\calculator', $rules);
}
