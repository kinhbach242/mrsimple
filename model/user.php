<?php
function khach_hang_select_by_id($username){
    $sql = "SELECT * FROM user WHERE username=?";
    return pdo_query_one($sql, $username);

}