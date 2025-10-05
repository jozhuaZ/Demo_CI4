<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
</head>
<body>
    <form action="<?= base_url('update-user/' . $user['id']) ?>" method="post">
        <label>First Name</label>
        <input type="text" name="firstname" value="<?= $user['firstname'] ?>">

        <label>Middle Name</label>
        <input type="text" name="middlename" value="<?= $user['middlename'] ?>">
        
        <label>Last Name</label>
        <input type="text" name="lastname" value="<?= $user['lastname'] ?>">

        <input type="submit" value="Update User ID of <?= $user['id']?>">
    </form>
</body>
</html>