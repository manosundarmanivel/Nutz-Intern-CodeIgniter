<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form method="POST" action="<?= base_url('user/edit/' . $user->UserID) ?>">
        <label for="username">Username</label>
        <input type="text" name="username" value="<?= $user->Name ?>" required>
        <input type="submit" name="change" value="Update User">
    </form>
</body>
</html>
