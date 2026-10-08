<!DOCTYPE html>
<html>

<head>
    <title>Users</title>
</head>

<body>
    <nav>
        <a href="<?= site_url('/') ?>">Home</a> |
        <a href="<?= site_url('about') ?>">About</a> |
        <a href="<?= site_url('customers') ?>">Customers</a> |
        <a href="<?= site_url('users') ?>">Users</a>
    </nav>

    <hr>
    <h1>User Accounts</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Username</th>
            <th>Full Name</th>
        </tr>

        <?php foreach ($users as $user): ?>

            <tr>
                <td><?= $user['username'] ?></td>
                <td><?= $user['full_name'] ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

</body>

</html>