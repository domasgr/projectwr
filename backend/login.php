<?php include "./partials/header.php" ?>
<?php
if (isset($_POST['submitLogin'])) {
    include "../mysql_connect.php";
    $username = $_POST['usernameOrEmail'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header('Location: /backend/login.php?error=emptyfields');   // Error handler EMPTY FIELD
        exit();
    } else {
        $sql = "SELECT * FROM admin WHERE id=1;";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row['password'] !== $password) {
            header('Location: /backend/login.php?error=wrongdata'); // Error handler WRONG PW or USERNAME
            exit();
        } elseif ($row['username'] !== $username){
            header('Location: /backend/login.php?error=wrongdata'); // Error handler WRONG PW or USERNAME
            exit();
        }
        else {
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: /backend/gallery.php?login=succes");  // LOGIN SUCCES!
            exit();
        }
    }
}
?>
<main>
    <h1>Log in beta</h1>

    <form action="/backend/login.php" method="POST">
        <input type="text" name="usernameOrEmail">
        <input type="text" name="password">
        <input type="submit" name="submitLogin">
    </form>

</main>


<?php include_once __DIR__ . "./partials/footer.php" ?>

