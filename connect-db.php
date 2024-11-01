<?php
function connectdb() : mysqli {
    $db = mysqli_connect("localhost", "root", "", "bienesraices");

    if($db) {
        echo "";
    } else {
        echo "No conectado";
    }
    return $db;
}
?>