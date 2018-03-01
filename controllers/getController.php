<?php

$wordIndex = getRandomIndex($words);
$trials = 0;
$triedLetters = '';
$letters = getLettersArray();
$word = getWord($words,$wordIndex);
$wordLength = strlen($word);
$replacementString = getReplacementString($wordLength);
$remainingTrials = MAX_TRIALS;
$wordFound = false;

setcookie('gameData',encode(compact('wordIndex','trials','triedLetters','replacementString','letters')));
