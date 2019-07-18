<?php
  namespace BrainGames\CheckFairness;
  use function \cli\line;
  use function \cli\prompt;
function yesOrNo()
{
    $variantsAnswer = ["yes","no"];
	    $random = rand();
	    $correctResponse = $random % 2 === 0 ? "yes" : "no";
	    line("Question: {$random}");
	    $answerUser = prompt("Your answer");
	    if (in_array($answerUser, $variantsAnswer)) {
		    if ($answerUser === $correctResponse) {
			    line("Correct!");
			    return true;
		    } else {
			    line("\"{$answerUser}\" is wrong answer ;(. Correct answer was \"{$correctResponse}\". Let's try again, {$name}!");
			    return false;
		    }
	    } else {
		    line("Answer can only no or yes");
		    return false;
	    }
}
