<!DOCTYPE html>
<head>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script type="../auka/jquery-3.1.1.min.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/stilsida.css">
	<link rel="stylesheet" href="../css/normalize.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
    var showText = function (target, message, index, interval) {    
  if (index < message.length) { 
    $(target).append(message[index++]); 
    setTimeout(function () { showText(target, message, index, interval); }, interval); 
  } 
	}
	    
	$(function () { 
	 
	  showText("#msg", "Hello my name's Willy!, What can I do for you?", 0, 55);    
	 
	}); 
	</script>
    <title></title>
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
			</div>			
				
			

			
			
		</div>			
	</div>
</body>
</html>