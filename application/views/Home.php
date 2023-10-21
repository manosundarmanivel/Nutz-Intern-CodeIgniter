
<!DOCTYPE html>
<html>
<head>
    <title>User Management Application</title>
    <style>
       
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

       
        th {
            background-color: #333;
            color: #fff;
            font-weight: bold;
        }

     
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
        .form-container {
            width: 300px;
          
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        
        .form-container input {
            display: block;
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

     
        .form-container input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 15px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body style="padding: 10px;">
    <h1>User Management Application</h1>

    
    <h2>Add User</h2>
    <div class="form-container">
        <form method="POST" action="<?= base_url('user/add') ?>">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="save" value="Add User">
        </form>
    </div>

    
    <h2>List of Users</h2>
    <table>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user->UserID ?></td>
                <td><?= $user->Name ?></td>
                <td><?= $user->Email ?></td>
                <td><a href="<?= base_url('user/edit/' . $user->UserID) ?>">Edit</a></td>
                <td><a href="<?= base_url('user/delete/' . $user->UserID) ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
