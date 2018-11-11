<?php include "./partials/header.php"?>
<?php include "../mysql_connect.php"?>

<?php
$project_id = $_GET["id"];
$sql = "SELECT * FROM `projectf` WHERE `id`='$project_id';";
$res = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($res);
?>
    <main>
        <div class="container">
            <div class="row fotospreview">
                <div class="col-md-2 info addform">

                    <div class="row preview">
                        <div class="col" style="background-image: url(uploads/<?php echo $row['image1']?>)">
                        </div>
                    </div>
                    <div class="row preview">
                        <div class="col" style="background-image: url(uploads/<?php echo $row['image2']?>)">
                        </div>
                    </div>
                    <div class="row preview">
                        <div class="col" style="background-image: url(uploads/<?php echo $row['image3']?>)">
                        </div>
                    </div>



                </div>

                <div class="col-md-10">
                    <div class="carousel-background addform">
                        <div id="carouselExampleIndicators" class="carousel slide mx-auto" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="uploads/<?php echo $row['image1'] ?>" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="uploads/<?php echo $row['image2']?>" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="uploads/<?php echo $row['image3']?>" alt="Third slide">
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

                </div>
            </div>


            <form class="addform" action="/backend/project.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-2">
                        <input type="file" name="images[]" value="<?php echo $row['image1'] ?>" class="form-control-file mb-4">
                        <input type="file" name="images[]" value="<?php echo $row['image2']?>" class="form-control-file mb-4">
                        <input type="file" name="images[]" value="<?php echo $row['image3']?>" class="form-control-file mb-4">
                        <input type="text" name="date" value="<?php echo $row['projectDate']?>" class="form-control" placeholder="Date">
                        <input type="text" name="type" value="<?php echo $row['projectType']?>" class="form-control" placeholder="Work type">
                        <input type="text" name="timespent" value="<?php echo $row['timespent']?>" class="form-control" placeholder="Time spent">

                        <!--                        <input type="text" class="form-control" placeholder="Additional info">-->
                        <!--                        <input type="text" class="form-control" placeholder="Additional info">-->
                        <!--                        <input type="text" class="form-control" placeholder="Additional info">-->

                        <input type="submit" name="submitEdit" class="btn btn-success mt-3" value="UPDATE!">

                    </div>
                    <div class="col-md-10">
                        <input type="text" name="title" value="<?php echo $row['title'] ?>" class="form-control" id="newtitle" placeholder="Project title" required>
                        <textarea name="text" class="form-control mt-2" rows="14" placeholder="Text" required><?php echo $row['text'] ?></textarea>
                    </div>
                </div>
            </form>




        </div>
    </main>







<?php include "./partials/footer.php"?>