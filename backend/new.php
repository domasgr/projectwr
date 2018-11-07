<?php include "./partials/header.php"?>
<?php include "../mysql_connect.php"?>
<main>
    <div class="container gallery">

        <h1>Beta form</h1>

        <form action="/backend/gallery.php" method="POST">
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Project title">
                <input type="text" name="image" class="form-control" value="https://images.pexels.com/photos/935875/pexels-photo-935875.jpeg?auto=compress&cs=tinysrgb&h=350">
                <input type="text" name="text" class="form-control" placeholder="Project text">
                <input type="submit" name="submit" class="btn btn-primary" value="Add">
            </div>
        </form>

    </div>
</main>







<?php include "./partials/footer.php"?>
