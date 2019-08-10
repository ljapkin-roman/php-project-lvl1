<?php
namespace Games\Prime;
use function \cli\line;
use function \cli\prompt;
use function Engine\engine;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i < round($number / 2); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}


function launch()
{
    $uploadData = function () {
        $question = rand(2, 1000);
        $data['correctAnswer'] = isPrime($question) ? "yes" : "no";
        $data['question'] = $question;
        return $data;
    };
    engine(DESCRIPTION, $uploadData);
}
