<!DOCTYPE html>
<head>
	<title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/stilsida.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----<script src="../auka/back.js"></script>--->
</head>

<body>
	<div class="scroll">
		<div class="wrapper2">
			<div class="textmanager">
			<header>
				<h3>Chapter 1.3</h3>
				<span class="h4">The lake</span>
			</header>By the lake you see a man fishing. You approach him and ask him for his name.<br>
				<img src="../pixels/characters/willy.png" style="width:200px;height: 200px;"><br>
				<div class="speech">
				<span id="text_target"></span><div id="msg"></div>
				</div>
			<br><br><br><br>	
				<div class="speech2" id="wait" onclick="show()">
					<div id="option1"></div>
					<div id="option3"></div>
				</div><br><br><br>
				<div class="speech2" id="wait2" onclick="show()">
					<div id="option2"></div>
					<div id="option4"></div>
				</div>
			</div>

			
			
		</div>			
	</div>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script>

		    var showText = function (target, message, index, interval) {    
			  	if (index < message.length) { 
			    	$(target).append(message[index++]); 
			    		setTimeout(function () { showText(target, message, index, interval); }, interval); 
			  		} 
			}
			    

			$(function () { 
			 
			  showText("#msg", "Hello my name's Willy!, What can I do for you?", 0, 55);
			  document.getElementById('wait').style.display = "none";
			  document.getElementById('wait2').style.display = "none";
			  

			  setTimeout(function(){
			  document.getElementById('wait').style.display = "inline-block";
			  document.getElementById('wait2').style.display = "inline-block";

			  showText("#option1", "adsasd", 0, 55); 
			  showText("#option2", "asdsdad", 0, 55);  
			}, 3000);
				  
			     
			 
			});
			function show() {	
				document.getElementById('wait').style.display = "none";
				document.getElementById('wait2').style.display = "none";
				setTimeout(function(){
					document.getElementById('wait').style.display = "inline-block";
			  		document.getElementById('wait2').style.display = "inline-block";
					$("#option1").html("");$("#option2").html("");
					showText("#option3", " nope ", 0, 55); 
					$("#option3").html("");
			  		showText("#option4", " alright", 0, 55);
			  		$("#option4").html("");
				}, 300);
				

			}; 
	</script>
</body>
</html>