<?php
  namespace BrainGames\CheckFairness;
  use function \cli\line;
  use function \cli\prompt;
function yesOrNo()
{
    line("Welcome to the Brain Game!");
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name? ');
    line("Hello , %s!", $name);
    $counterRightResponse = 3;
    $variantsAnswer = ["yes","no"];
    while ($counterRightResponse > 0) {
	    $random = rand();
	    $correctResponse = $random % 2 === 0 ? "yes" : "no";
	    line("Question: {$random}");
	    $answerUser = prompt("Your answer");
	    if (in_array($answerUser, $variantsAnswer)) {
		    if ($answerUser === $correctResponse) {
			    $counterRightResponse--;
			    line("Correct!");
		    } else {
			    line("\"{$answerUser}\" is wrong answer ;(. Correct answer was \"{$correctResponse}\". Let's try again, {$name}!");
			    break;
		    }
	    } else {
		    line("Answer can only no or yes");
		    break;
	    }
	    if ($counterRightResponse === 0) {
		    line("Congratulations, {$name}!");
	    }
    }
}
