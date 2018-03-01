<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Le pendu</title>
</head>
<body>
<div>
    <h1>Trouve le mot en moins de <?= MAX_TRIALS; ?> coups !</h1>
</div>
<div>
    <p>Le mot à deviner compte <?= $wordLength; ?> lettres&nbsp;: <?= $replacementString; ?>. C'est <?= $word ?></p>
</div>
<div>
    <img src="images/pendu<?=$trials?>.gif"
         alt="">
</div>
<div>
    <p>Voici les lettres que tu as déjà essayées&nbsp;:<?= $triedLetters ?> </p>
</div>
<?php if($wordFound):?>
<div>
    <p class="bg-success lead">Bravo&nbsp;! Tu as trouvé le mot
        «&nbsp;<b><?= $word ?></b>&nbsp;». <a href="index.php">Recommence&nbsp;!</a>
    </p>
</div>
<?php elseif($remainingTrials == 0): ?>
<div>
    <p class="bg-danger lead">OOOps&nbsp;! Tu sembles bien mort&nbsp;! Le mot à trouver était «&nbsp;<b><?= $word ?></b>&nbsp;». <a href="index.php">Recommence&nbsp;!</a>
    </p>
</div>
<?php else:?>

<form action="index.php"
      method="post">
    <fieldset>
        <legend>Il te reste <?= $remainingTrials ?> essais pour sauver ta peau
        </legend>
        <div>
            <label for="triedLetter">Choisis ta lettre</label>
            <select name="triedLetter"
                    id="triedLetter">
                <?php foreach ($letters as $letter => $status): ?>
                    <?php if ($status): ?>
                        <option value="<?= $letter; ?>"><?= $letter; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <!--<input type="hidden"
                   name="serializedLetters"
                   value="<?= $serializedLetters; ?>">
            <input type="hidden"
                   name="triedLetters"
                   value="<?=$triedLetters;?>">
            <input type="hidden"
                   name="wordIndex"
                   value="<?= $wordIndex; ?>">
            <input type="hidden"
                   name="replacementString"
                   value="<?= $replacementString; ?>">
            <input type="hidden"
                   name="lettersCount"
                   value="9">
            <input type="hidden"
                   name="trials"
                   value="<?=$trials?>">
            <input type="submit"
                   value="essayer cette lettre">-->
        </div>
    </fieldset>
</form>
<?php endif?>
</body>
</html>