<?php
// Function in computing grades
function getGrade($score){
    if($score >= 98 && $score <=100){
        return 1.00;
    } elseif($score >= 95){
        return 1.25;
    } elseif ($score >= 92){
        return 1.50;
    } elseif ($score >= 90 ){
        return 1.75;
    } elseif ($score >= 87){
        return 2.00;
    } elseif ($score >= 83){
        return 2.25;
    } elseif($score >= 80){
        return 2.50;
    } elseif ($score >= 78){
        return 2.75;
    } elseif ($score >= 75){
        return 3.00;
    } elseif ($score >= 65){
        return 4.00;
    } else{
        return 5.00;
    }
}

// Student Data 
$students = [
    ["name" => "John Vincent Pangilinan", "score" => 99],
    ["name" => "Marjorie Sahagun", "score" => 95],
    ["name" => "Cristle Ortega", "score" => 80]
];

foreach ($students as $student){
    $name = $student["name"];
    $score = $student ["score"];
    $grade = getGrade($score);


    echo "Student Name: " . $name ."<br>";
    echo "Score: " .$score ."<br>";
    echo "Grade: " .$grade ."<br>";

    if($grade <= 3.00){
        echo "Remarks: Passed";
    } else
    echo  "Remarks: Failed";

    echo "<hr>";
}


?>