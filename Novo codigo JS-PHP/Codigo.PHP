<?php
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $soma = $num1 + $num2;
    echo "A soma dos números é: " . $soma;
}
?>

<form method="post">
    Primeiro número: <input type="number" step="any" name="num1" required><br>
    Segundo número: <input type="number" step="any" name="num2" required><br>
    <input type="submit" value="Somar">
</form>
