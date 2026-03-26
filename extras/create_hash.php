<?php
$hash = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha = $_POST["senha"] ?? "";
    
    if (!empty($senha)) {
        $hash = password_hash($senha, PASSWORD_DEFAULT);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Hash</title>
</head>
<body>

<div class="container">
    <h2>Gerador de Hash</h2>
    
    <form method="POST">
        <label>Digite a senha:</label>
        <input type="text" name="senha" required>
        <button type="submit">Gerar Hash</button>
    </form>

    <?php if (!empty($hash)): ?>
        <div class="resultado">
            <strong>Hash gerado:</strong><br>
            <?php echo $hash; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>