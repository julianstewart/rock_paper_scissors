<?php
    class RockPaperScissors
    {
        function playRockPaperScissors($input_one, $input_two)
        {
            $game_result = "";
            if ($input_one == $input_two) {
                $game_result = "Draw";
            } elseif (($input_one == "rock") && ($input_two == "paper")) {
                $game_result = "p2";
            } elseif (($input_one == "rock") && ($input_two == "scissors")) {
                $game_result = "p1";
            } elseif (($input_one == "paper") && ($input_two == "rock")) {
                $game_result = "p1";
            } elseif (($input_one == "paper") && ($input_two == "scissors")) {
                $game_result = "p2";
            } elseif (($input_one == "scissors") && ($input_two == "rock")) {
                $game_result = "p2";
            }
            return $game_result;

        }
    }
 ?>
