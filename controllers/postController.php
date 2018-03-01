<?php
if(!isset($_COOKIE['gameData'])){
    die('OOps,faudrait accepter les cookies pour jouer au pendu');
}

extract(decode($_COOKIE['gameData']));

$word = strtolower($words[$wordIndex]);
$wordLength = strlen($word);
$triedLetter = $_POST['triedLetter'];

$wordFound = false;

$triedLetters .= $triedLetter;
$letters[$triedLetter] = false;

$letterFound = false;
for ($i = 0; $i < $wordLength; $i++) {
    $l = substr($word, $i, 1);
    if ($triedLetter === $l) {
        $letterFound= true;
        $replacementString = substr_replace($replacementString, $l, $i, 1);
    }
}
if(!$letterFound){
    $trials++;
}else {
    if ($word === $replacementString) {
        $wordFound = true;
    }
}
$remainingTrials = MAX_TRIALS-$trials;
