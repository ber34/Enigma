<?php
namespace EnigmaKriegsmarine
{
    /**
	 * ValidateTrait short summary.
     *
     * ValidateTrait description.
     * Simple Enigma Kriegsmarine for 10 rotator 36x36x36x36x36x36x36x36x36x36 = 3 656 158 440 062 976 brutal force
	 * License 
     * Attribution-NonCommercial 3.0 Poland (CC BY-NC 3.0 PL) 
	 * @version 1.0
	 * @author Adam Berger
	 */

    trait ValidateTrait
    {
        public function ValidateString(string $textInput)
        {
            if(preg_match("/^[0-9A-Z]+$/i", $textInput))
            {
                return true;
            }else{
                return false;
            }
        }
    }
}
