<?php
    require_once 'src/Anagram.php';

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
      function test_possible_Combinations()
      {
        $test_Anagram = new Anagram;
        $input = 'the';

        $result = $test_Anagram->factorial($input);

        $this->assertEquals('6', $result);
      }

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
      //
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

      function test_Three_Letter_Word()
      {
        //Arrange;
        $test_Anagram = new Anagram;
        $word = 'bet';
        //Act;
        $result = $test_Anagram->makeAnagram($word);
        //Assert;
        $this->assertEquals(('bet, bte, ebt, etb, tbe, teb'), $result);
      }



    }


?>
