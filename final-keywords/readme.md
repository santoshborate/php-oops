**Final Keyword:**

PHP 5 introduces the final keyword, which prevents child classes from overriding a method by prefixing the definition with final. If the class itself is being defined final then it cannot be extended. 

Final method : We can't override base class final method into child class.
Final class : We can't extend final base class.
  
Note: Properties cannot be declared final, only classes and methods may be declared as final. 