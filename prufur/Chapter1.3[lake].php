<!DOCTYPE html>
<head>
	<title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/stilsida.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body onload="onload()">
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
				<div id="content">
				<div id="location"></div>
				<div id="text"></div>
				</div>
			</div>

			
			
		</div>			
	</div>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script language="javascript">

	 	var showText = function (target, message, index, interval) {    
			  	if (index < message.length) { 
			    	$(target).append(message[index++]); 
			    		setTimeout(function () { showText(target, message, index, interval); }, interval); 
			  		} 
			}
			    

			$(function () { 
			 
			  showText("#msg", "Hello my name's Willy!, What can I do for you?", 0, 55);
			  document.getElementById('wait').style.display = "none";
			  

			  setTimeout(function(){
			  document.getElementById('wait').style.display = "inline-block";

			  
			  $("#option01").html("");
			}, 3000);
				  
			     
			 
			}); 




	 var debug = false;
//var start = 'jungle4';
var start = 'start';

var data = {
		'start': ['', '[cwait:Nevermind\[leave\]],<br><br> [cask:],<br><br> [cask2:look around].', '#112', '#000']
	};

var missing;
	
function format(text) {
	text = text.replace(/\n/g, '<br />').replace(/\[(.*?):(.*?)\]/g, '<a href="#" ' + (debug ? 'title="$1" ' : '') + 'onclick="return navigate(\'$1\');">$2</a>').replace(/\|DEAD$/, '<br /><br /><a href="#" class="dead" onclick="return navigate(start);">Click here to start over and try again!</a>').replace(/\|END$/, '<br /><br /><i>Unfortunately you\'ve reached one of the current ends of this story.</i><br /><br /><a href="#" class="end" onclick="return navigate(start);">Click here to start over and try again!</a>');
	return text;
}

function navigate(loc) {
	if (data[loc] === undefined || data[loc].length < 2) {
		if (debug || loc == 'missing')
			alert('Unknown location: ' + loc);
		else {
			missing = loc;
			navigate('missing');
		}
		return false;
	}
	var content = document.getElementById('content');
	var location = document.getElementById('location');
	var text = document.getElementById('text');

	content.style.opacity = 0;

	setTimeout(function() {
		document.title = 'Text Adventure [' + (location.innerHTML = data[loc][0]) + ']';
		text.innerHTML = format(data[loc][1]);

		if (missing !== undefined)
			location.innerHTML += missing;

		content.style.opacity = 1;
		

	}, 500);
	
	return false;
}

function onload() {
	document.getElementById('content').style.display = 'block';
	
	navigate(start);
}



	</script>
</body>
</html>