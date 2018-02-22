<?php

$visitorsOfDays = [];

while (fscanf(STDIN, "%d %d", $day, $visitors) && $day != 0) {
	if (isDayRecorded($visitorsOfDays, $day)) {
		$visitorsOfDays[$day] += $visitors;
	} else {
		$visitorsOfDays[$day] = $visitors;
	}
}

if (count($visitorsOfDays) > 0) {
	echo findMinVisitedDay($visitorsOfDays);
}

function isDayRecorded($visitorsOfDays, $day) {
	foreach ($visitorsOfDays as $key => $value) {
		if ($key === $day) {
			return true;
		}
	}

	return false;
}

function findMinVisitedDay($visitorsOfDays) {
	$minDay = null;
	$minVisitors = null;

	foreach ($visitorsOfDays as $day => $visitors) {
		if ($minVisitors === null || $minVisitors > $visitors) {
			$minDay = $day;
			$minVisitors = $visitors;
		}
	}

	return $minDay;
}
