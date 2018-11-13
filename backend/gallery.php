<?php include "./partials/header.php"?>

<?php include "../mysql_connect.php"?>
<?php

//  POST detection, INSERT action in db
if(isset($_POST['submit'])) {
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
            }
        }
    }
    // *********************** UPLOADING FILES TO DATABASE*********************
    $sqlIns = "INSERT INTO projectf (title, image1, image2, image3, text, imageOrder, projectDate, projectType, timespent) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($db);
    if (!mysqli_stmt_prepare($stmt, $sqlIns)) {
        echo "SQL ERROR";
    } else {
        mysqli_stmt_bind_param($stmt, "sssssssss", $title, $file_array[0]['name'], $file_array[1]['name'], $file_array[2]['name'], $text, $order, $date, $type, $timespent);
        mysqli_stmt_execute($stmt);
    }

}
//*************************************************************************
//    $sqlIns = "INSERT INTO project (title, image, text) VALUES (?, ?, ?);";
//    $stmt = mysqli_stmt_init($db);
//    if(!mysqli_stmt_prepare($stmt, $sqlIns)){
//        echo "SQL ERROR";
//    } else{
//        mysqli_stmt_bind_param($stmt, "sss", $title, $image, $text);
//        mysqli_stmt_execute($stmt);
//    }
//}
//*************************************************************************


// DELETE detection, DELETE action in db
if(isset($_REQUEST['action']) &&  $_REQUEST['action'] == "DELETE"){
    $delId = $_REQUEST['id'];
    $sqlDel = "DELETE FROM `projectf` WHERE `id` = '$delId';";
    mysqli_query($db, $sqlDel);
}

 //LOGIN detection







$sql = "SELECT * FROM projectf;";
$res = mysqli_query($db, $sql);
?>
	<main>
<a href="../frontend/main.php"><div class="backToHome">
                <div class="homelink">
                    <h1><i class="fas fa-home"></i></h1>
                </div>
            </div></a>
		<div class="container">
			<div class="row">
                <?php while($row = mysqli_fetch_assoc($res)): ?>
				<div class="col-md-3">
					<div class="card">
						<img class="card-img-top" src="uploads/<?php echo $row['image1']?>">
						<div class="card-body">
							<h5 class="card-title"><?php echo $row['title']?></h5>
                            <p class="card-text text-truncate"><?php echo $row['text']?></p>
							<a href="/backend/project.php?id=<?php echo $row['id']?>" class="btn btn-primary">Read more</a>
						</div>
					</div>	
				</div>
                <?php endwhile; ?>
			</div>	
        </div>
		
	</main>

<?php include "./partials/footer.php"?>


