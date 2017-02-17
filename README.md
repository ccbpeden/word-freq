# **Word Frequency**
#### Charles Peden, 2/17/2017

&nbsp;
## Description
A program that searches a user provided string for whole-word instances of a user given word and returns the number of matches.

&nbsp;
## Specifications

|Behavior|Input|Output|Justification|
|--------|-----|------|-------|
|Program successfully instantiates Class, getters work correctly | "I like pie"  // "pie" | "I like pie" "pie" | basic strings easily returnable by getters
|Program successfully validates Input | "I like pie" // "pie" | true | because default validation state set to false, validation will only set to true if conditions passed.
| Program recognizes a word within a string | "I like pie" | 1 | string has a whole word match
| Program recognizes a word within a string, but not partial matches | "I would not like a piece of cake" // "pie"| 0 | string has a partial but not a whole word match.
| Program recognizes a word within a string regardless of capitalization | "Pie is my favorite dessert." // "pie"  | 1 | string has one match with different capitalization
| Program recognizes a word within a string regardless of punctuation | "Pie, is it the best dessert or the best food?" | 1 | string has one match with punctuation attached
|program recognizes word attached contractions | "This pie's flavor is most delicious." // pie | 1 | string has word with contraction at end |
| Program recognizes multiple words within a string | "Would I like some pie? I love pie.  I would particularly like a piece of apple pie" // "pie" | 3 | string has multiple instances of the searched variable and one partial match.



&nbsp;
## Setup/Installation Requirements
##### _To view and use this application:_
* You will need the dependency manager Composer installed on your computer to use this application. Go to [getcomposer.org] (https://getcomposer.org/) to download Composer for free.
* Go to my [Github repository] (https://github.com/ccbpeden/word_freq)
* Download the zip file via the green button
* Unzip the file and open the **_find_and_replace-master_** folder
* Open Terminal, navigate to **_find_and_replace-master_** project folder, type **_composer install_** and hit enter
* Navagate Terminal to the **_find_and_replace-master_/web_** folder and set up a server by typing **_php -S localhost:8000_**
* Type **_localhost:8000_** into your web browser
* The application will load and be ready to use!

&nbsp;
## Known Bugs
* No known bugs

&nbsp;
## Technologies Used
* PHP
* Silex
* Twig
* Composer
* Bootstrap
* CSS
* HTML

&nbsp;
_If you have any questions or comments about this program, you can contact me at [ccbpeden@warpmail.net](mailto:ccbpeden@warpmail.net)._

Copyright (c) 2017 Charles Peden & Brendan Grubb

This software is licensed under the GPL license
