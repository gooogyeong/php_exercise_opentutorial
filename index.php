<?php 
require_once('lib/print.php')
?>
<?php 
require('view/top.php')
?>
        <a href="create.php">create</a>
        <?php
        print_update_delete_link();
        ?>
        <h2>
            <?php 
print_title();
            ?>
        </h2>
        <?php
print_desc();
        //근데 보안상의 이유로 실제 앱에서는 file_get_content()를 사용하는 것은 권장되지 않음.
        ?>
        <!--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->
        </form>
<?php 
require('view/bottom.php')
?>