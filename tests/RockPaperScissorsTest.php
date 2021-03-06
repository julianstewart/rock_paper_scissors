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
                $result = $test_RockPaperScissors->playRockPaperScissors($player_one_input, $player_two_input);

                //assert
                $this->assertEquals("Draw", $result);
            }

            function test_paper_paper()
            {
                //arrange
                $test_RockPaperScissors = new RockPaperScissors;
                $player_one_input = "paper";
                $player_two_input = "paper";

                //act
                $result = $test_RockPaperScissors->playRockPaperScissors($player_one_input, $player_two_input);

                //assert
                $this->assertEquals("Draw", $result);
            }

            function test_scissors_scissors()
            {
                //arrange
                $test_RockPaperScissors = new RockPaperScissors;
                $player_one_input = "scissors";
                $player_two_input = "scissors";

                //act
                $result = $test_RockPaperScissors->playRockPaperScissors($player_one_input, $player_two_input);

                //assert
                $this->assertEquals("Draw", $result);
            }

            function test_rock_paper()
            {
                //arrange
                $test_RockPaperScissors = new RockPaperScissors;
                $player_one_input = "rock";
                $player_two_input = "paper";

                //act
                $result = $test_RockPaperScissors->playRockPaperScissors($player_one_input, $player_two_input);

                //assert
                $this->assertEquals("p2", $result);
            }

            function test_rock_scissors()
            {
                //arrange
                $test_RockPaperScissors = new RockPaperScissors;
                $player_one_input = "rock";
                $player_two_input = "scissors";

                //act
                $result = $test_RockPaperScissors->playRockPaperScissors($player_one_input, $player_two_input);

                //assert
                $this->assertEquals("p1", $result);
            }

            function test_paper_rock()
            {
                //arrange
                $test_RockPaperScissors = new RockPaperScissors;
                $player_one_input = "paper";
                $player_two_input = "rock";

                //act
                $result = $test_RockPaperScissors->playRockPaperScissors($player_one_input, $player_two_input);

                //assert
                $this->assertEquals("p1", $result);
            }

            function test_paper_scissors()
            {
                //arrange
                $test_RockPaperScissors = new RockPaperScissors;
                $player_one_input = "paper";
                $player_two_input = "scissors";

                //act
                $result = $test_RockPaperScissors->playRockPaperScissors($player_one_input, $player_two_input);

                //assert
                $this->assertEquals("p2", $result);
            }

            function test_scissors_rock()
            {
                //arrange
                $test_RockPaperScissors = new RockPaperScissors;
                $player_one_input = "scissors";
                $player_two_input = "rock";

                //act
                $result = $test_RockPaperScissors->playRockPaperScissors($player_one_input, $player_two_input);

                //assert
                $this->assertEquals("p2", $result);
            }

            function test_scissors_paper()
            {
                //arrange
                $test_RockPaperScissors = new RockPaperScissors;
                $player_one_input = "scissors";
                $player_two_input = "paper";

                //act
                $result = $test_RockPaperScissors->playRockPaperScissors($player_one_input, $player_two_input);

                //assert
                $this->assertEquals("p1", $result);
            }

            function test_null_player_one()
            {
                //arrange
                $test_RockPaperScissors = new RockPaperScissors;
                $player_one_input = (string)"";
                $player_two_input = "rock";

                //act
                $result = $test_RockPaperScissors->playRockPaperScissors($player_one_input, $player_two_input);

                //assert
                $this->assertEquals("error", $result);
            }

            function test_null_player_two()
            {
                //arrange
                $test_RockPaperScissors = new RockPaperScissors;
                $player_one_input = "rock";
                $player_two_input = (string)"";

                //act
                $result = $test_RockPaperScissors->playRockPaperScissors($player_one_input, $player_two_input);

                //assert
                $this->assertEquals("error", $result);
            }

            function test_null_both_players()
            {
                //arrange
                $test_RockPaperScissors = new RockPaperScissors;
                $player_one_input = (string)"";
                $player_two_input = (string)"";

                //act
                $result = $test_RockPaperScissors->playRockPaperScissors($player_one_input, $player_two_input);

                //assert
                $this->assertEquals("error", $result);
            }
        }
    }

 ?>
