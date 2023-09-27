<?php
function calculateAverage($studentGrades) {
  foreach ($studentGrades as $student => $grades) {
    $average = array_sum($grades) / count($grades);
    echo "The average grade for $student is: $average\n";
  }
}

$studentGrades = array(
  "Alice" => array(80, 90, 85),
  "Bob" => array(70, 75, 80),
  "Charlie" => array(90, 85, 95)
);

calculateAverage($studentGrades);