<?php
namespace EnigmaKriegsmarine
{
	/**
	 * EncryptionAndDecryption short summary.
	 *
	 * EncryptionAndDecryption description.
         * Simple Enigma Kriegsmarine for 10 rotator 36x36x36x36x36x36x36x36x36x36 = 3 656 158 440 062 976 brutal force
	 * License 
         * Attribution-NonCommercial 3.0 Poland (CC BY-NC 3.0 PL) 
	 * @version 1.0
	 * @author Adam Berger
	 */
    abstract class EncryptionAndDecryption
    {
		protected $tabBebenSzyf_A = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J",
                                    "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T",
                                    "U", "V", "W", "X", "Y", "Z", "1", "2", "3", "4",
                                    "5", "6", "7", "8", "9", "0");
		
		protected $tabWybraneBebnySzyfrujace = array();
		protected $tabTekst_TEMP_Wprowadzony = array();
                protected $tabTekst_TEMP_Wprowadzony_Out = array();
		protected $tabTekst_Deszyfrowanie_TEMP_Wprowadzony = array();
                protected $tabTekst_Deszyfrowanie_TEMP_Wprowadzony_Out = array();
		
        protected function arraySearch($arr)
        {
            for ($i = 0; $i < Count($this->tabBebenSzyf_A); $i++)
            {
                if ($this->tabBebenSzyf_A[$i] == $arr)
                {
                    return $i;
                }
            }
            return 0;
        }
	    
	protected function Szyfrowanie(string $tekstInput)
        {
              // print_r($this->tabWybraneBebnySzyfrujace[2]);
                   $index = 0;
                   $index = ($this->arraySearch($tekstInput)
                            + $this->arraySearch($this->tabWybraneBebnySzyfrujace[0]) + $this->arraySearch($this->tabWybraneBebnySzyfrujace[1])
                            + $this->arraySearch($this->tabWybraneBebnySzyfrujace[2]) + $this->arraySearch($this->tabWybraneBebnySzyfrujace[3])
                            + $this->arraySearch($this->tabWybraneBebnySzyfrujace[4]) + $this->arraySearch($this->tabWybraneBebnySzyfrujace[5])
                            + $this->arraySearch($this->tabWybraneBebnySzyfrujace[6]) + $this->arraySearch($this->tabWybraneBebnySzyfrujace[7])
                            + $this->arraySearch($this->tabWybraneBebnySzyfrujace[8]) + $this->arraySearch($this->tabWybraneBebnySzyfrujace[9]))
                            + Count($this->tabTekst_TEMP_Wprowadzony);
                 
                if ($index > 35)
                {
                    $index = $index % 36;
                }
	            $this->tabTekst_TEMP_Wprowadzony_Out[Count($this->tabTekst_TEMP_Wprowadzony)-1] = $this->tabBebenSzyf_A[$index];
        }
		
	protected function Deszyfrowanie(string $tekstInput)
        {
             $index = 0;
            // Za kazdy rotator dodajemy 36 czyli 36 * 10 = 360
             $index = abs(($this->arraySearch($tekstInput)
                          - $this->arraySearch($this->tabWybraneBebnySzyfrujace[0]) - $this->arraySearch($this->tabWybraneBebnySzyfrujace[1])
                          - $this->arraySearch($this->tabWybraneBebnySzyfrujace[2]) - $this->arraySearch($this->tabWybraneBebnySzyfrujace[3])
                          - $this->arraySearch($this->tabWybraneBebnySzyfrujace[4]) - $this->arraySearch($this->tabWybraneBebnySzyfrujace[5])
                          - $this->arraySearch($this->tabWybraneBebnySzyfrujace[6]) - $this->arraySearch($this->tabWybraneBebnySzyfrujace[7])
                          - $this->arraySearch($this->tabWybraneBebnySzyfrujace[8]) - $this->arraySearch($this->tabWybraneBebnySzyfrujace[9]))
                          - Count($this->tabTekst_Deszyfrowanie_TEMP_Wprowadzony)+360);

                      if ($index > 35)
                      {
                          $index = $index % 36;
                      }

            $this->tabTekst_Deszyfrowanie_TEMP_Wprowadzony_Out[Count($this->tabTekst_Deszyfrowanie_TEMP_Wprowadzony)-1] = $this->tabBebenSzyf_A[(int) $index];
        }
    }
}
