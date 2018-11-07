<?php include "./partials/header.php"?>
<?php include "../mysql_connect.php"?>

<?php
$project_id = $_GET["id"];
$sql = "SELECT * FROM `project` WHERE `id`='$project_id';";
$res = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($res);
?>
    <main>
        <div class="container gallery">

            <h1>Beta form</h1>

            <form action="/backend/project.php?id=<?php echo $project_id ?>" method="POST">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" value="<?php echo $row['title'] ?>">
                    <input type="text" name="image" class="form-control" value="<?php echo $row['image']?>">
                    <input type="text" name="text" class="form-control" value="<?php echo $row['text']?>">
                    <input type="submit" name="submitEdit" class="btn btn-primary" value="Edit">
                </div>
            </form>

        </div>
    </main>







<?php include "./partials/footer.php"?>