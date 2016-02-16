<?php

    class Anagram {

      function makeAnagram($word) {
        $length = strlen($word);
        $factorial = 1;
        while ($length > 1) {
          $factorial *= $length;
          $length--;
        }
        return $factorial;
      }

      // function makeAnagram($word)
      // {
      //   //For one-letter words;
      //   if (strlen($word) == 1) {
      //     return $word;
      //   }
      //   $word_array = str_split($word);
      //   $permutations_array = array();
      //   $i = 0;
      // //   while (count($permutations_array) < strlen((wordfactorial)))
      // //
      // //
      // //
      // // }

    }

?>
