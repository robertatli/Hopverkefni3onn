<!DOCTYPE html>
<html>
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
                    <h3>Chapter 1.3</h3>
                    <span class="h4">The Bush</span>
                </header>
                    <div class="Book">
                    
                    <section class="intro">You walk closer to the bush but then a bear jumps out and attacks you
					<br><br><br><br><br><br>
						<a href="#000" class="speech2">Try to run away</a><br><br>
                        <a class="speech2" href="<?php if($_SESSION['weapon'] === 'stick' || $_SESSION['weapon' === 'wood']){ ?>
                            #001
                        <?php }else{ ?>
                            #002
                        <?php } ?>
                        ">Attack it</a>
                        <?php for($i = 0; $i < count($_SESSION['inventory']);$i++){
                            if($_SESSION['inventory'][$i] === 'Fish'){ ?>
                                <br><br>
                                <a href="#003" class="speech2">Hand your fish to the bear</a>
                            <?php break; }
                        } ?>
					</section>
                    
                    <section id="000">You start running but not after so long the bear catches you<br><img src="../pixels/big/bear.png" style="width:200px;height: 200px;"><br> 
						<br><br><br>
                        <form action="death.php">
     			<strong><input type="submit" value="Next" class="button" /></strong>
 				</form>
					</section>
                        
                        
                    <section id="001">You attack it, but your weapon breaks. The bear bites you<br><img src="../pixels/big/bear.png" style="width:200px;height: 200px;"><br> 
						<br><br><br>
                        <form action="death.php">
     			<strong><input type="submit" value="Next" class="button" /></strong>
 				</form>
					</section>
                        
                        
                    <section id="002">Hit<br><img src="../pixels/big/bear.png" style="width:200px;height: 200px;"><br> 
						<br><br><br>
						<a href="death.php" class="speech2">Next</a>
					</section>
                        
                    <section id="003">You hand out your fish, the bear stop for a sec and walk closer. The bear then licks the fish out of your hand and eats it.<br><img src="../pixels/big/bear.png" style="width:200px;height: 200px;"><br> 
						<br><br><br>
						<a href="death.php" class="speech2">Next</a>
					</section>
                    
                    </div>
                    
                </div>


            </div>			
        </div>
    </body>
</html>