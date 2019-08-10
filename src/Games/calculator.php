<?php
namespace Games\Calculator;
use function \cli\line;
use function \cli\prompt;
use function Engine\engine;

const DESCRIPTION = 'What is the result of the expression?';
const OPERATORS = ["+", "-", "*"];

function launch()
{
      $play = function () {
        $symbolOperation = rand(0, count(OPERATORS) - 1);
      $uploadData = function () {
        $firstOperand = rand(1, 50);
        $secondOperand = rand(1, 50);
        $operator = OPERATORS[rand(0, count(OPERATORS) - 1)];
        switch ($operator) {
            case "+":
               $correctAnswer = (string)($firstOperand + $secondOperand);
                break;
            case "-":
                $correctAnswer = (string)($firstOperand - $secondOperand);
                break;
            case "*":
                $correctAnswer = (string)($firstOperand * $secondOperand);
                break;
        }
          $data['question'] = "$firstOperand $operator $secondOperand";
          $data['correctAnswer'] = $correctAnswer;
          return $data;
      };
    engine(DESCRIPTION, $uploadData);
}
