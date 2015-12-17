# String Calculator Code Kata

- [Code Kata](#code-kata)
- [TDD](#tdd)
- [String Calculator](#string-calculator)

<a name="code-kata"></a>
## Code Kata

> A code kata is an exercise in programming which helps a programmer hone their skills through practice and repetition.

https://en.wikipedia.org/wiki/Kata_(programming)

<a name="tdd"></a>
## TDD

> Test-driven development (TDD) is a software development process that relies on the repetition of a very short development cycle: first the developer writes an (initially failing) automated test case that defines a desired improvement or new function, then produces the minimum amount of code to pass that test, and finally refactors the new code to acceptable standards.

https://en.wikipedia.org/wiki/Test-driven_development

<a name="string-calculator"></a>
## String Calculator

Create a simple String calculator with a method to add the numbers in a string. The method can take 0, 1 or 2 numbers, and will return their sum (for an empty string it will return 0) for example “” or “1” or “1,2”.

- Start with the simplest test case of an empty string and move to 1 and two numbers.
- Remember to solve things as simply as possible so that you force yourself to write tests you did not think about.
- Remember to refactor after each passing test.
- Allow the Add method to handle an unknown amount of numbers.
- Allow the Add method to handle new lines between numbers (instead of commas).
- Support different delimiters, to change a delimiter, the beginning of the string will contain a separate line that looks like this: “//[delimiter]\n[numbers…]” for example “//;\n1;2” should return three where the default delimiter is ‘;’. The first line is optional. All existing scenarios should still be supported.
