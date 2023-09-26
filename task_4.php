<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        
        echo "Student $student Average Grade: $average\n";
    }
}
echo "\n";
$studentGrades = array(
    'MD Sirajul Islam' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'MD Walid Miah' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'MD Shuvo Miah' => array('Math' => 75, 'English' => 80, 'Science' => 85)
);
calculateAverageGrades($studentGrades);
?>
