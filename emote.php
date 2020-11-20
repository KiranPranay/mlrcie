<textarea cols="180" rows="40">
<?php 
                        $dir= 'images/emotive';
                        $imgs= scandir($dir);
                        $count= count($imgs);

                        ?>
                <?php
                        for($i=2;$i<$count;$i++){
                            $imgsss=$imgs[$i];
                            ?>
                <div class="eventimg2">
                  <img src="images\emotive\<?php echo $imgsss ?>" />
                </div>
                <?php } ?>