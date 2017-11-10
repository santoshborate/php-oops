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

**OOPS Featurs**

**Class**

Class − This is a programmer-defined data type, which includes local functions as well as local data. You can think of a class as a template for making many instances of the same kind (or class) of object.

**Object**

Object − An individual instance of the data structure defined by a class. You define a class once and then make many objects that belong to it. Objects are also known as instance.

**Member Variable**

Member Variable − These are the variables defined inside a class. This data will be invisible to the outside of the class and can be accessed via member functions. These variables are called attribute of the object once an object is created.

**Member function**

Member function − These are the function defined inside a class and are used to access object data.

**Inheritance**

Inheritance − When a class is defined by inheriting existing function of a parent class then it is called inheritance. Here child class will inherit all or few member functions and variables of a parent class.

**Parent class**

Parent class − A class that is inherited from by another class. This is also called a base class or super class.

**Child Class**

Child Class − A class that inherits from another class. This is also called a subclass or derived class.

**Polymorphism**

Polymorphism − This is an object oriented concept where same function can be used for different purposes. For example function name will remain same but it make take different number of arguments and can do different task.

**Overloading**

Overloading − a type of polymorphism in which some or all of operators have different implementations depending on the types of their arguments. Similarly functions can also be overloaded with different implementation.

**Data Abstraction**

Data Abstraction − Any representation of data in which the implementation details are hidden (abstracted).

**Encapsulation**

Encapsulation − refers to a concept where we encapsulate all the data and member functions together to form an object.

**Constructor**

Constructor − refers to a special type of function which will be called automatically whenever there is an object formation from a class.

**Destructor**

Destructor − refers to a special type of function which will be called automatically whenever an object is deleted or goes out of scope.

