<?php include "./partials/header.php" ?>
<?php
if (isset($_POST['submitLogin'])) {
    include "../mysql_connect.php";
    $username = $_POST['username'];
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
    <div class="container login">
        <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="/backend/login.php" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            <small id="emailHelp" class="form-text text-muted">Login for web administrator</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <input type="submit" name="submitLogin" class="btn btn-primary" value="Login">
                    </form>
                </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</main>


<?php include_once __DIR__ . "./partials/footer.php" ?>

