<?php include "./partials/header.php"?>
<?php include "../mysql_connect.php"?>

    <main>
        <div class="container">
            <div class="row fotospreview">
                <div class="col-md-2 info addform">

                    <div class="row preview">
                        <div class="col" style="background-image: url(https://images.pexels.com/photos/935875/pexels-photo-935875.jpeg?auto=compress&cs=tinysrgb&h=350)">
                        </div>
                    </div>
                    <div class="row preview">
                        <div class="col" style="background-image: url(https://images.pexels.com/photos/935875/pexels-photo-935875.jpeg?auto=compress&cs=tinysrgb&h=350)">
                        </div>
                    </div>
                    <div class="row preview">
                        <div class="col" style="background-image: url(https://images.pexels.com/photos/935875/pexels-photo-935875.jpeg?auto=compress&cs=tinysrgb&h=350)">
                        </div>
                    </div>



                </div>

                <div class="col-md-10">
                    <div class="carousel-background addform">
                        <div id="carouselExampleIndicators" class="carousel addform slide mx-auto" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://images.pexels.com/photos/935875/pexels-photo-935875.jpeg?auto=compress&cs=tinysrgb&h=350" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://images.pexels.com/photos/935875/pexels-photo-935875.jpeg?auto=compress&cs=tinysrgb&h=350" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://images.pexels.com/photos/935875/pexels-photo-935875.jpeg?auto=compress&cs=tinysrgb&h=350" alt="Third slide">
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


            <form class="addform" action="/backend/gallery.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-2">
                        <input type="file" name="images[]" class="form-control-file mb-4">
                        <input type="file" name="images[]" class="form-control-file mb-4">
                        <input type="file" name="images[]" class="form-control-file mb-4">
                        <input type="text" name="date" class="form-control" placeholder="Date">
                        <input type="text" name="type" class="form-control" placeholder="Work type">
                        <input type="text" name="timespent" class="form-control" placeholder="Time spent">

<!--                        <input type="text" class="form-control" placeholder="Additional info">-->
<!--                        <input type="text" class="form-control" placeholder="Additional info">-->
<!--                        <input type="text" class="form-control" placeholder="Additional info">-->

                        <input type="submit" name="submit" class="btn btn-success mt-3" value="Create project">

                    </div>
                    <div class="col-md-10">
                        <input type="text" name="title" class="form-control" id="newtitle" placeholder="Project title" required>
                        <textarea name="text" class="form-control mt-2" id="newtext" rows="14" placeholder="Text" required></textarea>
                    </div>
                </div>
            </form>




        </div>
    </main>











<?php include "./partials/footer.php"?>