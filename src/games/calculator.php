<?php
namespace BrainGames\Calculator;
use function \cli\line;
use function \cli\prompt;
use function BrainGames\Engine\engine;

function calculator($userName)
{
    $correctAnswer = 0;
    $operationSign = ["+", "-", "*"];
    $selectedSignForExpression = rand(0, 2);
    $firstOperand = rand(1, 50);
    $secondOperand = rand(1, 50);
    if ($selectedSignForExpression === 0) {
        $correctAnswer = $firstOperand + $secondOperand;
    }
    if ($selectedSignForExpression === 1) {
        $correctAnswer = $firstOperand - $secondOperand;
    }
    if ($selectedSignForExpression === 2) {
        $correctAnswer = $firstOperand * $secondOperand;
    }
    line("Question: {$firstOperand} {$operationSign[$selectedSignForExpression]} {$secondOperand}");
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
function launch() {
	engine('BrainGames\Calculator\calculator', 'What is the result of the expression?');
}
