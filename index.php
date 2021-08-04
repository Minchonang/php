<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
        <a href="create.php" class="createButton">Create</a>
        <?php if(isset($_GET['id'])) { ?>
        <a href="
            update.php?id=<?=$_GET['id'];?>
            " class="updateButton">Update
        </a>

        <form action="delete_process.php" method="POST">
            <input type="hidden" name='id' value="<?=$_GET['id']?>">
            <input class="deleteButton" type="submit" value="Delete">
        </form>
        <?php } ?>

        <h2 id="title">
            <?php
                printTitle();
            ?>
        </h2>

        <div id="description">
            <?php
            printDescription(); 
            ?>
        </div>
    <?php
    require('view/bottom.php');
    ?>