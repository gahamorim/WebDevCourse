<?php include("header.php")?>  
        
        
        <br /><h1 id="title">In-game gallery</h1><br />
        
        
<!---------------------------- HTML SLIDESHOW -----------------------------------> 
       <center>
           
        <div class="slideshow-container">
            
            <div class="mySlides fade">
                
                <div class="numbertext">1 / 7</div>
                <img src="imgs/1-templeofTime.png">
                <div class="text">Templo do Tempo</div>
                
            </div>

            <div class="mySlides fade">
                
                <div class="numbertext">2 / 7</div>
                <img src="imgs/2-templeOfSages.png">
                <div class="text">Câmara dos Sábios</div>
                
            </div>

            <div class="mySlides fade">
                
                <div class="numbertext">3 / 7</div>
                <img src="imgs/3-forestTemple.png">
                <div class="text">Templo da Floresta</div>
                
            </div>
            
            <div class="mySlides fade">
                
                <div class="numbertext">4 / 7</div>
                <img src="imgs/4-fireTemple.png">
                <div class="text">Templo do Fogo</div>
                
            </div>
            
            <div class="mySlides fade">
                
                <div class="numbertext">5 / 7</div>
                <img src="imgs/5-waterTemple.png">
                <div class="text">Templo da Água</div>
                
            </div>
            
            <div class="mySlides fade">
                
                <div class="numbertext">6 / 7</div>
                <img src="imgs/6-spiritTemple.png">
                <div class="text">Templo dos Espíritos</div>
                
            </div>
            
            <div class="mySlides fade">
                
                <div class="numbertext">7 / 7</div>
                <img src="imgs/7-shadowTemple.png">
                <div class="text">Templo das Sombras</div>
                
            </div>

              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
           
    </center> 
<!---------------------------- JAVASCRIPT SLIDERSHOW ---------------------------->
        <script type="text/javascript">
            
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
              showSlides(slideIndex += n);
            }

            function currentSlide(n) {
              showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                
                if (n > slides.length) {
                    slideIndex = 1;
                } 
                
                if (n < 1) {
                    slideIndex = slides.length;
                }
              
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none"; 
                }
                
                slides[slideIndex-1].style.display = "block"; 

            }
            
        </script> 
        <br />

<?php include("footer.php")?>