<?php
  namespace Src\Games\Even;
  use function \cli\line;
  use function \cli\prompt;
  use function Src\Engine\engine;
function isEven($number)
{
	if ($number % 2 === 0) {
		return true;
	}
	return false;
}
function yesOrNo()
{
    $variantsAnswer = ["yes","no"];
    $rules = 'Answer "yes" if number even otherwise answer "no".';
    $quest = "is {$enigmaNumber} even?";
        $enigmaNumber = rand();
        $correctResponse =  isEven($enigmaNumber) ? "yes" : "no";

}
function launch()
{
    engine('Src\Games\Even\yesOrNo', $rules);
}
