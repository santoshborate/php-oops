PHP OOPS Example

Abstract Class
1. For abstract class a method must be declared as abstract. Abstract methods doesn’t have any implementation.
2. The Abstract methods can declare with Access modifiers like public, internal, protected. When implementing in subclass these methods must be defined with the same (or a less restricted) visibility.
3. Abstract class can contain variables and concrete methods.
4. A class can Inherit only one Abstract class and Multiple inheritance is not possible for Abstract class.
5. Doesnot support multiple inheritance
6. Contains constructors 
7. Only complete member of abstract calls are static



Interface :
1. For interface all the methods by default are abstract methods only. So one cannot declare variables or concrete methods in interfaces.
2. All methods declared in an interface must be public.
3. Interfaces cannot contain variables and concrete methods except constants.
4. A class can implement many interfaces and Multiple interface inheritance is possible.
5. Support multiple inheritance
6. No constructors 
7. Member of interface cannot be static

final:
The methods or classes can not be modified by a child class. This prevents class inheritance, method-overriding and/or redefinition of methods.
Note:  Only class definitions and/or methods inside a class can be defined as final.

static:

Declares class methods or properties as a static value so that you have access to them without instantiating an object. These are shared between parent and child-classes.
Note:  A class definition can not be static unlike final.

const:

These create a constant value for a class. The constant values will get changed and can NOT be changed by a method in either parent or child-class.
Note: Class constants are allocated per instance of the class.

const vs static:

Constant is just a constant, i.e. you can't change its value after declaring.
Static variable is accessible without making an instance of a class and therefore shared between all the instances of a class.
