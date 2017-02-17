<?php
    require_once __DIR__."/../src/RepeatCounter.php";

    Class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_ConstructorAndGetters()
        {
            $input_string = "I like pie";
            $input_search = "pie";
            $new_RepeatCounter = New RepeatCounter($input_string, $input_search);

            $result = array($new_RepeatCounter->getString(), $new_RepeatCounter->getSearch());

            $this->assertEquals(array("I like pie", "pie"), $result);
        }

        function test_Validator()
        {
            $input_string = "I like pie";
            $input_search = "pie";

            $new_RepeatCounter = New RepeatCounter($input_string, $input_search);

            $result = $new_RepeatCounter->setValidated();

            $this->assertEquals(true, $result);
        }

        function test_RecognizeWord()
        {
            $input_string = "I like pie";
            $input_search = "pie";
            $new_RepeatCounter = New RepeatCounter($input_string, $input_search);

            $result = $new_RepeatCounter->getMatches();

            $this->assertEquals(1, $result);
        }

        function test_DeclinePartialMatches()
        {
            $input_string = "I would not like a piece of cake";
            $input_search = "pie";
            $new_RepeatCounter = New RepeatCounter($input_string, $input_search);

            $result = $new_RepeatCounter->getMatches();

            $this->assertEquals(0, $result);
        }

        function test_variableCaps()
        {
            $input_string = "Pie is my favorite dessert";
            $input_search = "pie";
            $new_RepeatCounter = New RepeatCounter($input_string, $input_search);

            $result = $new_RepeatCounter->getMatches();

            $this->assertEquals(1, $result);
        }
    }
?>
