<?php

// Method overloading means having two or more methods with the same name but different signatures in the same scope.
// These two methods may exist in the same class or another one in base class and another in derived class.
//
 function findSum() {
     return array_sum(func_get_args());
 }

 echo findSum(1, 2), '<br />';
 echo findSum(10, 2, 100), '<br />';
 echo findSum(10, 22, 0.5, 0.75, 12.50), '<br />';
 ?>