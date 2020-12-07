	<header class="header-principal" id="navbar">
		<div class="header-left">
			<a class="nav-black" href="#" id="city">Paris</a>
			<a class="nav-black" href="#" id="temperature">15°</a>
			<a class="nav-black" href="#" id="wind">17kts</a>
			
		</div>

		<div class="nav-mobile">
			<a href="index.php" class="header-middle">
				<svg width="90" height="35" viewBox="0 0 101 45" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M48 1H72.9279C84.6968 1 91.8323 6.11871 91.8323 18.0313C91.8323 29.944 84.6968 35.0627 72.9279 35.0627H63.383V45H48V1ZM71.5378 22.2194C74.4106 22.2194 76.2639 20.8234 76.2639 18.0313C76.2639 15.1462 74.4106 13.7502 71.5378 13.7502H63.383V22.2194H71.5378Z" fill="black"/>
					<path d="M27.0592 44.51H0V0.582153H28.0786C42.9982 0.582153 45.2223 8.30675 45.2223 12.8671C45.2223 17.7066 42.8129 20.0332 40.3109 21.6154C44.3883 24.0351 46.2416 27.2925 46.2416 31.6667C46.2416 37.5299 42.9056 44.51 27.0592 44.51ZM2.22405 42.2764H27.1519C38.3648 42.2764 44.0176 38.6467 44.0176 31.5736C44.0176 27.6648 42.3496 25.0589 38.3648 22.9183L37.8088 22.6391V20.4055L38.3648 20.1263C40.9595 18.6372 42.9982 17.0551 42.9982 12.774C42.9982 6.1662 37.8088 2.7227 28.0786 2.7227H2.22405V42.2764ZM26.5959 33.0627H15.0123V25.245H26.5959C29.654 25.245 31.044 27.1994 31.044 29.1539C31.044 30.4568 30.1173 33.0627 26.5959 33.0627ZM17.2364 30.8291H26.5959C28.7273 30.8291 28.8199 29.4331 28.8199 29.0608C28.8199 28.3162 28.4493 27.3856 26.5959 27.3856H17.2364V30.8291ZM26.3179 19.4748H15.0123V12.0294H26.4106C29.7466 12.0294 30.8587 13.9839 30.8587 15.7521C30.8587 17.5204 29.654 19.4748 26.3179 19.4748ZM17.2364 17.2412H26.4106C27.8933 17.2412 28.6346 16.7759 28.6346 15.7521C28.6346 15.3799 28.6346 14.2631 26.4106 14.2631H17.2364V17.2412Z" fill="black"/>
					<path d="M92 5.122C92 3.982 92.402 3.01 93.206 2.206C94.01 1.402 94.976 1 96.104 1C97.244 1 98.216 1.408 99.02 2.224C99.824 3.028 100.226 3.994 100.226 5.122C100.226 6.25 99.824 7.216 99.02 8.02C98.216 8.824 97.244 9.226 96.104 9.226C94.964 9.226 93.992 8.824 93.188 8.02C92.396 7.216 92 6.25 92 5.122ZM93.764 2.728C93.128 3.388 92.81 4.186 92.81 5.122C92.81 6.058 93.128 6.856 93.764 7.516C94.412 8.176 95.192 8.506 96.104 8.506C97.016 8.506 97.796 8.176 98.444 7.516C99.092 6.856 99.416 6.058 99.416 5.122C99.416 4.186 99.092 3.388 98.444 2.728C97.796 2.068 97.016 1.738 96.104 1.738C95.192 1.738 94.412 2.068 93.764 2.728ZM94.304 7.156V2.89H96.482C97.586 2.89 98.138 3.358 98.138 4.294C98.138 4.57 98.06 4.822 97.904 5.05C97.76 5.278 97.55 5.44 97.274 5.536L98.318 7.156H97.31L96.374 5.68H95.258V7.156H94.304ZM96.518 4.96C96.962 4.96 97.184 4.744 97.184 4.312C97.184 3.88 96.962 3.664 96.518 3.664H95.258V4.96H96.518Z" fill="black"/>
				</svg>
			</a>

			<div class="burger-icon">
				<span></span>
			</div>
		</div>

		<div class="header-right">
			<a class="nav-black" href="#">Approach</a>
			<a class="nav-black" href="#">Work</a>
			<a class="nav-black" href="mailto: hi@blancpetrole.com">Contact</a>
		</div>

	</header>

	<script src="//code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function() {
		var currentScrollPos = window.pageYOffset;
		  if (prevScrollpos > currentScrollPos) {
		    document.getElementById("navbar").style.top = "0";
		  } else {
		    document.getElementById("navbar").style.top = "-90px";
		  }
		  prevScrollpos = currentScrollPos;
		}


	$.ajax({
    dataType: "json",
    url: 'https://fcc-weather-api.glitch.me/api/current?lat=44.837789&lon=-0.57918',
    success: function (data) {
    	$('#city').html( data.name);
        $('#temperature').html( data.main['temp'] + '°');
        $('#wind').html( data.wind['speed'] + 'kts');
    }
	});

	</script>