<?php
  namespace BrainGames\Even;
  use function \cli\line;
  use function \cli\prompt;
  use function BrainGames\Engine\engine;
function yesOrNo($nameUser)
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
            line("\"{$answerUser}\" is wrong answer ;l(. Correct answer was \"{$correctResponse}\". 
			Let's try again, {$nameUser}!");
            return false;
        }
    } else {
        line("Answer can only no or yes!");
        return false;
    }
}
function launch()
{
    engine('BrainGames\Even\yesOrNo', 'Answer "yes" if number even otherwise answer "no".');
}
