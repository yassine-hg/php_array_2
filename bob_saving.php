<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

$netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);
$annualIncome = $netIncome - $socialSecurity; 

echo  "Annuel salery " . $annualIncome . "\n";

$annual_Expenses = $annualIncome - ($annualExpenses["vacations"] + $annualExpenses["carRepairs"]) ;

echo "The annuel expenses are $annual_Expenses \n" ;

$monthlyIncome = $annualIncome / 12 ;
echo "Monthly income is: $monthlyIncome \n";

$monthlyIncome -= $monthlyExpenses ["rent"];
$monthlyIncome -= $monthlyExpenses ["utilities"];
$monthlyIncome -= $monthlyExpenses ["healthInsurance"];

echo $monthlyIncome . ".\n";

$weeklyIncome = $monthlyIncome / 4.33;

echo "weekly income is: $weeklyIncome \n";

$weeklyExpenses = [
  "gaz" => 25,
  "food" => 90,
  "entertainment" => 47,
];

$weeklyIncome -= $weeklyExpenses ["gaz"];
$weeklyIncome -= $weeklyExpenses ["food"];
$weeklyIncome -= $weeklyExpenses ["entertainment"];

echo "the weekly income is $weeklyIncome \n";

$saving = $weeklyIncome * 52;

echo "Bob you can save $saving";