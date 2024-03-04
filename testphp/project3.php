<?php

function generateRandomNumber($min, $max) {
	    return rand($min, $max);
}

$minRange = isset($_POST['min']) ? $_POST['min'] : 1;
$maxRange = isset($_POST['max']) ? $_POST['max'] : 100;

$randomNumber = generateRandomNumber($minRange, $maxRange);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Generator</title>
</head>
<body>
    <h1>Numero Aleatorio</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="min">Minimo:</label>
        <input type="number" name="min" value="<?php echo $minRange; ?>" required>

        <label for="max">Maximo:</label>
        <input type="number" name="max" value="<?php echo $maxRange; ?>" required>

        <button type="submit">Generate Random Number</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <p>Tu numero es: <?php echo $randomNumber; ?></p>
    <?php endif; ?>
</body>
</html>

