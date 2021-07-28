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
		<button width="200px" height="70px" id="showToast" type="button" onclick="sendPersonalizedData()">Send Data</button>
	</div>
</div>
</body>
</html>