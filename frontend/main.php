<?php include "../mysql_connect.php"?>


<?php $sql = "SELECT * FROM projectf;";
$res = mysqli_query($db, $sql);
$count = 0;

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Wood restoration</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
<body>
	
	<div id="first">
		<nav id="navigation" class="navbar navbar-expand-sm navbar-dark fixed-top py-0">
			<a class="navbar-brand" href="#"><img class="nav-icon" src="../images/icon.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navLinks">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-end" id="navLinks">
<!--                <ul class="navbar-nav">-->
<!--                    <li class="nav-item"><a href="#first" class="nav-link scroll active">GALLERY</a></li>-->
<!--                </ul>-->
				<ul class="navbar-nav">
					<li class="nav-item"><a href="#first" class="nav-link scroll active">HOME</a></li>
					<li class="nav-item"><a href="#second" class="nav-link scroll">PROJECTS</a></li>
					<li class="nav-item"><a href="#third" class="nav-link scroll">ABOUT</a></li>
					<li class="nav-item"><a href="#fourth" class="nav-link scroll">CONTACT</a></li>
				</ul>
			</div>
		</nav>

		<header>
            <div>
                <h1><span class="icon">W</span>OOD</h1>
                <h2>RESTORATION</h2>
                <p>Give your wood a new life</p>
            </div>

		</header>
		<div class="bookmark"></div>
	</div>

	<div id="second">
		<div class="container project-card">
			<div class="about-section-text">Our handmade wood solutions</div>
				<div class="row align-items-center">
                    <?php while($row = mysqli_fetch_assoc($res)): ?>
                        <?php if($count<3){?>
                            <div class="col-md-6 col-lg-3 col-sm-12">
                                <div class="card mb-5">
                                    <img class="card-img-top" src="../backend/uploads/<?php echo $row['image1']?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $row['title']?></h5>
                                        <p class="card-text"> <?php echo $row['text'] ?> </p>
                                        <a href="../backend/project.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Read more</a>
                                    </div>
                                </div>
                            </div>
                        <?php $count++; }?>

                    <?php endwhile; ?>
<!--					<div class="col-md-6 col-lg-3 col-sm-12">-->
<!--						<div class="card mb-5">-->
<!--							<img class="card-img-top" src="https://images.pexels.com/photos/935875/pexels-photo-935875.jpeg?auto=compress&cs=tinysrgb&h=350">-->
<!--							<div class="card-body">-->
<!--								<h5 class="card-title">Card title</h5>-->
<!--								<p class="card-text">ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod-->
<!--								tempor incididunt ut labore et dolore</p>-->
<!--								<a href="#" class="btn btn-primary">Read more</a>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!---->
<!--					<div class="col-md-6 col-lg-3 col-sm-12">	-->
<!--						<div class="card mb-5">-->
<!--							<img class="card-img-top" src="https://images.pexels.com/photos/935875/pexels-photo-935875.jpeg?auto=compress&cs=tinysrgb&h=350">-->
<!--							<div class="card-body">-->
<!--								<h5 class="card-title">Card title</h5>-->
<!--								<p class="card-text">ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod-->
<!--								tempor incididunt ut labore et dolore</p>-->
<!--								<a href="#" class="btn btn-primary">Read more</a>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->

					<div class="col-md-6 col-lg-3 col-sm-12">	
						<div class="card view-all mb-5">
							<div class="card-body">
								<h5 class="card-title">Projects gallery</h5>
								<div class="d-flex justify-content-center"><a href="../backend/gallery.php" class="btn btn-primary">VIEW ALL</a></div>
								<p class="card-text">ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore</p>
							</div>
						</div>
					</div>
				</div>	
			</div>
		<div class="bookmark2"></div>
	</div>



<div id="third">
<div class="container about-table">
	<div class="about-section-text">What you should know</div>
	<div class="row about-section-slide">
  <div class="col-12 col-sm-4 mb-3">
    <div class="list-group" id="list-tab" role="tablist">

      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">About old wood</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Wood types</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Restoration power</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Why would you?</a>
    </div>
  </div>
  <div class="col-12 col-sm-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">lore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in volupt</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"> amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat </div>
    </div>
  </div>
</div>
</div>
	<!-- <div class="container-fluid info-image"></div> -->
<div class="bookmark3"></div>
</div>


<div id="fourth">
	
	<div class="container">
		<div class="contact-section-text">Get in touch with us</div>
	</div>
	<div class="container-fluid">
		<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="info d-flex flex-column align-items-center">
					<h3>Find us in</h3>
					<p>Aušros g. 4, Domeikava 54362</p>
					<hr>
					<h3>Call us</h3>
					<p>+37017000281</p>
					<hr>
					<h3>Email us</h3>
					<p>wood@restauration.com</p>
				</div>
			</div>

			<div class="col-lg-8 col-sm-12">
					<div class="map-responsive">
                        <iframe class="" src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d1145.1656957489638!2d23.92627510186556!3d54.96728744451537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d54.967225899999995!2d23.925245099999998!5e0!3m2!1slt!2slt!4v1541262943062" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
			</div>
		</div>
	</div>
</div>
<footer>
	<div class="container footer-container">
		<img class="footer-icon" src="../images/icon.png">
		<p class="footer-text">All rights reserved  ©WoodRestauration 2018 </p>
	</div>
</footer>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="main.js"></script>
</body>
</html>