<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
</head>
<body>
    <h1>Contacto</h1>
    <h2>
        <a href="<?= $web ?>">
            <?= $web ?>
        </a>
    </h2>

    <?php foreach($contacts as $contact): ?>
        <p>
            <?= $contact['fullname'] ?>
        </p>
    <?php endforeach; ?>
</body>
</html>
