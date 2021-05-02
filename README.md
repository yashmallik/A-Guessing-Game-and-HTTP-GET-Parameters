# A-Guessing-Game-and-HTTP-GET-Parameters
Building Web Application with PHP
Week-6
Assignment: A Guessing Game and HTTP GET Parameters
In this assignment you will write a guessing game in PHP that takes GET parameters and plays the game.

Specifications

Since this assignment will be graded using an autograder (see below), your code must match to match the wording and error messages in the sample application precisely.

The autograder will randomly choose the "correct number" for your application so you will have to modify the sample code to adjust the correct answer. You also will need to add your name to the <title> tag in order for you to be given a grade for the assignment.

The autograder will run the following tests on your application:

It will look at the contents of the <title> tag and insist your name is part of the title of the page. If your name is not in the title, all of the tests will be run but no grade will be sent.
It will call your program with no parameters at all and your program should say, "Missing guess parameter".
It will call your program with the guess parameter without a value and your program should say, "Your guess is too short".
It will call your code with a non-numeric value and your code should say, "Your guess is not a number".
It will call your code with a low guess and your code should say, "Your guess is too low".
It will call your code with a too high guess and your code should say, "Your guess is too high".
It will call your code with the right value and your code should say, "Congratulations - You are right".
