<?php
	
	$con = mysqli_connect('localhost','root','','savemusic');
	$query='SELECT * FROM music';
	$result=mysqli_query($con,$query);
	$data=array();
	if($result)
	{
		 while ($row=mysqli_fetch_assoc($result)) {
                    $data[]= $row;
		}
	}
	echo $data[0]['link'];
?>