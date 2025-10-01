<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

    <form action="<?= base_url('create') ?>" method="post">
        <label for="firstname">FirstName</label>
        <input type="text" name="firstname">

        <label for="lastname">LastName</label>
        <input type="text" name="lastname">

        <label for="email">Email</label>
        <input type="email" name="email">

        <input type="submit" value="Submit">
    </form>
</body>
</html>