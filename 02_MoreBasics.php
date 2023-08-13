<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container{
        max-width: 80%;
        background-color: rgb(220, 173, 173);
        margin: auto;
        padding: 23px;
    }
</style>

<body>
    <div class="container"> 
        <h1>Let's learn about 👉🏻 (PHP)</h1>
        <p>Your party status is here: 👇🏻</p>

        <?php
        
        $age = 29;

        if($age >= 18){
            echo "You can go to the party of";
        }
        else if($age == 7)
        {
            echo "You are 7 years old";
        }
        else{
            echo "You can't go to the party of";

        }

        // Arrays in PHP
        $languages = array("Python", "JavaScrip", "C++", "C#");
        // echo $languages[0];

        // Loops in PHP
        $a = 1;
        while ($a <= 5) {
           echo "<br>Value of 'a' is: ";
           echo $a;
           $a++;
        }

        // Itrating Arrays using While Loop in PHP
        $a = 0;
        while ($a < count($languages)) {
           echo "<br>Value of languages is: ";
           echo $languages[$a];
           $a++;
        }

          // Do While Loop in PHP
          $a = 20;
          do{
            echo "<br>Value of a is: ";
            echo $a;
            $a++;
          }
          while ($a < 10); 

          // For Loop
          for ($i=0; $i < 5; $i++) { 
            echo "<br>Value of i is: ";
            echo $i;
          }

          // ForEach Loop 
          foreach($languages as $value){
            echo "<br>Value of languages from 'ForEach Loop': ";
            echo $value;
          }


          // Functions in PHP
          function printRandom(){
            echo "<br>Random Func is executed!";
          }

          printRandom();
        
          function print_number($number){
            echo "<br>Your number is ";
            echo $number;
          }

          print_number(18);

        ?>
    </div>
</body>
</html>