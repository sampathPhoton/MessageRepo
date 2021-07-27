<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<script>

        function sendPersonalizedData() {
            var personalizedData = "{ \"status\": \"success\"}"
            PersonalizedDataInterface.sendPersonalizedData(personalizedData);
        }
    </script>
</head>
<body>
<div style="max-width:960px; margin: auto; text-align:center;">
	<div style="margin-top: 50px;">
		<button id="changeColor" type="button" onclick="this.style.backgroundColor='red'">Change color</button>
	</div>
	<div style="margin-top: 50px;">
		<input id="toastMessage" type="text" placeholder="Toast message"/>
	</div>
	<div style="margin-top: 50px;">
		<button id="showToast" type="button" onclick="sendPersonalizedData()">Send Data</button>
	</div>
</div>
</body>
</html>