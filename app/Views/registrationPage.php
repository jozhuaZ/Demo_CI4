<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <?php if(session()->getFlashdata('error')): ?>
        <p style="color: red;">
            <?= session()->getFlashdata('error') ?>
        </p>
    <?php endif; ?>

    <h1>Registration</h1>
    <form action="<?= base_url('u/register') ?>" method="post">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname">
        
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname">

        <label for="email">Email</label>
        <input type="email" name="email">

        <label for="salary">Salary</label>
        <input type="number" name="salary">

        <input type="submit" value="Submit">
    </form>
</body>
</html>