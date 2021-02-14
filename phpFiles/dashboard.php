<?php
include 'header.php';
include_once '../businessLogic/variables.php';
include_once 'userMapper.php';
if (isset($_SESSION['role']) && $_SESSION['role'] == '1') {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
} else {
    header("Location:./phpPages/getInvolved.php");
}
?>

<div>
    <h1>This is the Dashboard page</h1>
    <div>
        <h2>User list:</h2>
        <table>
            <thead>
                <tr>
                    <td>Emri</td>
                    <td>Mbiemri</td>
                    <td>Email</td>
                    <td>Detajet</td>
                    <td>Modifiko</td>
                    <td>Fshij</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['userLastName']; ?></td>
                        <td><?php echo $user['userEmail']; ?></td>
                        <td><a href=<?php echo "../businessLogic/detailsUser.php?id=" . $user['userid']; //to be continued by students
                                    ?>>Detajet</a></td>
                        <td><a href=<?php echo "edit.php?id=" . $user['userid'];
                                    ?>>Modifiko</td>
                        <td><a href=<?php echo "deleteUser.php?id=" . $user['userid'];
                                    ?>>Fshij</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>




<?php
include 'footer.php'
?>