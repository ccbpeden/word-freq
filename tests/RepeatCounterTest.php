<?php
    require_once __DIR__."/../src/RepeatCounter.php";

    Class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_ConstructorAndGetters()
        {
            $input_string = "I like pie";
            $input_search = "pie";
            $new_RepeatCounter = New RepeatCounter($input_string, $input_search);

            $result = array($new_RepeatCounter->getInput_string, $new_RepeatCounter->getInput_search);

            $this->assertEquals(array("I like pie", "pie"), $result);
        }
    }
?>
