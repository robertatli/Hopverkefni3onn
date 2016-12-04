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
                    
                    
                    
                    <section id="000">You start running but the bear catches you quickly.<br><br><br><br><img src="../pixels/big/bear.png" style="width:200px;height: 200px;"><br> 
						<br><br><br>
                        <form action="death.php">
             			<strong><input type="submit" value="Next" class="button" /></strong>
         				</form>
					</section>
                        
                        
                    <section id="001">Hit! The strike seems to have no affect on the bear. Angered the bear turnes around and pushes you to the ground.<br><br><br><br><img src="../pixels/big/bear.png" style="width:200px;height: 200px;"><br> 
						<br><br><br>
                        <a href="#004" class="speech2">Lie still</a><br><br>
                        <a href="./death.php" class="speech2">attack the bear</a><br><br>
					</section>
                        
                        
                    <section id="002">Hit! The strike is successful but not effective. the bear shakes it off and runs angrily torwards you at immense speed.<br><img src="../pixels/big/bear.png" style="width:200px;height: 200px;"><br> 
						<br><br><br>

						<a href="death.php" class="speech2">Next</a>
					</section>
                        
                    <section id="003">You throw the fish to the bear. The bear goes to the fish and starts eating. You have a chance to escape or to attack it while it's distracted.<br><br><br><br><img src="../pixels/big/bear.png" style="width:200px;height: 200px;"><br> 
						<br><br><br>
                        <a href="./Chapter2.1[thetree].php" class="speech2">Run away</a><br><br>
                        <a class="speech2" href="<?php if($_SESSION['weapon'] === 'stick' || $_SESSION['weapon' === 'wood']){ ?>
                            #001
                        <?php }else{ ?>
                            #002
                        <?php } ?>
                        ">Attack it</a>
					</section>
                   
                    <section id="004">The bear's intrest in you fades and soon it walks away.<br><br><br><br><img src="../pixels/big/bear.png" style="width:200px;height: 200px;"><br> 
                        <br><br><br>
                        <a href="./Chapter2.1[thetree].php" class="speech2">stand up and run away</a><br><br>
                    </section>
                        

                    <section class="intro">You approach the bush carefully. Pushing away the leaves with your hand you see a large bear snacking on some berries. The bear notices you and turnes around. The bear feels threatened and stand up on two legs. It gives out a mighty roar.
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
                    
                    </div>
                    
                </div>


            </div>			
        </div>
    </body>
</html>