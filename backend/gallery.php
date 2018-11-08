<?php include "./partials/header.php"?>

<?php include "../mysql_connect.php"?>
<?php

//  POST detection, INSERT action in db
if(isset($_POST['submit'])) {
    $title = $_POST["title"];
    $image = $_POST["image"];
    $text = $_POST["text"];

    $sqlIns = "INSERT INTO project (title, image, text) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($db);
    if(!mysqli_stmt_prepare($stmt, $sqlIns)){
        echo "SQL ERROR";
    } else{
        mysqli_stmt_bind_param($stmt, "sss", $title, $image, $text);
        mysqli_stmt_execute($stmt);
    }
}
// DELETE detection, DELETE action in db
if(isset($_REQUEST['action']) &&  $_REQUEST['action'] == "DELETE"){
    $delId = $_REQUEST['id'];
    $sqlDel = "DELETE FROM `project` WHERE `project`.`id` = '$delId';";
    mysqli_query($db, $sqlDel);
}

 //LOGIN detection







$sql = "SELECT * FROM project;";
$res = mysqli_query($db, $sql);
?>
	<main>

		<div class="container">
			<div class="row">
                <?php while($row = mysqli_fetch_assoc($res)): ?>
				<div class="col-md-3">
					<div class="card">
						<img class="card-img-top" src="<?php echo $row['image']?>">
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


