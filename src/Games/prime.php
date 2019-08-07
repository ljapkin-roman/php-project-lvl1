<?php
namespace Games\Prime;
use function \cli\line;
use function \cli\prompt;
use function Engine\engine;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
function isPrime($number)
{
    for ($i = 2; $i < round($number / 2); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}


function launch()
{
    $prime = function () {
        $number = rand(2, 1000);
        $data['correctResponse'] = isPrime($number) ? "yes" : "no";
        $data['question'] = "is {$number} prime?";
        return $data;
    };
    engine(DESCRIPTION, $prime);
}
