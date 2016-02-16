<?php

    class Anagram {

      function factorial($word) {
        $length = strlen($word);
        $factorial = 1;
        while ($length > 1) {
          $factorial *= $length;
          $length--;
        }
        return $factorial;
      }

      function makeAnagram($word) {
        //for one-letter words;
        if (strlen($word) == 1) {
          return $word;
        }
        //for words over one-letter;
        $length = strlen($word);
        $factorial = 1;
        while ($length > 1) {
          $factorial *= $length;
          $length--;
        }
        $array = array();
        while (count($array) < $factorial) {
          $word = str_shuffle($word);
          if (!in_array($word, $array)) {
            array_push($array, $word);
          }
        }
        $result = asort($array);
        $result = implode(", ", $array);
        return $result;

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
