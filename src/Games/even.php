<?php
namespace Ogurchik\Games\even;

use function Ogurchik\Engine\engine;

const DESCRIPTION  = 'Answer "yes" if number even otherwise answer "no".';

function isEven($number)
{
    return $number % 2;
}

function launch()
{
    $generateData = function () {
        $question = rand();
        $data['question'] = $question;
        $data['correctAnswer'] =  isEven($question) ? "no" : "yes";
        return $data;
    };
    engine(DESCRIPTION, $generateData);
}
