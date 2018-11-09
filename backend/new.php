<?php include "./partials/header.php"?>
<?php include "../mysql_connect.php"?>
<main>
    <div class="container gallery">

        <h1>Beta form</h1>

        <form action="/backend/gallery.php" method="POST">
            <div class="form-group">
                <label for="newtitle">Title</label>
                <input type="text" name="title" class="form-control" id="newtitle" placeholder="Your title" required>
            </div>

            <div class="form-group">
                <label for="newimage">Image</label>
                <input type="file" name="image" class="form-control-file" id="newimage" required multiple>
            </div>

            <div class="form-group">
                <label for="newtext">Text</label>
                <textarea name="text" class="form-control" id="newtext" rows="10" required></textarea>
            </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Add">
           
        </form>

    </div>
</main>







<?php include "./partials/footer.php"?>
