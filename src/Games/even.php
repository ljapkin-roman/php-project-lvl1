<?php
namespace Src\Games\Even;
use function \cli\line;
use function \cli\prompt;
use function Src\Engine\engine;

function isEven($number)
{
    return $number % 2;
}

$evenness = function () {
    $enigmaNumber = rand();
    $variantsAnswer = ["yes","no"];
    $data['rules'] = 'Answer "yes" if number even otherwise answer "no".';
    $data['question'] = "is {$enigmaNumber} even?";
    $data['correctResponse'] =  isEven($enigmaNumber) ? "yes" : "no";
    return $data;
};
function launch($fn)
{
    $uploadData = function () {
        $question = rand();
        $data['question'] = $question;
        $data['correctAnswer'] =  isEven($question) ? "no" : "yes";
        return $data;
    };
    engine(DESCRIPTION, $uploadData);
}
