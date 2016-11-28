<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/stilsida.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <script>
            function CloseMe() 
            {
                window.close();
            }
            window.onload = function() {
                document.getElementById("Save").onclick = function fun() {
                CloseMe();
                //validation code to see State field is mandatory.  
                }
            }
        </script>
        <style>
            img{
                width: 40%;
                height: auto;
            }
        </style>
    </head>

    <body>
        <div class="scroll">
            <div class="wrapper2">
                <div class="textmanager">
                <header>
                    <h3>Death</h3>
                    <span class="h4">Sorry hero, but your story ends here</span>
                </header><br><br>Do you wish to start again or quit?<br><br><br>
				<div class="Gender">
				<a href="../index.php">
					<img src="../pixels/Reset.png" onmouseover="style='filter: gray;filter: grayscale(1);webkit-filter: grayscale(1);'" onmouseout="style='filter: none;'">
				</a>
                    <a onclick="CloseMe()"  id="Save">
					<img src="../pixels/Skull.png" onmouseover="style='filter: invert(20%);'" onmouseout="style='filter: none;'">
				</a>
			</div>
                </div>


            </div>			
        </div>
    </body>
</html>