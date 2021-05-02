<!-- Here is the assignment of 6 week of Building web application with PHP course-->
<!-- It will look at the contents of the <title> tag and insist your name is part of the title of the page. If your name is not in the title, all of the tests will be run but no grade will be sent.
It will call your program with no parameters at all and your program should say, "Missing guess parameter".
It will call your program with the guess parameter without a value and your program should say, "Your guess is too short".
It will call your code with a non-numeric value and your code should say, "Your guess is not a number".
It will call your code with a low guess and your code should say, "Your guess is too low".
It will call your code with a too high guess and your code should say, "Your guess is too high".
It will call your code with the right value and your code should say, "Congratulations - You are right". -->
<!--Here I completed this task with my special touch -->
<html>
    <head>
        <title>Guessing Game by Yash Mallik</title>

    </head>
    <h1>Welcome to my Guessing Game</h1>
    <h3>Guess a number between 0 to 10</h3>
    <p>
        <?php
        // defined a variable num
        // Using a rand function between 0 to 10 
            $num = rand(0,10);
            if (!isset($_GET['guess'])) {
                echo ("Missing get parameter\n");}
            elseif ( strlen($_GET['guess']) < 1) {
                echo ("Your guess is too short\n");}
            elseif (!is_numeric($_GET['guess'])) {
                echo ("Your guess is not a number\n");}
            elseif($_GET['guess'] < $num) {
                echo ("Your guess is too low"."<br>");
                echo (" Right answer is ".$num);}
            elseif($_GET['guess'] > $num) {
                echo ('Your guess is too high'."<br>".'Right answer is '.$num);}
            else {echo ('Congratulations-You are right'."\n");}

            

        ?>
    </p>

</html>   
