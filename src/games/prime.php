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
function prime()
{
    $number = rand(2, 1000);
    $data['correctResponse'] = isPrime($number) ? "yes" : "no";
    $data['rules'] = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $data['question'] = "is {$number} prime?";
    return $data;
}
function launch()
{
    engine('Src\Games\Prime\prime');
}
