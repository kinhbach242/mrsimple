<?php
// require "connect";
// function change_password($ma_kh, $password_new){
//     $sql = "UPDATE user SET password=? WHERE idUser=?";
//     pdo_execute($sql, $password_new, $idUser);

// }
// function khach_hang_select_by_id($ma_kh){
//     $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
//     return pdo_query_one($sql, $ma_kh);

// }
// function Update($conn){
//     $sql = "UPDATE user SET password = :passwordcf,             
//             WHERE idUser = :idUser";
// $stmt =$conn->prepare($sql);                                  
// $stmt->bindParam(':passwordcf', $_POST['passwordcf'], PDO::PARAM_STR);
// $stmt->bindParam(':idUser', $_POST['idUser'], PDO::PARAM_INT);
// $stmt->execute(); 

// }
// function Change_pass($conn,$new_password) {
//     $sql_change_pass = "UPDATE user SET password = '$new_password' WHERE idUser = $idUser";
//     // Thực hiện truy vấn
//     $conn->query($sql_change_pass);
// }
