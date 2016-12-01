<?php session_start();
if(isset($_GET['id'])){
    $_SESSION['id'] = $_GET['id'];
}
 ?>
<style>
    body{
        overflow: hidden;
    }
    .character-set{
        position:fixed;
        bottom:14em;
        left: 25%;
        z-index:4;
        height:6em;
        width: 960px;
        margin-top:2em;
        margin-left:2em;
        margin-bottom:-14em;
        background: rgba(90,90,90,1);
        border-radius:25px;
        border: 10px solid transparent;
        -webkit-border-image: url(http://i36.tinypic.com/4tkqhi.jpg) 20% round;
        -o-border-image: url(http://i36.tinypic.com/4tkqhi.jpg) 20% round;
        border-image: url(http://i36.tinypic.com/4tkqhi.jpg) 20% round;
    }
</style>
<div class="character-set" style="">
            <img style="height:100%;width:auto;" src="<?php if($_SESSION['id'] === 'male'){?>../pixels/big/GenericMaleLarge.png<?php }else if($_SESSION['id'] === 'female'){?>../pixels/big/GenericFemaleLarge.png<?php }else{
    
header('Location: ../');} ?>">
            <img style="height:50%;width:auto;padding-bottom:2em;" src="../pixels/Weapons/stick.png">
        </div>