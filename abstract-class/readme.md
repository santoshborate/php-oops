Abstract Class:

1. Abstract classes are classes that contain one or more abstract methods.
2. An abstract method is a method that is declared, but contains no implementation. 
3. Abstract classes may not be instantiated, and require subclasses to provide implementations for the abstract methods.
4. Methods defined as abstract simply declare the method's signature - they cannot define the implementation

Purpose : The purpose of this is to provide a kind of template to inherit from and to force the inheriting class to implement the abstract methods.

An abstract class thus is something between a regular class and a pure interface.
Also interfaces are a special case of abstract classes where ALL methods are abstract.

1. Can not instantiate abstract class:  
Classes defined as abstract may not be instantiated, and any class that contains at least one abstract method must also be abstract.

2. Any class that contains at least one abstract method must also be abstract: 
Abstract class can have abstract and non-abstract methods, but it must contain at least one abstract method. 
If a class has at least one abstract method, then the class must be declared abstract.

3. An abstract method can not contain body: 
Methods defined as abstract simply declare the method's signature - they cannot define the implementation. But a non-abstract method can define the implementation.

4. When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must be defined by the child :
If you inherit an abstract class you have to provide implementations to all the abstract methods in it.

5. Same (or a less restricted) visibility:
When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must be defined by the child; additionally, these methods must be defined with the same (or a less restricted) visibility. For example, if the abstract method is defined as protected, the function implementation must be defined as either protected or public, but not private.
Note : Note that abstract method should not be private.

6. Signatures of the abstract methods must match:
When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must be defined by the child;the signatures of the methods must match, i.e. the type hints and the number of required arguments must be the same. For example, if the child class defines an optional argument, where the abstract method's signature does not, there is no conflict in the signature.

7. Abstract class doesn't support multiple inheritance:
Abstract class can extends another abstract class,Abstract class can provide the implementation of interface.But it doesn't support multiple inheritance.


