<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="cssZelda.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Legend of Zelda Site</title>
      
    </head>
    
    <body>
        
    <!-- ------- MENU DO HEADER MOBILE ------- -->
        <header id="navbar">
            
            <a href="header.php"> <h1 class="logo"> Legend of Zelda Site</h1></a>
            
            <button id="btn-menu"><i class="fa fa-bars fa-lg"></i></button>
            
            <nav class="menu">
                <a id="btn-close">x</a>
                
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="galeria.php">Galeria</a></li>
                    <li><a href="detonado.php">Guia do jogo</a></li>
                    <li><a href="download.php">Download</a></li>
                </ul>
                
                <script type="text/javascript">
                    
                    document.getElementById("btn-menu").onclick = function() {
                        var x = document.querySelectorAll(".menu");
                        x[0].style.display = "block";
                    }
                    
                    document.getElementById("btn-close").onclick = function() {
                        var x = document.querySelectorAll(".menu");
                        x[0].style.display = "none";
                    }
                    
                    window.onscroll = function(){
                        var top = window.pageYOffset || document.documentElement.scrollTop;
                        
                        if (top > 50) {
                            document.getElementById("navbar").style.opacity = "0.8";
                        }
                        else {
                            document.getElementById("navbar").style.opacity = "1";
                        }
                    }
                
                </script> 
                
            </nav>
            
        </header>
        
        <div>
            <img id="background-image" src="imgs/Zelda-Triforce-Symbol-2.png" style="z-index: -1">
        </div>