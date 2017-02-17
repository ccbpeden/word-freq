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
            $this->number_of_matches = 0;
        }

        function getString()
        {
            return $this->string;
        }

        function getSearch()
        {
            return $this->search;
        }

        function setValidated()
        {
            if(!empty($this->string) && !empty($this->search))
            {
                $this->validated = true;
            }
            return $this->validated;
        }

        function countRepeats()
        {
            $this->setValidated();
            if ($this->validated == true)
            {
                $match_count = 0;
                $exploded_string = explode(" ", strtolower($this->string));
                foreach ($exploded_string as $word)
                {

                    if ($word == $this->search){
                        $match_count ++;
                        echo "increment match_count to ".$match_count;
                    }
                }
                $this->number_of_matches = $match_count;
            }
        }

        function getMatches()
        {
            $this->countRepeats();
            return $this->number_of_matches;
        }
    }
?>
