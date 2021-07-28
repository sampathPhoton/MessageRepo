<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<script>

        function sendCustomizedData() {
            var customData = '{ "type": "value", "value": {"url": "https:\/\/dsg-responsive-v2.mycustomizer.com","postMessage": {"designId": "1611087","imageURLs": ["https:\/\/dsg-responsive-v2.mycustomizer.com\/design\/1611087\/preview-200x200.png", "https:\/\/dsg-responsive-v2.mycustomizer.com\/design\/1611087\/front-400x400.png"],"data": {"Hand": "Left Hand","Shaft Material": "Steel ($125.00 ea.)",'+
            '"Set Make Up": "4-PW, SW","Shaft Manufacturer": "PING","Shaft": "1 STOCK AWT 2.0","Flex": "Regular","Length": "Standard","Lie": "Neutral (Black)","Custom Loft": "STANDARD","Grip Brand": "Golf Pride","Grip": "1 STOCK- Arccos Golf Pride Lite 360 Tour Velvet White","Grip Build": "Standard","Grip Installation": "Installed - Standard"},'+
            '"vendor": {"Hand": "Left Hand","Shaft Material": "Steel ($125.00 ea.)","Set Make Up": "4-PW, SW","Shaft Manufacturer": "PING",'+
            '"Shaft Model": "1 STOCK AWT 2.0","Shaft Flex": "Regular","Custom Length": "Standard","Lie Angle": "Neutral (Black)","Custom Loft": "STANDARD","Grip Brand": "Golf Pride","Grip Model": "1 STOCK- Arccos Golf Pride Lite 360 Tour Velvet White","Grip Build": "Standard",'+
            '"Grip Installation": "Installed - Standard","Gender": "Mens","Includes": "8","Tipping": "Standard"},'+
            '"sku": {"Shaft": "steel","Includes": "8"},"totalPrice": "1000.00"}},"actions": {"Postmessage": []}}'
            var userAgent = navigator.userAgent || navigator.vendor || window.opera;

            if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
                window.webkit.messageHandlers.jsMessageHandler.postMessage(customData);
            } else {
                CustomizedDataInterface.sendCustomizedData(customData);
            }
        }
        function editInformation(customData) {
            document.getElementById("editInformation").innerHTML = JSON.stringify(customData)
        }
    </script>
</head>
<body>
<div style="max-width:960px; margin: auto; text-align:center;">

	<div style="margin-top: 50px;">
		<button width="200px" height="70px" id="showToast" type="button" onclick="sendCustomizedData()">Send Data</button>
	</div>
	<div id="editInformation"></div>
</div>
</body>
</html>