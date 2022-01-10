// Script run every 60 sec to check JSON file

function checkMidroll(player, url) {
	var client = new XMLHttpRequest();
	client.onreadystatechange = function() {
		// console.log('state:', this.readyState, this.status);
		if (this.readyState == 4 && this.status == 200) {
			const data = JSON.parse(this.responseText);
			// console.log('responseText:', data.status, data.video_link, data);
			if (data.status == "on") {
				// Play Dynamic Midroll
				player.playAd('./ads/midroll.php?media=' + data.video_link);
			} else if (data.status == "off") {
				player.skipAd();
			}
		}
	}
	client.open('GET', url);
	client.send();
}

function initMidroll(player) {
	var isChrome = player.getEnvironment().Browser.chrome;
	var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
	// console.log('isChrome:', isChrome, ', isOpera:', isOpera);

	player.on('adBreakStart', function(evt){
		if (isChrome && !isOpera && player.getMute()) {
			player.setMute(false);
		}
	});

	player.on('firstFrame', function(evt){
		var container = player.getContainer();
		container.classList.add("midroll");

		if (isChrome && !isOpera && player.getMute()) {
			player.setMute(false);
		}

		//setInterval(checkMidroll, 60000, player, './proxy.php');		//location.protocol + "//" + location.host + '/proxy.php'
	});
}