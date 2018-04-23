<?php
if (isSet($_POST['url'])) {
	print_r('123');
    $con = mysqli_connect('localhost','root','','savemusic');
    $stmt = mysqli_prepare($con, 'INSERT INTO music(link) VALUES (?)');
    mysqli_stmt_bind_param($stmt, 's', $_POST['url']);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>