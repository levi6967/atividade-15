<?php
$usuario = $_POST['usuario'] ?? '';

if ($usuario == '') {
    header("Location:15d_login.php");
    exit;
}
$cor = $_POST['cor'] ?? 'lightgray';
$coresPermitidas = ['lightgray', 'lightblue', 'lightgreen'];

if (!in_array($cor, $coresPermitidas)) {
    $cor = 'lightgray';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
</head>
<body>

<!-- cor de fundo -->
 <div style="background-color: <?php echo $cor; ?>;">

       <h1>Bem-vindo ao seu perfil!</h1>
    <p>Usuário: <?php echo htmlspecialchars($usuario ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
</div>

    <a href="15d_logout.php">Logout</a>
</body>
</html>