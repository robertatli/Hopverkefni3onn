<?php session_start();
if(isset($_GET['id'])){
    $_SESSION['id'] = $_GET['id'];
    $_SESSION['weapon'] = 'stick';
    $_SESSION['chest'] = 'none';
    $_SESSION['legs'] = 'none';
    $_SESSION{'boots'} = 'none';
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
        height:960px;
        width: 320px;
        margin-top:2em;
        margin-left:2em;
        margin-bottom:-14em;
        background: rgba(90,90,90,1);
        border-radius:25px;
        border: 10px solid transparent;
        text-align: center;
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
        width: 150px;
        height: 150px;
        margin: 2px;
        margin-left: 5px;
        background: rgba(120,120,120,1);
        border-radius: 25px;
        float: left;
    }
    .inventoryslot #1{
        content: "Joe's Task:";
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
    <div class="armorset">  
    <img style="height:140px;width:140px;padding-bottom:0;" src="
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
        <img class="chest" style="height:140px;width:140px;" src="
        <?php if(isset($_SESSION['chest'])){
            if($_SESSION['chest'] === ''){ ?>
                ../pixels/Armor/.png
            <?php }else{ ?>
                ../pixels/Armor/x.png
            <?php } ?>
        <?php } ?>">
        <img class="legs" style="height:140px;width:140px;" src="
        <?php if(isset($_SESSION['legs'])){
            if($_SESSION['legs'] === ''){ ?>
                ../pixels/Armor/.png
            <?php }else{ ?>
                ../pixels/Armor/x.png
            <?php } ?>
        <?php } ?>">
        <img class="boots" style="height:140px;width:140px;" src="
        <?php if(isset($_SESSION['boots'])){
            if($_SESSION['boots'] === ''){ ?>
                ../pixels/Armor/.png
            <?php }else{ ?>
                ../pixels/Armor/x.png
            <?php } ?>
        <?php } ?>">
    </div>
    <div class="inventory">
        <div class="inventoryslot" id="1"></div>
        <div class="inventoryslot" id="2"></div>
        <div class="inventoryslot" id="3"></div>
        <div class="inventoryslot" id="4"></div>
        <div class="inventoryslot" id="5"></div>
        <div class="inventoryslot" id="6"></div>
    </div>
<?php } ?>
</div>