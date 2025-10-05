<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url('create-user') ?>" method="post">
        <label>First Name</label>
        <input type="text" name="firstname">

        <label>Middle Name</label>
        <input type="text" name="middlename">
        
        <label>Last Name</label>
        <input type="text" name="lastname">

        <input type="submit" value="Submit">
    </form>
</body>
</html>