<?php
include("../config/connect.php");
session_start();
$sid = $_SESSION['id'];
$c_id = htmlentities($_POST['cid'], ENT_QUOTES);
$p_id = htmlentities($_POST['pid'], ENT_QUOTES);
$delete_comm_sql = "DELETE FROM Comments WHERE c_id= :c_id";
$delete_comm = $conn->prepare($delete_comm_sql);
$delete_comm->bindParam(':c_id',$c_id,PDO::PARAM_INT);
$delete_comm->execute();
?>