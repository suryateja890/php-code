<?php

$token = $_POST["token"];

$token_hash = hash("sha256",$token);

$mysqli = require __DIR__ . "/database.php";

$sql = "SELECT * FROM user_list WHERE reset_token_hash = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("s",$token_hash);

$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if($user === null){
    die("token not found");
}

if(strtotime($user["reset_token_expires_at"])<= time()){
    die("token has expired");
}

$hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);

$sql = "UPDATE user
        SET hashed_password = ?,
            reset_token_hash = NULL,
            reset_token_expires_at = NULL
        WHERE id = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("ss", $hashed_password, $user["id"]);

$stmt->execute();

echo "Password updated. You can now login.";