<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_generatePingPongArray_returnNumber()
        {   //User Inputs a lowest possable number and gets back 1  input: "1" output: [1]
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 1;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals([1], $result);
        }

        function test_generatePingPongArray_returnNumbers()
        {   //User Inputs next lowest number  input: 2 output: [1, 2]
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 2;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals([1,2], $result);

       }

        function test_makePingPong_returnPing()
        {   //User Inputs the first number divisable by 3  input: 3 output: [1, 2, "ping"]
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals([1,2,'ping'], $result);

        }
/*
        function test_makePingPong_returnPongs()
        {   //User Inputs a number  input: 5 output: 1, 2, ping, 4, pong


        }

        function test_makePingPong_returnPings()
        {   //User Inputs a number  input: 15 output: 1, 2, ping, 4, pong, ping, 7, 8, ping, pong, 11, ping, 13, 14, ping-pong


        }*/

    }

?>
