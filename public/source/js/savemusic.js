$(document).ready(function(){

	var volume=$('.volume-bar');
	var tracker= $('.time-bar');
	var player;
	var url;

		//Getlink Youtube. 
		$.ajax({
			url:"http://localhost/MusicSave/public/db/db.php",
			type:"get",
			dataType:"text",
			success:function(result){
				url=result;
			},
			async: false //async to send value {url}
		});
		// 
		var id_video=/=(.*?)$/.exec(url);
		var data_string='id='+id_video[1];
		$.ajax({
			url:"http://localhost/MusicSave/public/db/getlink.php",
			type:"POST",
			data: data_string,
			dataType:"text",
			success:function(result){
				url=result;
			},
			async: false
		});
		console.log(url);
		var player = new Audio(url);
		player.addEventListener('timeupdate',function(){
			var curtime = player.currentTime;
			console.log('thanh cong');
			console.log(curtime);
			tracker.slider('value', curtime);
			console.log(curtime);
			if(player.currentTime===player.duration)
			{
				console.log(player.currentTime);
				console.log(player.duration);
				$('.control-play').css('display','block');
				$('.control-pause').css('display','none');
				tracker.slider('value',0);
			}
		});



		function playMusic()
		{
			player.play();
			$time_start=Math.round(player.duration/ 60);
			$time_end=Math.round(player.duration % 60);
			if(Math.round(Math.round(player.duration % 60)/10)===0)
			{
				$time_end='0'+$time_end;
			}
			$('.end').text($time_start+':'+$time_end);
			tracker.slider("option", "max", player.duration);
			$('.control-play').css('display','none');
			$('.control-pause').css('display','block');
		}
		function pauseMusic()
		{
			player.pause();
			$('.control-play').css('display','block');
			$('.control-pause').css('display','none');
		}

		$('.control-play').click(function (e) {
			console.log('click');
			playMusic();
		});

		$('.control-pause').click(function (e) {
			console.log('click');
			pauseMusic();
		});

		player.volume=0.8;

		volume.slider({
			range:'min',
			min:1,
			max:100,
			value:80,
			start: function(event,ui) {},
			slide: function(event, ui) {
				player.volume=ui.value/100;
			},
			stop: function(event,ui) {}
		})

		tracker.slider({
			range: "min",
			min:0,
			max:10,
			start: function(event,ui) {},
			slide: function(event, ui) {
				player.currentTime=ui.value;
			},
			stop: function(event,ui) {}
		});	

		// This function getlink audio/mp4
		
	});