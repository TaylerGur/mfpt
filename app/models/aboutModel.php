<?php
    $query = mysqli_query( global_data('db'), "SELECT * FROM about");
    $res = mysqli_fetch_all($query, MYSQLI_ASSOC);
    mysqli_free_result($query);
    return $res;
// echo(global_data('db'));
?>