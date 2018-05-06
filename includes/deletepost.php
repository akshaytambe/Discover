<?php
include("../config/connect.php");
$posts_id = htmlentities($_POST['pid'], ENT_QUOTES);
$delete_post_sql = "DELETE FROM Post WHERE post_id= :posts_id";
$delete_post = $conn->prepare($delete_post_sql);
$delete_post->bindParam(':posts_id',$posts_id,PDO::PARAM_INT);
$delete_post->execute();
// Delete notification 'like'
$notifyType = "like";
$sendNotification = $conn->prepare("DELETE FROM Notifications WHERE notifyType_id=:notifyType_id AND notifyType=:notifyType");
$sendNotification->bindParam(':notifyType_id',$posts_id,PDO::PARAM_INT);
$sendNotification->bindParam(':notifyType',$notifyType,PDO::PARAM_STR);
$sendNotification->execute();
// Delete notification 'comment'
$notifyType = "comment";
$sendNotification = $conn->prepare("DELETE FROM Notifications WHERE notifyType_id=:notifyType_id AND notifyType=:notifyType");
$sendNotification->bindParam(':notifyType_id',$posts_id,PDO::PARAM_INT);
$sendNotification->bindParam(':notifyType',$notifyType,PDO::PARAM_STR);
$sendNotification->execute();
// ==================================
?>