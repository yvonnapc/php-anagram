<?php
    require_once 'src/Anagram.php';

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
      function test_One_Letter_Word()
      {
        //Arrange;
        $test_Anagram = new Anagram;
        $word = 'a';
        //Act;
        $result = $test_Anagram->makeAnagram($word);
        //Assert;
        $this->assertEquals(('a'), $result);
      }

      function test_Two_Letter_Word()
      {
        //Arrange;
        $test_Anagram = new Anagram;
        $word = 'be';
        //Act;
        $result = $test_Anagram->makeAnagram($word);
        //Assert;
        $this->assertEquals(('be, eb'), $result);
      }


    }


?>
