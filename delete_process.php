<?php
    unlink('data/'.basename($_POST['id'])); // /data 폴더 내에서만 삭제범위 지정
    header('Location: index.php')
?>