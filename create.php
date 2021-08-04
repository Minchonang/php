<?php
require('lib/print.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            <?php
                printTitle();
            ?>
        </title>
        <link rel="stylesheet" href="font.css">
    </head>

    <body>
        <h1 id="mainTitle"><a href="index.php">
            WEB
        </a></h1>
        <ol class="numberList">
            <?php
                printList();
            ?>
        </ol>
        
        <a href="create.php" class="createButton">Create</a>
        <form action="create_precess.php" method="POST">
            <p>
                <input type="text" name="title" placeholder="Type the title">
            </p>
            <div>
                <textarea name="description" placeholder="Type the description"></textarea>
            </div>
            <div class="submitButton">
                <input type="submit">
            </div>
        </form>
    <?php
    require('view/bottom.php');
    ?>

