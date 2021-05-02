<!-- Here is the assignment of 6 week of Building web application with PHP course-->

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