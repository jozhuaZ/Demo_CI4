<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
</head>
<body>
    <?php if(!empty($users)): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </tr>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['id']?></td>
                    <td><?= $user['firstname']?></td>
                    <td><?= $user['middlename']?></td>
                    <td><?= $user['lastname']?></td>
                    <td>
                        <a href="<?= base_url('/get-user/' . $user['id'])?>">Update</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <h1>No Users found!</h1>
    <?php endif; ?>
</body>
</html>