		<script>
				var error = 'true';
			navigator.geolocation.getCurrentPosition(function(position){
				user_lat = position.coords.latitude;
				user_lng = position.coords.longitude;

				console.log(user_lat+","+user_lng);
				//console.login�bchrome��F12�~���ݨ�
				//document.location.href = "realtime_add.php?user_lat="+user_lat+"&user_lng="+user_lng+"";
				document.location.href = "geo.php?user_lat="+user_lat+"&user_lng="+user_lng+"";
				
			}, function(){
				//alert("please open gps , try again later")
				document.location.href = "realtime_add.php?error="+error+"";
			},{ enableHighAccuracy: false,timeout:10000 })

		</script>
