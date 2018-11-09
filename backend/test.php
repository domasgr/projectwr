<?php
/**
 * Created by PhpStorm.
 * User: Domas
 * Date: 11/9/2018
 * Time: 10:15 AM
 */
<?php if(isset($_SESSION['id'])) {
    echo '<a href="/backend/edit.php?id='.$project_id.'" class="btn btn-primary">Edit</a>';

    echo '<form action="/backend/gallery.php?id='.$project_id.'&action=DELETE" method="POST">
                        <input class="btn btn-danger" type="submit" name="submitDelete" value="delete">
                    </form>';
}?>

?>

  <div class="side-info my-auto d-block">
                        <ul class="list-group mt-5">
                            <li class="list-group-item"><strong>Date </strong><span class="text-light bg-dark">2018/10/21</span></li>
                            <li class="list-group-item"><strong>Dapibus ac </strong> <span class="text-light bg-dark">facilisis in</span></li>
                            <li class="list-group-item"><strong>Morbi </strong> <span class="text-light bg-dark">leo risus</span></li>
                            <li class="list-group-item"><strong>Porta ac </strong> <span class="text-light bg-dark">consectetur ac</span></li>
                            <li class="list-group-item"><strong>Vestibulum </strong> <span class="text-light bg-dark">at eros</span></li>
                        </ul>
                    </div>
