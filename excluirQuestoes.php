<?php
$file = "provas/arquivo_".$_SESSION['id'].".php";
if (file_exists($file)) {
    unlink($file);
}
?>