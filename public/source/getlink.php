<?php

	$id='J2QJ2P8zlH8';
	parse_str(file_get_contents('http://www.youtube.com/get_video_info?video_id='.$id),$video_data);
	$data=$video_data['url_encoded_fmt_stream_map'];
	$data=explode(',',$data);
	$data=$data[0];
	parse_str($data,$link);
	$url=$link['url'];

	return urldecode($url);

?>

