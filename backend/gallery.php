<?php include "./partials/header.php"?>

<?php include "../mysql_connect.php"?>
<?php

if(isset($_POST['submit'])) {
    $title = $_POST["title"];
    $image = $_POST["image"];
    $text = $_POST["text"];

    $sqlIns = "INSERT INTO project (id, title, image, text) VALUES (NULL, '$title', '$image', '$text');";
    mysqli_query($db, $sqlIns);
}

if(isset($_REQUEST['action']) &&  $_REQUEST['action'] == "DELETE"){
    $delId = $_REQUEST['id'];
    $sqlDel = "DELETE FROM `project` WHERE `project`.`id` = '$delId';";
    mysqli_query($db, $sqlDel);
}




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
                            <p class="card-text"><?php echo $row['text']?></p>
							<a href="/backend/project.php?id=<?php echo $row['id']?>" class="btn btn-primary">Read more</a>
						</div>
					</div>	
				</div>
                <?php endwhile; ?>
			</div>	
        </div>
		
	</main>

<?php include "./partials/footer.php"?>


