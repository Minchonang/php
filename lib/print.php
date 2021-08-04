<?php
    function printTitle() {
        if(isset($_GET['id'])) {
            echo htmlspecialchars($_GET['id']);
        } else {
            echo "Welcome";
        }
    }
    function printDescription() {
        if(isset($_GET['id'])) {
            $basename = basename($_GET['id']);
            echo htmlspecialchars(file_get_contents("data/".$basename));
        } else {
            echo "Hello PHP!";
        }
    }
    function printList() {
        $i = 0;
        $list = scandir('./data');
        while($i < count($list)) {
            $title = htmlspecialchars($list[$i]);
            if($list[$i] != '..'and $list[$i] != '.') {
                echo "<li><a class='numberList' href='index.php?id=$title'>$title</a></li>\n";
            }
            $i = $i + 1;
        }
    }
?>