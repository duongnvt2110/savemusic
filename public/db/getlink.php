<?php

	$id=$_POST['id'];
	parse_str(file_get_contents('http://www.youtube.com/get_video_info?video_id='.$id),$video_data);
	$data=$video_data['url_encoded_fmt_stream_map'];
	$data=explode(',',$data);
	$data=$data[0];
	parse_str($data,$link);
	$url=$link['url'];

	echo urldecode($url);

?>

