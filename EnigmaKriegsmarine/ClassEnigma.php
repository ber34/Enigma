<?php
namespace EnigmaKriegsmarine
{
         require_once("EncryptionAndDecryption.php");
	 require_once("ValidateTrait.php");
	/**
	 * ClassEnigma short summary.
	 *
	 * ClassEnigma description.
     * Simple Enigma Kriegsmarine for 10 rotator 36x36x36x36x36x36x36x36x36x36 = 3 656 158 440 062 976 brutal force
	 * License 
     * Attribution-NonCommercial 3.0 Poland (CC BY-NC 3.0 PL) 
	 * @version 1.0
	 * @author Adam Berger
	 */
  class ClassEnigma extends EncryptionAndDecryption 
  {
        use ValidateTrait;

      public function SzyfrowanieInput(string $tekstInput)
      {
               
            // wywolanie traits
	    // Zmieniamy na duze litery
			    $tekstInput = strtoupper($tekstInput);
            if($this->ValidateString($tekstInput) === true)
            {		
		$this->tabTekst_TEMP_Wprowadzony[Count($this->tabTekst_TEMP_Wprowadzony)] = $tekstInput;
		
		$this->Szyfrowanie($tekstInput);
            }
        }
		
		public function TextSzyfrowanieTab()
		{
			return $this->tabTekst_TEMP_Wprowadzony;
		}

        public function SzyfrowanieOutputTab()
        {
            return $this->tabTekst_TEMP_Wprowadzony_Out;
        }

        public function DeszyfrowanieInput(string $tekstInput)
        {			
           
                        // wywolanie traits
			// Zmieniamy na duze litery
			$tekstInput = strtoupper($tekstInput);
            if($this->ValidateString($tekstInput) === true)
            {
                $this->tabTekst_Deszyfrowanie_TEMP_Wprowadzony[Count($this->tabTekst_Deszyfrowanie_TEMP_Wprowadzony)] = $tekstInput;
				
				$this->Deszyfrowanie($tekstInput);
            }
        }
		
	    public function TextDeszyfrowanieTab()
		{
			return $this->tabTekst_Deszyfrowanie_TEMP_Wprowadzony;
		}

        public function DeszyfrowanieOutput()
        {
            return $this->tabTekst_Deszyfrowanie_TEMP_Wprowadzony_Out;
        }

        public function WybraneBebnySzyfrujace(string $textBoxBeben1, string $textBoxBeben2,
                                               string $textBoxBeben3, string $textBoxBeben4,
                                               string $textBoxBeben5, string $textBoxBeben6,
                                               string $textBoxBeben7, string $textBoxBeben8,
                                               string $textBoxBeben9, string $textBoxBeben10)
        {
                     
            $this->tabWybraneBebnySzyfrujace[0]=$textBoxBeben1;
            $this->tabWybraneBebnySzyfrujace[1]=$textBoxBeben2;
            $this->tabWybraneBebnySzyfrujace[2]=$textBoxBeben3;
            $this->tabWybraneBebnySzyfrujace[3]=$textBoxBeben4;
            $this->tabWybraneBebnySzyfrujace[4]=$textBoxBeben5;
            $this->tabWybraneBebnySzyfrujace[5]=$textBoxBeben6;
            $this->tabWybraneBebnySzyfrujace[6]=$textBoxBeben7;
            $this->tabWybraneBebnySzyfrujace[7]=$textBoxBeben8;
            $this->tabWybraneBebnySzyfrujace[8]=$textBoxBeben9;
            $this->tabWybraneBebnySzyfrujace[9]=$textBoxBeben10;
        }
    }
}
