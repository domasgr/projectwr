<html>
    <head>

    </head>


    <body>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="images[]" class="form-control-file mb-5">
            <input type="file" name="images[]" class="form-control-file mb-5">
<!--            <input type="file" name="images[]" class="form-control-file mb-5">-->
            <input type="submit" value="Create project">
        </form>

        <?php

        if(isset($_FILES['images'])){
            $file_array = reArrayFiles($_FILES[images]);

            for ($i=0; $i<count($file_array); zi++){
                if($file_array[$i][error]){
                    ?> <div class="alert alert-danger">
                    <?php echo "Error while uploading file";
                    ?></div> <?php
                }
            }


//            echo "<pre>";
//            print_r($file_array);
//            echo "</pre>";
        }





        function reArrayFiles($file_post){
            $file_ary = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);

                for($i=0; $i<$file_count; $i++){
                    foreach($file_keys as $key){
                        $file_ary[$i][$key] = $file_post[$key][$i];
                    }
                }
                return $file_ary;

        }

//        function pre_r($array){
//            echo '<pre>';
//            print_r($array);
//            echo '</pre>';
//        }



        ?>
    </body>
</html>

