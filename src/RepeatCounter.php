<?php
    Class RepeatCounter
    {
        private $string;
        private $search;
        private $validated;
        private $number_of_matches;


        function __construct($input_string, $input_search)
        {
            $this->string = $input_string;
            $this->search = $input_search;
            $this->validated = false;
        }

        function getString()
        {
            return $this->string;
        }

        function getSearch()
        {
            return $this->search;
        }
    }
?>
