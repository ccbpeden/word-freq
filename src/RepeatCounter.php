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
            echo ctype_alnum($this->search);
            if(!empty($this->string) && !empty($this->search) && ctype_alnum($this->search))
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
                $shrunken_search = strtolower($this->search);
                foreach ($exploded_string as $word)
                {
                    $trimmedword = trim($word, ",;.!?:()'");
                    $contraction_location = strpos($trimmedword, "'");
                    if ($contraction_location)
                    {
                        $trimmedword = substr($trimmedword, 0, $contraction_location);
                    }
                    if ($trimmedword == $shrunken_search)
                    {
                        $match_count ++;
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

        function getValidated()
        {
            return $this->validated;
        }
    }
?>
