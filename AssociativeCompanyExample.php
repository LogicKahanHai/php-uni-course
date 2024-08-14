<?php


$company = [
    "departments" => [
        "HR" => [
            "manager" => "John Doe",
            "staff" => ['Alice', 'Bob', 'Carol']
        ],
        "IT" => [
            "manager" => "Jane Doe",
            "staff" => ['Dave', 'Eve', 'Frank']
        ],
        
    ],
    "location" => "India",
    "founded" => 2000,
];

/**
 * Using foreach loop to print the array:-
 * 
 * In this for each loop, the "implode" function basically expands the array with the separator we have 
 * given to it as the first argument.
 */

foreach ($company["departments"] as $key => $value) {
    echo "Department: $key<br>";
    echo "Manager: " . $value["manager"] . "<br>";
    echo "Employees: " . implode(", ", $value["staff"]) . "<br><br>";
};

echo "Company Location: " . $company["location"] . "<br>";
echo "Company Founded: " . $company["founded"] . "<br>";

/**
 * Now we have to add some data in this array:-
 */

$company["departments"]["HR"]["salary"] = [5000, 6000, 7000];
$company["departments"]["IT"]["salary"] = [8000, 9000, 10000];

echo "<br><br><b>New Array: -</b> <br><br>";
foreach ($company["departments"] as $key => $value) {
    echo "Department: $key<br>";
    echo "Manager: " . $value["manager"] . "<br>";
    echo "Employees: " . implode(", ", $value["staff"]) . "<br><br>";
    echo "Salary: " . implode(", ", $value["salary"]) . "<br><br>";
};



?>