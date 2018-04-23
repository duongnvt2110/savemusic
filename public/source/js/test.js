$(document).ready(function(){

	var xhttp=new new XMLHttpRequest();
	xhttp.onreadystatechange()=function{
		if(this.readyState=== 4 && this.status===200)
		{
			console.log(http.responseText);
		}

	}
	http.open(GET,'https://www.youtube.com/get_video_info?html5=1&video_id=J2QJ2P8zlH8',true);
	http.send();
});