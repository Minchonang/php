<?php
require_once('lib/print.php')
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

        <ol>
            <?php
                printList();
            ?>
        </ol>