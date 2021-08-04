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
        <?php } ?>

        <form action="update_process.php" method="POST">
            <input type="hidden" name="oldTitle" value="<?=$_GET['id']?>">
            <p>
                <input type="text" name="title" placeholder="Type the title" value="<?php printTitle();?>">
            </p>
            <div>
                <textarea name="description" placeholder="Type the description"><?php printDescription();?></textarea>
            </div>
            <input type="submit">
        </form>

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