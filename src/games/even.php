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
function yesOrNo($nameUser)
{
    $variantsAnswer = ["yes","no"];
        $enigmaNumber = rand();
        $correctResponse =  isEven($enigmaNumber) ? "yes" : "no";
        line("Question: {$enigmaNumber}");
        $answerUser = prompt("Your answer");
	if (!in_array($answerUser, $variantsAnswer)) {
	     line("Answer can only no or yes!");
	     return false;
	}

        if ($answerUser !== $correctResponse) {
     line("\"{$answerUser}\" is wrong answer ;l(. Correct answer was \"{$correctResponse}\". 
			Let's try again, {$nameUser}!");
            return false;

        }
	line('Correct');
	return true;
}
function launch()
{
    $rules = 'Answer "yes" if number even otherwise answer "no".';
    engine('Src\Games\Even\yesOrNo', $rules);
}
