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
    $enigmaNumber = rand();
    $variantsAnswer = ["yes","no"];
    $data['rules'] = 'Answer "yes" if number even otherwise answer "no".';
    $data['question'] = "is {$enigmaNumber} even?";
    $data['correctResponse'] =  isEven($enigmaNumber) ? "yes" : "no";
    return $data;

}
function launch()
{
    engine('Src\Games\Even\yesOrNo');
}
