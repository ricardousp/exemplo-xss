<!-- arquivo: index.php -->
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários</title>
</head>
<body>
    <h2>Deixe seu comentário</h2>
    <form action="" method="POST">
        <textarea name="comentario" rows="4" cols="50"></textarea><br>
        <button type="submit">Enviar</button>
    </form>

    <h3>Comentários:</h3>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $comentario = $_POST["comentario"];
            echo "<p>$comentario</p>"; // Exibe o comentário sem validação (vulnerável a XSS)
        }
    ?>
</body>
</html>
