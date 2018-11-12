<?php include "./partials/header.php"?>
<?php include "../mysql_connect.php"?>


<?php
$project_id = $_GET["id"];
if(isset($_POST['submitEdit'])){
    $title = $_POST["title"];
    $text = $_POST["text"];
    $date = $_POST['date'];
    $type = $_POST['type'];
    $order = 1;
    $timespent = $_POST['timespent'];

    // **************** reArray function *******************
    function reArrayFiles($file_post)
    {
        $file_ary = array();
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);

        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }
        return $file_ary;
    }


//******************** UPLOADING FILES *********************
    $file_array = reArrayFiles($_FILES['images']);
    for ($i = 0; $i < count($file_array); $i++) {
        if ($file_array[$i]['error']) {
            ?>
            <div class="alert alert-danger">
                <?php echo "Error while uploading file";
                ?></div> <?php
        } else {
            $extensions = array('jpg', 'jpeg', 'gif', 'png');
            $file_ext = explode('.', $file_array[$i]['name']);
            $file_ext = end($file_ext);

            if (!in_array($file_ext, $extensions)) {
                ?>
                <div class="alert alert-danger">
                    <?php echo "{$file_array[$i]['name']} - Invalid file extension!";
                    ?></div> <?php
            } else {
                $img_dir = "uploads/" . $file_array[$i]['name'];
                move_uploaded_file($file_array[$i]['tmp_name'], $img_dir);
                ?>
                <div class="alert alert-succes">
                    <?php echo "Files uploaded succesfully!";
                    ?></div> <?php
            }
        }
    }



    $sql = "UPDATE `projectf` SET `title` = ?, `image1` = ?, `image2` = ?,`image3` = ?, `text` = ? , `imageOrder` =?, `projectDate` =?, `projectType` =?, `timespent` =? WHERE `projectf`.`id` = '$project_id';";
    $stmt = mysqli_stmt_init($db);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "SQL ERROR";
        } else{
            mysqli_stmt_bind_param($stmt, "sssssssss", $title, $file_array[0]['name'], $file_array[1]['name'], $file_array[2]['name'], $text, $order, $date, $type, $timespent);
            mysqli_stmt_execute($stmt);
   }
//    $stmt = mysqli_stmt_init($db);
//    if(!mysqli_stmt_prepare($stmt, $sql)){
//        echo "SQL ERROR";
//    } else{
//        mysqli_stmt_bind_param($stmt, "sss", $title, $image, $text);
//        mysqli_stmt_execute($stmt);
//    }
}

$sql = "SELECT * FROM `projectf` WHERE `id`='$project_id';";
$res = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($res);
?>



<main>
    <div class="container">
            <div class="row">
                <div class="col-md-2 info">

                    <div class="row preview">
                        <div class="col" style="background-image: url(uploads/<?php echo $row['image1']?>); background-size: cover;">
                        </div>
                    </div>
                    <div class="row preview">
                        <div class="col" style="background-image: url(uploads/<?php echo $row['image2']?>); background-size: cover;">
                        </div>
                    </div>
                    <div class="row preview">
                        <div class="col" style="background-image: url(uploads/<?php echo $row['image3']?>); background-size: cover;">
                        </div>
                    </div>


                </div>

                <div class="col-md-10">
                    <div class="carousel-background">
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


            <div class="row">
                <div class="col-md-2">
                    <?php if(isset($_SESSION['id'])) {
                        echo '<div class="dropdown mt-4">';
                        echo '<a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action    <i class="fas fa-cog"></i>
                        </a>';

                        echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
                        echo '<a class="dropdown-item" href="/backend/edit.php?id='.$project_id.'">Edit</a>';
                        echo '<form action="/backend/gallery.php?id='.$project_id.'&action=DELETE" method="POST">
                                  <input class="dropdown-item" type="submit" name="submitDelete" value="Delete">
                                  </form>';
                        //echo '<a class="dropdown-item" href="#">Something else here</a>';
                        echo '</div>';
                        echo '</div>';
                    }?>
                    <div class="side-info my-auto d-block">
                        <ul class="list-group mt-5">
                            <li class="list-group-item"><i class="far fa-calendar mr-2"></i> <span class="text-light"> <?php echo $row['projectDate']?></span></li>
                            <li class="list-group-item"><i class="far fa-clock mr-2"></i><span class="text-light"><?php echo $row['timespent']?></span></li>
                            <li class="list-group-item"><i class="fas fa-hammer mr-2"></i><span class="text-light"><?php echo $row['projectType']?></span></li>
<!--                            <li class="list-group-item"><strong>Porta ac </strong> <span class="text-light bg-secondary">consectetur ac</span></li>-->
<!--                            <li class="list-group-item"><strong>Vestibulum </strong> <span class="text-light bg-secondary">at eros</span></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-md-10">
                    <h3 class="image-title"><?php echo $row['title'] ?></h3>
                    <p><em>By Adiela Bameler</em></p>
                    <p class="project-text"><?php echo $row['text'] ?> </p>
                </div>
            </div>




    </div>
</main>











<?php include "./partials/footer.php"?>


