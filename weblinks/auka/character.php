<?php session_start();
if(isset($_GET['id'])){
    $_SESSION['id'] = $_GET['id'];
}
 ?>
<div class="character-set" style="height: 12em;width: 90%;margin-top:2em;margin-left:2em;margin-bottom:-14em;background: rgba(90,90,90,.4);border-radius:25px;">
            <img style="height:100%;width:auto;" class="character-set" src="<?php if($_SESSION['id'] === 'male'){?>../pixels/big/GenericMaleLarge.png<?php }else if($_SESSION['id'] === 'female'){?>../pixels/big/GenericFemaleLarge.png<?php }else{
    
header('Location: ../');} ?>">
            <img style="height:50%;width:auto;padding-bottom:2em;" class="character-set" src="../pixels/Weapons/stick.png">
        </div>