
Static 

Declares class methods or properties as a static value so that you have access to them without instantiating an object. These are shared between parent and child-classes.
A property declared as static cannot be accessed with an instantiated class object (though a static method can). 

Static methods:

Because static methods are callable without an instance of the object created, the pseudo-variable $this is not available inside the method declared as static. 

Static properties:

Static properties cannot be accessed through the object using the arrow operator -> and $this.

Like any other PHP static variable, static properties may only be initialized using a literal or constant before PHP 5.6; expressions are not allowed. In PHP 5.6 and later, the same rules apply as const expressions: some limited expressions are possible, provided they can be evaluated at compile time.

As of PHP 5.3.0, it's possible to reference the class using a variable. The variable's value cannot be a keyword (e.g. self, parent and static). 