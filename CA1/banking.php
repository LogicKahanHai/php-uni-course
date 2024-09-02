<?php

$current = readline("What is your current bank balance?");

while (true) {
    $withdraw = readline("Enter the amount you want to withdraw: ");

    if ($withdraw % 10 != 0) {
        echo "Error: Withdrawal amount must be in multiples of 10.";
        continue;
    }
    if ($withdraw > 1000) {
        echo 'Error: Withdrawal amount exceed the maximum limit of $1,000.';
        continue;
    }
    if ($withdraw > $current) {
        echo "Error: Insufficient Balance.";
        continue;
    }
    $current = $current - $withdraw;
    echo "Transaction Successful. Remaining balanace: $current";

    if ($current < 10) {
        echo "Now the remaining balance is less than 10, that you cannot withdraw, so we are keeping it. GoodBye!";
        break;
    }
}
