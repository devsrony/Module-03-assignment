<?php

/*
Task 2: Array Manipulation

Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.
*/

$numbers = range(1, 10, 2);
function removeEvenNumbers($values)
{
  foreach ($values as $value) {
    return $value;
  }
}

removeEvenNumbers($numbers);

print_r($numbers);
