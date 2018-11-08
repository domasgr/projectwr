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
                <div class="col-md-3 info">
                     <?php if(isset($_SESSION['id'])) {
                         echo '<h3> TOOLS</h3>';

                         echo '<a href="/backend/edit.php?id='.$project_id.'" class="btn btn-primary">Edit</a>';

                         echo '<form action="/backend/gallery.php?id='.$project_id.'&action=DELETE" method="POST">
                        <input class="btn btn-danger" type="submit" name="submitDelete" value="delete">
                    </form>';
                     }?>
                     <div class="review1"><img src="<?php echo $row['image']?>"></div>
                     <div class="review2"><img src="<?php echo $row['image']?>"></div>
                     <div class="review3"><img src="<?php echo $row['image']?>"></div>

                     <div class="side-info my-auto d-block">
                        <ul class="list-group mt-5">
                            <li class="list-group-item">Date 2018/10/21</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                     </div>
                </div>

                <div class="col-md-9">
                    <div class="carousel-background">
                        <div id="carouselExampleIndicators" class="carousel slide mx-auto" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo $row['image'] ?>" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo $row['image']?>" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo $row['image']?>" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <h3 class="image-title"><?php echo $row['title'] ?></h3>
                    <p class="project-text"><?php echo $row['text'] ?> </p>
                </div>
            </div>
    </div>
</main>











<?php include "./partials/footer.php"?>
