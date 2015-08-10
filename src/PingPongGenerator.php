<?php

class PingPongGenerator
{
    function generatePingPongArray($count_to)
    {

        $count_array = array();
        for ($x = 1; $x <= $count_to; $x++) {
            if (($x % 3) == 0) {
                array_push($count_array, 'ping');

            } else {
                array_push($count_array, $x);
        }

        

        }
        return $count_array;
    }

}


?>
