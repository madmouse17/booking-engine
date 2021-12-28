function initializeMap() {
	var secheltLoc = new google.maps.LatLng(53.479324, -2.248485);

	var myMapOptions = {
		 zoom: 14
		,center: secheltLoc
		,mapTypeId: google.maps.MapTypeId.ROADMAP
		,disableDefaultUI: true
	};
	var theMap = new google.maps.Map(document.getElementById("map_canvas"), myMapOptions);


	var marker = new google.maps.Marker({
		map: theMap,
		draggable: true,
		position: new google.maps.LatLng(53.463396, -2.268964),
		visible: true
	});

	var boxText = document.createElement("div");
	boxText.style.cssText = "margin-top: 8px; background-color:#85c616; color:#ffffff; padding: 20px;";
	boxText.innerHTML = "<h3>Traveline House</h3>Trafford Wharf Road, Manchester M17 1AB,<br>United Kingdom<br>+44 161 835 3500";

	var myOptions = {
		 content: boxText
		,disableAutoPan: false
		,maxWidth: 0
		// ,pixelOffset: new google.maps.Size(-20, -70)
		,pixelOffset: new google.maps.Size(-26, -860)
		,zIndex: null
		,boxStyle: { 
		  // background: "url('tipbox.gif') no-repeat"
		  opacity: 1
		  ,width: "290px"
		 }
		,closeBoxMargin: "10px 2px 2px 2px"
		,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
		,infoBoxClearance: new google.maps.Size(1, 1)
		,isHidden: false
		,pane: "floatPane"
		,enableEventPropagation: false
	};

	google.maps.event.addListener(marker, "click", function (e) {
		ib.open(theMap, this);
	});

	var ib = new InfoBox(myOptions);

	ib.open(theMap, marker);
}


google.maps.event.addDomListener(window, 'load', initialize);	