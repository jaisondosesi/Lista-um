<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
</head>
<body>

    <h2>Checkar se o numero é par ou ímpar</h2>

    <form method="post" action="">
        <label for="numero">Digite um numero:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if ($numero % 2 == 0) {
            echo "<p>O numero $numero é Par.</p>";
        } else {
            echo "<p>O numero $numero é Ímpar.</p>";
        }
    }
    ?>

</body>
</html>