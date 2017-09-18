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