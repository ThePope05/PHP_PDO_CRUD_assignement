<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="style.css">
    <title>Pdo-crud</title>
</head>
<body>
    <div class="banner">
        <h1>PDO - CRUD</h1>
    </div>

    <div class="center">
        <div class="container">
            <div>
                <h1 class="center">All users</h1>
                <table>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                        include("read.php");

                        $users = retInfo("login_user_info", "user");
                        foreach($users as $info){
                            echo "<tr>";
                                echo "<td>$info->UName</td>";
                                echo "<td>$info->Mail</td>";
                                echo "<td><a href='delete.php?id=$info->id'><span class='material-symbols-outlined'>edit</span></a></td>";
                                echo "<td><a href='delete.php?id=$info->id'><span class='material-symbols-outlined'>delete</span></a></td>";
                            echo "</tr>";
                        }
                    ?>
                    <tr>
                        <td><a href=""><span class='material-symbols-outlined'>add</span></a></td>
                    </tr>
                </table>
            </div>
            <div>

            </div>
        </div>
    </div>
</body>
</html>