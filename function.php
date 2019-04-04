<?php
    function redirect($page) {
        header('Location: '.$page);
        die("Forbidden to visit this site.");
    }
?>