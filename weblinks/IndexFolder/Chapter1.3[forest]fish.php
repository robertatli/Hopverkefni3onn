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
                    
                    <section style="display:block;">
							
					<?php
					if(isset($_GET['sida'])){


					}
					else{
						if(($_SESSION['silfur']-1) >= 0) {
							$_SESSION['silfur'] = $_SESSION['silfur'] - 1;
							array_push($_SESSION['inventory'], 'Fish');}
					}
					 ?>
					You buy some fish
						<br><img src="../pixels/characters/willy.png" style="width:200px;height: 200px;"><br>
						<div class="speech" id="002">
						"Here you Go, will that be all?"
						</div><br><br><br>
						<a href="./chapter1.4[shortcut].php" class="speech2">Thank him and head to the small road</a><br><br><a href="./chapter1.2[cave].php" class="speech2">Go back to the crossroads</a><br><br>
					</section>
                    
                    
				</div>			
			</div>

			
			
		</div>			
	</div>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>