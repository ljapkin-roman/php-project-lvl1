<?php
namespace Games\Calculator;
use function \cli\line;
use function \cli\prompt;
use function Engine\engine;

const DESCRIPTION = 'What is the result of the expression?';

function launch()
{
      $calculator = function () {
        $operators = ["+", "-", "*"];
        $variantCount = count($operators) - 1;
        $symbolOperation = rand(0, $variantCount);
        $firstOperand = rand(1, 50);
        $secondOperand = rand(1, 50);
        $operator = $operators[$symbolOperation];
        switch ($operator) {
            case "+":
                $data['correctResponse'] = $firstOperand + $secondOperand;
                break;
            case "-":
                $data['correctResponse'] = $firstOperand - $secondOperand;
                break;
            case "*":
                $data['correctResponse'] = $firstOperand * $secondOperand;
                break;
        }
          $data['rules'] = 'What is the result of the expression?';
          $data['question'] = "Question: {$firstOperand} {$operator} {$secondOperand}";
          $data['correctResponse'] = strval($data['correctResponse']);
          return $data;
      };
    engine(DESCRIPTION, $calculator);
}
