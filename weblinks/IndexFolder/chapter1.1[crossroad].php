<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/stilsida.css">
	<link rel="stylesheet" href="../css/normalize.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
	<div class="scroll">
        <?php include("../auka/character.php"); ?>
		<div class="wrapper2">
			<div class="textmanager">
			<header>
				<h3>Chapter 1.1</h3>
				<span class="h4">The four roads</span>
			</header>
			You are on a four way crossroad. The first road leads to where the cave is. The second, to the tree. Third to the Town and the fourth to the Inn.
			<br><br><br><br><br><br>
                <div class="Gender">
				<a href="./chapter1.2[cave].php">
					<img src="../pixels/big/Cave.png" style="width:200px;height: 200px;" onmouseover="style='width:200px;height: 200px;filter: gray;filter: grayscale(1);webkit-filter: grayscale(1);'" onmouseout="style='width:200px;height: 200px;filter: none;'">
				</a>
				<a href="./chapter1.2[tre].php">
					<img src="../pixels/big/Tree.png" style="width:200px;height: 200px;" onmouseover="style='width:200px;height: 200px;filter: gray;filter: grayscale(1);webkit-filter: grayscale(1);'" onmouseout="style='width:200px;height: 200px;filter: none;'">
				</a>
				<a href="./chapter1.2[tre].php">
					<img src="../pixels/town.png" style="width:200px;height: 200px;" onmouseover="style='width:200px;height: 200px;filter: gray;filter: grayscale(1);webkit-filter: grayscale(1);'" onmouseout="style='width:200px;height: 200px;filter: none;'">
				</a>
				<br><br>
				<form action="./chapter1.1[crossroad].php" onmouseover="style='filter: gray;filter: grayscale(1);webkit-filter: grayscale(1);'" onmouseout="style='filter: none;'">
    			<strong><input type="submit" value="The Inn" class="button" /></strong>
				</form>
				</div>
				
			</div>
			
			
		</div>			
	</div>
</body>
</html>