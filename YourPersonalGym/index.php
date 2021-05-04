<?php 
    include_once 'header.php';
?>

        <section class="slider">
            <section class="slider-button-container">
                <div class="left-slider-button slider-button"><i class="icon-left-open"></i></div>
                <div class="right-slider-button slider-button"><i class="icon-right-open"></i></div>
            </section>
        </section>

        <section class="main-content">
            <h1 id="link1">O NAS</h1>
            <p class="about-us">
            </p>
            <article class="container">
                <section class="about-left">
                    <h2 id="about-h">Zweryfikowane sale</h2>
                    <p id="about-p">Każda sala z naszej oferty wyposażona jest w klimatyzację i ogrzewanie w każdym pomieszczeniu, w tym szatni, toaletach czy salach treningowych. Sprawia to, że nasza usługa idealnie sprawdza się w gorące i zimne dni!</p>
                </section>
                <section class=" about-right">
                    <div class="about-icon icon1">
                        <i class="icon-ok"></i>
                    </div>
                    <div class="about-icon icon2">
                        <i class="icon-emo-thumbsup"></i>
                    </div>
                    <div class="about-icon icon3">
                        <i class="icon-lock-3"></i>
                    </div>
                    <div class="about-icon icon4">
                        <i class="icon-users"></i>
                    </div>
                </section>
            </article>

            
            <h1 id="link2">Zasady użytkowania</h1>
            <hr>
            <p class="rules-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales pellentesque urna, eu ullamcorper diam rhoncus eu. Fusce imperdiet laoreet suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean cursus orci nisi, ut aliquam ante varius eu. Nunc dui nisl, tincidunt vel commodo in, posuere at turpis. Proin vestibulum nisl nisl, vitae consectetur orci dapibus non. Aliquam et euismod nisi, non maximus mi. Integer vel orci bibendum, lacinia arcu id, accumsan mauris. Nam dictum velit sed neque feugiat, at blandit metus semper. Maecenas luctus neque sit amet lobortis commodo. Mauris tempus tortor sit amet pellentesque aliquet. Nullam a felis eget diam vestibulum auctor eget non ipsum. Nullam sit amet finibus turpis. Nunc enim velit, ullamcorper sed molestie eu, porttitor ut purus.</p>
            <hr>
            
            <br><br>
            <h1 id="link3">Galeria</h1>
            <section class="gallery-grid">
                <div class="photo" id="photoOne"></div>
                <div class="photo" id="photoTwo"></div>
                <div class="photo" id="photoThree"></div>
                <div class="photo" id="photoFour"></div>
                <div class="photo" id="photoFive"></div>
                <div class="photo" id="photoSix"></div>
            </section>

            <h1 id="link4">Rezerwacja</h1>
            <p>Rezerwacja możliwa jest dopiero po rejestracji!</p>
            
            <h1 id="link5">Kontakt</h1>
            <section class="container-contact">
                
                <form method="get" action="mailto:bukajxd11@gmail.com" name="contact" enctype="application/x-www-form-urlencoded">
                    
                    <div class="inputy">
                        <input type="text" placeholder="Adres e-mail" name="email">
                        <input type="text" placeholder="Numer telefonu (opcjonalny)" name="phone">
                    </div>
            
                    <textarea placeholder="Treść wiadomości..."></textarea>
            
                    <button>Wyślij</button>
                
                </form>
            
            </section>
        </section>

<?php 
    include_once 'footer.php';
?>