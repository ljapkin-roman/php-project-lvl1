<?php
namespace Ogurchik\Games\calculator;
use function Ogurchik\Engine\engine;

const DESCRIPTION = 'What is the result of the expression?';
const OPERATORS = ["+", "-", "*"];

function launch()
{
      $generateData = function () {
        $firstOperand = rand(1, 50);
        $secondOperand = rand(1, 50);
        $operator = OPERATORS[rand(0, count(OPERATORS) - 1)];
        switch ($operator) {
            case "+":
                $correctAnswer = $firstOperand + $secondOperand;
                break;
            case "-":
                $correctAnswer = $firstOperand - $secondOperand;
                break;
            case "*":
                $correctAnswer = $firstOperand * $secondOperand;
                break;
        }
          $data['question'] = "$firstOperand $operator $secondOperand";
          $data['correctAnswer'] = (string)$correctAnswer;
          return $data;
      };
    engine(DESCRIPTION, $generateData);
}
