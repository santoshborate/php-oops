Introduced in PHP 5.3
 
Anonymous function:
An anonymous function is a function without name. It is assigned to a variable or provided as a parameter to another function.

Closure:
A closure is an object representation of an anonymous function. We can see that the anonymous function in the above code actually returns an object of closure which is assigned to and called using the variable $string. You can say closure is an object oriented way to use anonymous functions.
 
Anonymous functions, also known as closures, allow the creation of functions which have no specified name. They are most useful as the value of callback parameters, but they have many other uses.
Anonymous functions are implemented using the Closure class. 

e.g

// Regular function
function greeting () {
  return "Hello world";
}
echo greeting();  // Returns "Hello world"




// Anonymous function
function () {
  return "Hello world";
}

Uses of closure:
1. Closures can access private data of an object instance.
2. In Lazy loading.
