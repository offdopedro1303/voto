<!DOCTYPE html>
<html>
<head>
    <title>Verificação de idade para votação</title>
</head>
<body>

<form method="post" action="">
    <label for="idade">Digite sua idade:</label>
    <input type="number" id="idade" name="idade" required>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = $_POST['idade'];

    if ($idade < 15) {
        echo "Você não pode votar.";
    } elseif ($idade >= 16 && $idade < 18) {
        echo "Voto facultativo.";
    } elseif ($idade >= 19 && $idade < 65) {
        echo "O voto é obrigatório.";
    } if ($idade > 65) {
        echo "O voto é facultativo.";
    }
}
?>

</body>
</html>
