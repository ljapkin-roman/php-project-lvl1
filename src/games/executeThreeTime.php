<?php
    namespace BrainGames\MainEngine;
use function \cli\line;
use function BrainGames\CheckFairness\yesOrNo;
function executeThreeTime($fart, $nameUser)
{
	$counterSuccessfulCompletion = 0;
	for ($i = 0; $i < 3; $i++) {
		if($fart()) {
			$counterSuccessfulCompletion++;
		} else {
			return false;
		}
	}
	if($counterSuccessfulCompletion === 3) {
		echo("Congratulations, {$nameUser}!\n");
		return true;
	}
}
