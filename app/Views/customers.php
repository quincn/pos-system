<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>
<body>

    <nav>
    <a href="<?= base_url('/') ?>">Home</a> |
    <a href="<?= base_url('/about') ?>">About</a> |
    <a href="<?= base_url('/customers') ?>">Customer Accounts</a> |
    <a href="<?= base_url('/users') ?>">User Accounts</a>
    </nav>

    <hr>

    <h1>Customer Accounts</h1>

    <table border="1">
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>

        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= $customer['full_name'] ?></td>
                <td><?= $customer['email'] ?></td>
                <td><?= $customer['phone'] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>