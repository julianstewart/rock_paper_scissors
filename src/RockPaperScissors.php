<?php
    class RockPaperScissors
    {
        function playRockPaperScissors($input_one, $input_two)
        {
            $game_result = "";
            if ($input_one == $input_two) {
                $game_result = "Draw";
            }
            return $game_result;

        }
    }
 ?>
