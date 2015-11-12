<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {
            $count_up = array();

            $count_from = 1;

            while ($count_from <= $input_number)
            {
                if (($count_from % 3) == 0)
                {
                    array_push($count_up, 'ping');
                    $count_from = $count_from +1;
                }
                elseif (($count_from % 5) == 0)
                {
                    array_push($count_up, 'pong');
                    $count_from = $count_from +1;
                }
                elseif ((($count_from % 3) == 0) && (($count_from % 5) == 0))
                {
                    array_push($count_up, 'ping-pong');
                    $count_from = $count_from +1;
                }
                else
                {
                    array_push($count_up, $count_from);
                    $count_from = $count_from +1;
                }
            }

            return $count_up;
        }
    }
 ?>
