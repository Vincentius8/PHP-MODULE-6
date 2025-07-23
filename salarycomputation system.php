<?php
 function computeNetSalary($days , $deductions){
    $grossnet = $days * 645;
    return $grossnet - $deductions;
 }
    $employees = [
        ["name" => "John Vincent Pangilinan", "daysworked" => 30, "deductions" => 300],
        ["name" => "Marjorie Sahagun", "daysworked" => 29, "deductions" => 300],
        ["name" => "Cristle Ortega", "daysworked" => 25, "deductions" => 300]
    ];

    echo "<hr>Employee Salary";
    echo  "<br>";

    foreach($employees as $employee){
        $name = $employee["name"];
        $days = $employee ["daysworked"];
        $deductions = $employee ["deductions"];

        $finalincome = computeNetSalary($days, $deductions);


        echo "Employee Name: " .$name ."<br>";
        echo "Days of Work: " .$days . "<br>";
        echo "Deductions: " .$deductions . "<br>";
        echo "Salary: " . $finalincome;

        echo "<hr>";
    }
 ?>


