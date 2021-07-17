<?php
require_once ("db.php");
$memberId = 1;
$sql = "SELECT tbl_comment_game.*,tbl_like_game.like_unlike FROM tbl_comment_game LEFT JOIN tbl_like_game ON tbl_comment_game.comment_id = tbl_like_game.comment_id AND member_id = " . $memberId . " ORDER BY parent_comment_id asc, comment_id asc";

$result = mysqli_query($conn, $sql);
$record_set = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($record_set, $row);
}
mysqli_free_result($result);

mysqli_close($conn);
echo json_encode($record_set);
?>