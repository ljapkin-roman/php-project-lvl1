<?php
namespace Src\Games\Calculator;
use function \cli\line;
use function \cli\prompt;
use function Src\Engine\engine;

function calculator()
{
    $signVariants = ["+", "-", "*"];
    $variantCount = count($signVariants) - 1;
    $symbolOperation = rand(0, $variantCount);
    $firstOperand = rand(1, 50);
    $secondOperand = rand(1, 50);
    switch ($symbolOperation) {
        case 0:
            $data['correctResponse'] = $firstOperand + $secondOperand;
            break;
        case 1:
            $data['correctResponse'] = $firstOperand - $secondOperand;
            break;
        case 2:
            $data['correctResponse'] = $firstOperand * $secondOperand;
            break;
    }
    $data['rules'] ='What is the result of the expression?';
    $data['question'] = "Question: {$firstOperand} {$signVariants[$symbolOperation]} {$secondOperand}";
    $data['correctResponse'] = strval($data['correctResponse']);
    return $data;

}
function launch()
{
    engine('Src\Games\Calculator\calculator');
}
