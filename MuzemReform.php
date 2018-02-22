<?php

$days = [];
$visitorsOfDays = [];

while (fscanf(STDIN, "%d %d", $day, $visitors) && $day != 0) {
	$alreadyIndex = getIndexOfDay($days, $day);

	if ($alreadyIndex !== false) {
		$visitorsOfDays[$alreadyIndex] += $visitors;
	} else {
		$days[] = $day;
		$visitorsOfDays[] = $visitors;
	}
}

if (count($days) > 0) {
	echo findMinVisitedDay($days, $visitorsOfDays);
}

function getIndexOfDay($days, $day) {
	for ($i = 0; $i < count($days); $i++) {
		if ($days[$i] == $day) {
			return $i;
		}
	}

	return false;
}

function findMinVisitedDay($days, $visitorsOfDays) {
	$minIndex = 0;
	$minVisitors = $visitorsOfDays[0];

	for ($i = 1; $i < count($days); $i++) {
		if ($minVisitors > $visitorsOfDays[$i]) {
			$minIndex = $i;
			$minVisitors = $visitorsOfDays[$i];
		}
	}

	return $days[$minIndex];
}
