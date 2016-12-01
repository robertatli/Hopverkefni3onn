<?php session_start();
if(isset($_GET['id'])){
    $_SESSION['id'] = $_GET['id'];
    $_SESSION['weapon'] = 'stick';
    $_SESSION['chest'] = 'none';
    $_SESSION['legs'] = 'none';
    $_SESSION{'boots'} = 'none';
    $inventory = array('','','','','','');
    $Silfur = 3;
    $Gull = 0;
}
if(isset($_SESSION['id'])){
    $_SESSION['weapon'] = 'stick';
    $_SESSION['chest'] = 'none';
    $_SESSION['legs'] = 'none';
    $_SESSION{'boots'} = 'none';
    $inventory = array('','','','','','');
    $Silfur = 3;
    $Gull = 0;
}
else{ ?>
<script>
</script>
<?php } ?>
<style>
    body{
        overflow: hidden;
    }
    .character-set{
        position:fixed;
        bottom:14em;
        top: 0;
        right: 10%;
        z-index:4;
        height:80%;
        width: 320px;
        margin-top:5%;
        margin-left:2em;
        background: rgba(90,90,90,1);
        border-radius:25px;
        border: 10px solid transparent;
        -webkit-border-image: url(http://i36.tinypic.com/4tkqhi.jpg) 20% round;
        -o-border-image: url(http://i36.tinypic.com/4tkqhi.jpg) 20% round;
        border-image: url(http://i36.tinypic.com/4tkqhi.jpg) 20% round;
    }
    .armorset{
        width: 100%;
        height: 30%;
        border-top: 10px solid transparent;
        -webkit-border-image: url(http://i36.tinypic.com/4tkqhi.jpg) 20% round;
        -o-border-image: url(http://i36.tinypic.com/4tkqhi.jpg) 20% round;
        border-image: url(http://i36.tinypic.com/4tkqhi.jpg) 20% round;
     }
    .inventory{
        width: 100%;
        height: 30%;
        border-top: 10px solid transparent;
        -webkit-border-image: url(http://i36.tinypic.com/4tkqhi.jpg) 20% round;
        -o-border-image: url(http://i36.tinypic.com/4tkqhi.jpg) 20% round;
        border-image: url(http://i36.tinypic.com/4tkqhi.jpg) 20% round;
    }
    .inventoryslot{
        width: 46%;
        height: 46%;
        margin: 2%;
        margin-left: 2%;
        border-radius: 25px;
        float: left;
    }
    <?php for($i = 0; $i <= 5; $i++){ ?>
    #nr<?php echo $i + 1 ?>{
        background: url("../pixels/Numbers/<?php echo $i + 1 ?>.png") rgba(120,120,120,1) no-repeat;
        background-size: 30%;
    }
    <?php } ?>
    .weapon,
    .chest,
    .legs,
    .boots{
        height: 50%;
        width: 50%;
        float: left;
    }
    .chest{
        background: url('../pixels/Armor/Chest_Icon.png');
        background-size: 100%;
    }
    .legs{
        background: url('../pixels/Armor/Legs_Icon.png');
        background-size: 100%;
    }
    .boots{
        background: url('../pixels/Armor/Boots_Icon.png');
        background-size: 100%;
    }
    .inventory img{
        height: 80%;
        width: 80%;
        margin: 10%;
    }
    .coinS img,
    .coinG img{
        height: 100%;
        width: auto;
    }
    .coinS{
        font-family: 'Merchant-Copy-Normal';
        height: 8%;
        float: right;
        margin: 0;
        margin-top: 0%;
        font-size: 1em;
        padding-bottom: 6px;
        font-size: 3em;
    }
    .coinG{
        height: 8%;
        float: right;
        margin: 0;
        margin-top: -27%;
        padding-bottom: 6px;
        font-size: 3em;
    }
</style>
<div class="character-set">
    <?php if(isset($_SESSION['id']) === 'false'){ ?>
<script>
    window.location = "../";
</script>
    <?php }else{ ?>
    
    <img style="height:20%;width:auto;" src="
    <?php if($_SESSION['id'] === 'male'){ ?>../pixels/big/GenericMaleLarge.png<?php }
    else if($_SESSION['id'] === 'female'){ ?>../pixels/big/GenericFemaleLarge.png<?php
    } ?>">
    <p class="coinS"><?php echo $Silfur ?> x <img src="../pixels/Items/Silver_Coin.png"></p>
    <p class="coinG"><?php echo $Gull ?> x <img src="../pixels/Items/Gold_Coin.png"></p>
    <div class="armorset">  
    <img class="weapon" src="
        <?php if($_SESSION['weapon'] === 'stick'){ ?>
            ../pixels/Weapons/stick.png
        <?php }
        else if($_SESSION['weapon'] === 'wood'){ ?>
            ../pixels/Weapons/Wood.png
        <?php }
        else if($_SESSION['weapon'] === 'stone'){ ?>
            ../pixels/Weapons/Stone.png
        <?php }
        else if($_SESSION['weapon'] === 'iron'){ ?>
            ../pixels/Weapons/Iron.png
        <?php }
        else if($_SESSION['weapon'] === 'blood'){ ?>
            ../pixels/Weapons/Blood.png
        <?php }
        else if($_SESSION['weapon'] === 'pink'){ ?>
            ../pixels/Weapons/Pink.png
        <?php }
        else if($_SESSION['weapon'] === 'king'){ ?>
            ../pixels/Weapons/TheSword.png
        <?php } ?>">
        <img class="chest" src="
        <?php if(isset($_SESSION['chest'])){
            if($_SESSION['chest'] === ''){ ?>
                ../pixels/Armor/.png
            <?php }else{ ?>
                ../pixels/Armor/x.png
            <?php } ?>
        <?php } ?>">
        <img class="legs" src="
        <?php if(isset($_SESSION['legs'])){
            if($_SESSION['legs'] === ''){ ?>
                ../pixels/Armor/.png
            <?php }else{ ?>
                ../pixels/Armor/x.png
            <?php } ?>
        <?php } ?>">
        <img class="boots" src="
        <?php if(isset($_SESSION['boots'])){
            if($_SESSION['boots'] === ''){ ?>
                ../pixels/Armor/.png
            <?php }else{ ?>
                ../pixels/Armor/x.png
            <?php } ?>
        <?php } ?>">
    </div>
    <div class="inventory"><?php for($i = 0; $i <= 5; $i++){ 
        if($inventory[$i] === 'Silver_Coin'){
            $item = 'Silver_Coin';
        }else if($inventory[$i] === 'Gold_Coin'){
            $item = 'Gold_Coin';
        }else if($inventory[$i] === 'Fish'){
            $item = 'Fish';
        }else{
            $item = '';
        }
        
        ?>
        <div class="inventoryslot" id="nr<?php echo $i + 1 ?>">
            <?php if($item === ''){
            
        }else{?>
            <img src="../pixels/Items/<?php echo $item ?>.png">
            <?php } ?>
        </div>
        <?php } ?>
    </div>
<?php } ?>
</div>