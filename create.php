<?php 
require('lib/print.php')
?>
<?php 
require('view/top.php')
?>
        <a href="create.php">create</a>
        <form action="create_process.php" method="post">
            <p>
                <input type="text" name="title" placeholder="title">
            </p>
            <p>
                <textarea name="description" placeholder="description" rows="5" cols="30">
                </textarea>
            </p>
            <input type="submit">
        </form>
        <!--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->
<?php 
require('view/bottom.php')
?>