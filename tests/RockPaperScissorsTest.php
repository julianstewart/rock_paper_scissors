<?php
    require_once "src/RockPaperScissors.php";
    {
        class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
        {
            function test_rock_rock()
            {
                //arrange
                $test_RockPaperScissors = new RockPaperScissors;
                $player_one_input = "rock";
                $player_two_input = "rock";

                //act
                $result = $test_RockPaperScissors->rockPaperScissors($player_one_input, $player_two_input);

                //assert
                $this->assertEquals("Draw", $result);
            }
        }
    }

 ?>
