<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class DNA
{
    public function DNAStrand(string $dnaString): string
    {
        return strtr($dnaString, 'ACGT', 'TGCA');
    }

}

$DNAClassObject = new DNA();
$DNAClassObject->DNAStrand("ATTGC");

