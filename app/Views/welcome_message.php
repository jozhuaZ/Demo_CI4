<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <?php if(session()->getFlashdata('success')): ?>
        <p style="color: green;">
            <?= session()->getFlashdata('success') ?>
        </p>
    <?php endif; ?>
    <h1>Home Page</h1>
</body>
</html>