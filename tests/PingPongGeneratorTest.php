<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_generatePingPongArray_count()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 16;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals((array(1, 2, 'ping', 4, 'pong', 'ping', 7, 8, 'ping', 'pong', 11, 'ping', 13, 14, 'ping-pong', 16)), $result);
        }
        //
        // function test_generatePingPongArray_Ping()
        // {
        //     //Arrange
        //     $test_generatePingPongArray = new PingPongGenerator;
        //     $input = ;
        //
        //     //Act
        //     $result = $test_PingPongGenerator->generatePingPongArray($input);
        //
        //     //Assert
        //     $this->assertEquals(, $result);
        // }
    }
 ?>
