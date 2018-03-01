<?php

$wordIndex = getRandomIndex($words);
$trials = 0;
$triedLetters = '';
$letters = getLettersArray();
$word = getWord($words,$wordIndex);
$wordLength = strlen($word);
$replacementString = getReplacementString($wordLength);
$serializedLetters = getSerializedLetters($letters);
$remainingTrials = MAX_TRIALS;
$wordFound = false;