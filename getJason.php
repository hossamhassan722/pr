<?php
include 'process.php';
//Select data from database
 
 
$getData = "select * from users";
$qur = $connection->query($getData);
 
while($r = mysqli_fetch_assoc($qur)){
 
$msg[] = array("id" => $r['user_id'], "fn" => $r['first_name'], "ln" => $r['last_name'],"email" => $r['email'],"phone" => $r['phone'],"pass"=> $r['password'],"BIO"=> $r['user_bio'],"birth"=> $r['birthdate'],"profile"=> $r['profile_picture'],"cover"=> $r['cover_picture'],"regiterdate"=> $r['register_date'],"last_login date"=> $r['last_login_date'],"address"=> $r['address']);
}
$json = $msg;
 
//header('content-type: application/json');
echo json_encode($json);
 
?>