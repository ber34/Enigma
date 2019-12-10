<?php
namespace EnigmaKriegsmarine
{
require_once("EnigmaKriegsmarine/ClassEnigma.php");

             // Przestrzen nazw
	     // Namespace
              use EnigmaKriegsmarine;
	     // Wywolanie klasy
    $enigma = new EnigmaKriegsmarine\ClassEnigma();

  // Ustawiamy kod dla rotatorów (Ksiazka kodów szyfrujacych)
  // Set the code for rotators (Encryption Code Book)
    $textBoxBeben1="B";
    $textBoxBeben2="E";
    $textBoxBeben3="R";
    $textBoxBeben4="N";
    $textBoxBeben5="I";
    $textBoxBeben6="K";
    $textBoxBeben7="O";
    $textBoxBeben8="L";
    $textBoxBeben9="1";
    $textBoxBeben10="8";
	
     // Przypisujemy wybrany kod do rotatorów
     // We assign the selected code to rotators
    $enigma->WybraneBebnySzyfrujace( $textBoxBeben1, $textBoxBeben2,
                                     $textBoxBeben3, $textBoxBeben4,
                                     $textBoxBeben5, $textBoxBeben6,
                                     $textBoxBeben7, $textBoxBeben8,
                                     $textBoxBeben9, $textBoxBeben10 );

     $string = "ENIGMAKREGSMARINE";
     for($i=0; $i<strlen($string);$i++)
     {	
	$enigma->SzyfrowanieInput($string[$i]);
     }
    // Podajemy teks do zaszyfrowania
    // Enter the text to be encrypted
    //$enigma->SzyfrowanieInput("E");
    //$enigma->SzyfrowanieInput("N");
    //$enigma->SzyfrowanieInput("I");
    //$enigma->SzyfrowanieInput("G");
    //$enigma->SzyfrowanieInput("M");
    //$enigma->SzyfrowanieInput("A");
    //$enigma->SzyfrowanieInput("K");
    //$enigma->SzyfrowanieInput("R");
    //$enigma->SzyfrowanieInput("I");
    //$enigma->SzyfrowanieInput("E");
    //$enigma->SzyfrowanieInput("G");
    //$enigma->SzyfrowanieInput("S");
    //$enigma->SzyfrowanieInput("M");
    //$enigma->SzyfrowanieInput("A");
    //$enigma->SzyfrowanieInput("R");
    //$enigma->SzyfrowanieInput("I");
    //$enigma->SzyfrowanieInput("N");
    //$enigma->SzyfrowanieInput("E");

    // Wypisujemy na ekranie tekst do zaszyfrowania
    // Enter the text to be encrypted on the screen
        $tab2 = $enigma->TextSzyfrowanieTab();		
		$text = "<br>Tekst do zaszyfrowania-> ";	   
    for($i=0; $i<Count($tab2); $i++)
    {
        $text .= $tab2[$i];
    }
      echo $text .= "<br>";
    // Tablica tekstu zaszyfrowanego, Wypisujemy na ekranie 
    // Table of encrypted text, We type on the screen
                   $tab = $enigma->SzyfrowanieOutputTab();
		$text = "<br>Tekst zaszyfrowany -> ";	   
    for($i=0; $i<Count($tab); $i++)
    {
        $text .= $tab[$i];
    }
      echo $text .= "<br>";

   // Podajemy teks do odszyfrowania
   // We give the text to decrypt
     $string = "9IEDK0KSKHKXSHZRXP";
     for($i=0; $i<strlen($string);$i++)
     {	
	$enigma->DeszyfrowanieInput($string[$i]);
     }
    //$enigma->DeszyfrowanieInput("9");
    //$enigma->DeszyfrowanieInput("I");
    //$enigma->DeszyfrowanieInput("E");
    //$enigma->DeszyfrowanieInput("D");
    //$enigma->DeszyfrowanieInput("K");
    //$enigma->DeszyfrowanieInput("0");
    //$enigma->DeszyfrowanieInput("K");
    //$enigma->DeszyfrowanieInput("S");  
    //$enigma->DeszyfrowanieInput("K");
    //$enigma->DeszyfrowanieInput("H");
    //$enigma->DeszyfrowanieInput("K");
    //$enigma->DeszyfrowanieInput("X");
    //$enigma->DeszyfrowanieInput("S");
    //$enigma->DeszyfrowanieInput("H");
    //$enigma->DeszyfrowanieInput("Z");
    //$enigma->DeszyfrowanieInput("R");
    //$enigma->DeszyfrowanieInput("X");
    //$enigma->DeszyfrowanieInput("P");
  
  // tablica z calym tekstem Wypisujemy na ekranie
  // table with all text Enter on the screen
   $tab3 = $enigma->TextDeszyfrowanieTab();
  
  $text = "<br>Tekst do rozszyfrowania -> ";	   
    for($i=0; $i<Count($tab3); $i++)
    {
        $text .= $tab3[$i];
    }
      echo $text .= "<br>";
  
    // Tablica tekstu zdeszyfrowanego, Wypisujemy na ekranie
    // Table of encrypted text, Type on the screen
       $tab1 = $enigma->DeszyfrowanieOutput();
       $text = "<br>Tekst zdeszyfrowany -> ";
    for($i=0; $i<Count($tab1); $i++)
    {
        $text .= $tab1[$i];
    }
       echo $text .= "<br>";
}
?>
