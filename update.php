<?php 
require('lib/print.php')
?>
<?php 
require('view/top.php')
?>
        <a href="create.php">create</a>
        <?php
        print_update_delete_link();
        ?>
        <form action="update_process.php?id=<?=$_GET['id']?>" method="post">
            <p>
                <input type="hidden" name="old_title" value="<?=$_GET['id']?>" >
                <input type="text" name="title" placeholder="title" value="<?php print_title(); ?>">
            </p>
            <p>
                <textarea name="description" rows="5" cols="30">
                <?php print_desc(); ?>    
                </textarea>  
            </p>
            <input type="submit">
        </form>
<?php 
require('view/bottom.php')
?>