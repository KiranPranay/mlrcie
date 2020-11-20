<textarea cols="180" rows="40">
<?php 
                        $dir= 'images/envent';
                        $imgs= scandir($dir);
                        $count= count($imgs);

                        ?>
<?php
                        for($i=2;$i<$count;$i++){
                            $imgsss=$imgs[$i];
                            ?>
<div class="eventimg2">
    <img src="images\envent\<?php echo $imgsss ?>" />
</div>
<?php } ?>