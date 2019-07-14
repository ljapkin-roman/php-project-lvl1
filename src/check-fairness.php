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
    $numberOfTries = 3;
    while ($numberOfTries <= 3) {
	    $random = rand();
	    $correctResponse = 0;
	    if ($random % 2 === 0) {
		    $correctResponse = "yes";
	    } else {
		    $correctResponse ="no";
	    }
	    line("Question: {$random}");
	    $answerUser = prompt("Your answer");
	    if ($answerUser === 'yes') {
		    line("good good");
	    }
    }
}
