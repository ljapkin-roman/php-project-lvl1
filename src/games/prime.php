<?php
namespace Src\Games\Prime;
use function \cli\line;
use function \cli\prompt;
use function Src\Engine\engine;
function isPrime($number)
{
	for ($i = 2; $i < round($number / 2); $i++) {
		if ($number % $i === 0) {
		    return false;
		}
	    }
	return true;
}
function prime($userName)
{
    $correctAnswer;
    $number = rand(2, 1000);
    $correctAnswer = isPrime($number) ? "yes" : "no";
    line("Question: {$number}");
    $userAnswer = prompt("Your answer");
    if ($userAnswer === $correctAnswer) {
        line("Correct!");
        return true;
    } else {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again, {$userName}");
    }
}
function launch()
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    engine('Src\Games\Prime\prime', $rules);
}
