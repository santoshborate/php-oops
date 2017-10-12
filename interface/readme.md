Interface :
Introduced in PHP 5

Object interfaces allow you to create code which specifies which methods a class must implement, without having to define how these methods are handled. 
An interface allows unrelated classes to implement the same set of methods, regardless of their positions in the class inheritance hierarchy.
An interface enables you to model multiple inheritance because a class can implement more than one interface whereas it can extend only one class.

 Interfaces are defined in the same way as a class, but with the interface keyword replacing the class keyword and without any of the methods having their contents defined.

All methods declared in an interface must be public; this is the nature of an interface.

Note that it is possible to declare a constructor in an interface, what can be useful in some contexts, e.g. for use by factories. 

 Interfaces can be extended like classes using the extends operator. 
 
 The class implementing the interface must use the exact same method signatures as are defined in the interface. Not doing so will result in a fatal error. 
 
PRIMARY PURPOSES OF AN INTERFACE:

    Interfaces allow you to define/create a common structure for your classes – to set a standard for objects.
    Interfaces solves the problem of single inheritance – they allow you to inject ‘qualities’ from multiple sources.
    Interfaces provide a flexible base/root structure that you don’t get with classes.
    Interfaces are great when you have multiple coders working on a project – you can set up a loose structure for programmers to follow and let them worry about the details.

WHEN SHOULD YOU MAKE A CLASS AND WHEN SHOULD YOU MAKE AN INTEFACE?

    If you have a class that is never directly instantiated in your program, this is a good candidate for an interface. In other words, if you are creating a class to only serve as the parent to other classes, it should probably be made into an interface.
    When you know what methods a class should have but you are not sure what the details will be.
    When you want to quickly map out the basic structures of your classes to serve as a template for others to follow – keeps the code-base predictable and consistent.
    
    
Difference between abstract calss and interface
Abstract Class
1. For abstract class a method must be declared as abstract. Abstract methods doesn’t have any implementation.
2. The Abstract methods can declare with Access modifiers like public, internal, protected. When implementing in subclass these methods must be defined with the same (or a less restricted) visibility.
3. Abstract class can contain variables and concrete methods.
4. A class can Inherit only one Abstract class and Multiple inheritance is not possible for Abstract class.
5. A child class can define abstract methods with the same or less restrictive visibility
6. We can define properties(variables) with or without values and concrete methods in an abstract class.
7. Contain constructor
8 Only complete member of abstract class can be static

Interface 
1. For interface all the methods by default are abstract methods only. So one cannot declare variables or concrete methods in interfaces.
2. All methods declared in an interface must be public.
3. Interfaces cannot contain variables and concrete methods except constants.
4. A class can implement many interfaces and Multiple interface inheritance is possible.
5. whereas a class implementing an interface must define the methods with the exact same visibility (public).
6. We can not define properties(variables) and methods CAN NOT have a body But we can define constants variables
7. Doesn't contain constructor
8. Member of interface can't be static 

    
 

