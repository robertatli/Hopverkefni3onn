<!DOCTYPE html>
<head>
	<title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/stilsida.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="scroll">
	<?php include("../auka/character.php"); ?>
		<div class="wrapper2">
			<div class="textmanager">
			<header>
				<h3>Chapter 1.3</h3>
				<span class="h4">The Fisherman</span>
			</header>
				<div class="Book">
					<br>
				
				
				 
					<section id="000"> You approach him and ask him for his name.<br><img src="../pixels/characters/willy.png" style="width:200px;height: 200px;"><br> 
						<div class="speech">
						"Hello my name's Willy!, What can I do for you?"
						</div><br><br><br>
						<a href="#001" class="speech2">Ask him about the cave</a><br><br><a href="./chapter1.2[cave].php" class="speech2">Go back to the crossroads</a><br><br>
					</section>



					<section id="001">
					<br><img src="../pixels/characters/willy.png" style="width:200px;height: 200px;"><br>
						<div class="speech">
						"Why yes! There is a cave in a large hill close to here. That might be the one you are looking for."
						</div><br><br><br>
						<a href="#002" class="speech2">Ask him if he knows a quick way to the cave</a><br><br><a href="./chapter1.2[cave].php" class="speech2">Go back to the crossroads</a><br><br>
					</section>



					<section id="002">
					<br><img src="../pixels/characters/willy.png" style="width:200px;height: 200px;"><br>
						<div class="speech" id="002">
						"Yes! there is a quick way to get to the cave, You just have to go throught these here woods." He points out a small road through some trees.
						</div><br><br><br>
						<a href="./chapter1.4[shortcut].php" class="speech2">Thank him and head to the small road</a><br><br><a href="./chapter1.2[cave].php" class="speech2">Thank him and go back to the crossroads</a><br><br>
						<a href="#003" class="speech2">Ask him if he has any fish.</a>
					</section>



					<section id="003">
					<br><img src="../pixels/characters/willy.png" style="width:200px;height: 200px;"><br>
						<div class="speech" id="002">
						"Yes! I have plenty of fish. Would you like to buy some?"
						</div><br><br><br>
						<a href="Chapter1.3[forest]fish.php?side=sida4" class="speech2">Buy some fish</a><br><br><a href="#005" class="speech2">Dont buy fish</a><br><br>
					</section>



					
					<section id="006">
						You buy some fish
						<br><img src="../pixels/characters/willy.png" style="width:200px;height: 200px;"><br>
						<div class="speech" id="002">
						"Here you Go, will that be all?"
						</div><br><br><br>
						<a href="./chapter1.4[shortcut].php" class="speech2">Thank him and head to the small road</a><br><br><a href="./chapter1.2[cave].php" class="speech2">Go back to the crossroads</a><br><br>
					

					</section>
					<section id="007">
						Your backpack is full.
						<br><img src="../pixels/characters/willy.png" style="width:200px;height: 200px;"><br>
						<div class="speech" id="002">
						"You cant carry any more"
						</div><br><br><br>
						<a href="./chapter1.4[shortcut].php" class="speech2">Thank him and head to the small road</a><br><br><a href="./chapter1.2[cave].php" class="speech2">Go back to the crossroads</a><br><br>
					

					</section>



					<section id="005">You dont buy fish
					<br><img src="../pixels/characters/willy.png" style="width:200px;height: 200px;"><br>
						<div class="speech" id="002">
						"Good luck on your journey!"
						</div><br><br><br>
						<a href="./chapter1.4[shortcut].php" class="speech2">Thank him and head to the small road</a><br><br><a href="./chapter1.2[cave].php" class="speech2">Go back to the crossroads</a><br><br>
					</section>



					<section class="intro">By the lake you see a man fishing.
					<br><br><br><br><br><br>
						<a href="#000" class="speech2">Talk to him</a><br><br><a href="./chapter1.2[cave].php" class="speech2">Go back to the crossroads</a>
					</section>
				</div>			
			</div>

			
			
		</div>			
	</div>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>