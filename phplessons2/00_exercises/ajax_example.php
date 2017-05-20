<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<button onclick="getAricles()">Տուր 10 հոդված</button>
	<div id="articles"></div>

	<script type="text/javascript">
		var h = new XMLHttpRequest();
		var datastore = document.getElementById("articles");

		h.onreadystatechange=function()
		{
			if(h.readyState==4 && h.status==200)
			{

				var namesArray =  JSON.parse(h.responseText);
				//console.log(namesArray);
				
				for (var i = 0; i < namesArray.length; i++) {
							datastore.innerHTML+=namesArray[i].title+namesArray[i].date+"<br>";
						};

								
				
			}
		}

		function getAricles()
		{
			h.open("GET","ajax_data.php");
			h.send();
		}

	</script>
</body>
</html>