<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class DNA
{
    public function DNAStrand(string $dnaString): string
    {
        $letters = [
            "A" => "T",
            "T" => "A",
            "C" => "G",
            "G" => "C"
        ];

        $lengthOfTheString = strlen($dnaString)-1;
        $dnaCharacters = str_split($dnaString);
        $result = [];

        for ($count = 0; $count <= $lengthOfTheString; $count++) {
            $result[] = $letters[$dnaCharacters[$count]];
        }
        return implode("", $result);

    }

}

$DNAClassObject = new DNA();
$DNAClassObject->DNAStrand("ATTGC");
