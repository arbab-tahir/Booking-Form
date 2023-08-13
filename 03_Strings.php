<?php 
  $str = "This";

  echo $str . "<br>";

  $len = strlen($str);

  echo "The length of String is " . $len . ", Thank you! <br>";

  echo "The length of words in string is " . str_word_count($str);

  echo "<br> Reversed the string is " . strrev($str);

  echo "<br> Search the position of any word in the whole string, 
  such as (is) at the position 👉🏻 " . strpos($str, "is");

  echo "<br> Replace the words in the string,
   like (is) replace with (at), result 👉🏻 " . str_replace("is", "at", $str);
?>