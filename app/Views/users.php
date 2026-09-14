<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>

    <nav>
    <a href="<?= base_url('/') ?>">Home</a> |
    <a href="<?= base_url('/about') ?>">About</a> |
    <a href="<?= base_url('/customers') ?>">Customer Accounts</a> |
    <a href="<?= base_url('/users') ?>">User Accounts</a>
    </nav>

    <hr>

    <h1>User Accounts</h1>

    <table border="1">
        <tr>
            <th>Username</th>
            <th>Full name</th>
            <th>Created At</th>
        </tr>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['username'] ?></td>
                <td><?= $user['full_name'] ?></td>
                <td><?= $user['created_at'] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>