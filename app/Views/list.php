<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['id']?></td>
                    <td><?= $user['firstname']?></td>
                    <td><?= $user['lastname']?></td>
                    <td><?= $user['email']?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>