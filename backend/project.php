<?php include "./partials/header.php"?>
<?php include "../mysql_connect.php"?>


<?php
$project_id = $_GET["id"];
if(isset($_POST['submitEdit'])){
    $title = $_POST['title'];
    $image = $_POST['image'];
    $text = $_POST['text'];
    $sql = "UPDATE `project` SET `title` = ?, `image` = ?, `text` = ? WHERE `project`.`id` = '$project_id';";
    $stmt = mysqli_stmt_init($db);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL ERROR";
    } else{
        mysqli_stmt_bind_param($stmt, "sss", $title, $image, $text);
        mysqli_stmt_execute($stmt);
    }
}

$sql = "SELECT * FROM `project` WHERE `id`='$project_id';";
$res = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($res);
?>



<main>
    <div class="container">

            <div class="row">
                <div class="col-md-3">
                     <?php if(isset($_SESSION['id'])) {
                         echo '<h3> TOOLS</h3>';

                         echo '<a href="/backend/edit.php?id='.$project_id.'" class="btn btn-primary">Edit</a>';

                         echo '<form action="/backend/gallery.php?id='.$project_id.'&action=DELETE" method="POST">
                        <input class="btn btn-danger" type="submit" name="submitDelete" value="delete">
                    </form>';
                     }?>
                </div>

                <div class="col-md-9">
                    <img src="<?php echo $row['image']?>" class="img-fluid" alt="Responsive image">
                    <h3 class="image-title"><?php echo $row['title'] ?></h3>
                    <p class="project-text"><?php echo $row['text'] ?> </p>
                </div>
            </div>
    </div>
</main>











<?php include "./partials/footer.php"?>
