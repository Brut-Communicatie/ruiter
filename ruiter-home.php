<?php


//Template name: Vacaturepagina

get_header();?>

<section class="content">
    <div class="content__container">
        <div class="content__left">
            <div class="content__left--wrapper">

                <!-- Bovenste bar -->
                <div class="content__left--top">
                    <div class="content__left--item">
                        <img src="<?php echo get_template_directory_uri();?>/content/img/1.png" width="50px"/>
                        <div class="content__left--item-info">
                            <span>Dienstverband</span>
                            <p>Loondienst of ZZP</p>
                        </div>
                    </div>
                    <div class="content__left--item">
                        <img src="<?php echo get_template_directory_uri();?>/content/img/2.png" width="36px"/>
                        <div class="content__left--item-info">
                            <span>Regio</span>
                            <p>Utrecht/N-Z Holland</p>
                        </div>
                    </div>
                    <div class="content__left--item">
                        <img src="<?php echo get_template_directory_uri();?>/content/img/3.png" width="32px"/>
                        <div class="content__left--item-info">
                            <span>Team</span>
                            <p>Alleen/met je maat</p>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <div class="content__left--main">

                    <!-- Opsomming -->
                    <div class="content__left--summary">
                        <h4>Als Dakkapel Monteur bij Ruiter:</h4>
                        <h3>
                            Heb je een <strong>stoere baan op grote hoogte</strong></br>
                            Kom elke dag <strong>bij klanten thuis</strong></br>
                            Ervaar je <strong>veel afwisseling</strong> in je werkzaamheden</br>
                            Ben je met z'n tweeën een <strong>hecht team</strong></br>
                            Krijg je <strong>alle ruimte om te groeien</strong></br>
                            Kan je in <strong>loondienst of als ZZP'er</strong> aan de slag
                        </h3>
                    </div>

                    <!-- Onderkant content -->
                    <div class="content__left--bottom">
                        <section>
                            <p>Als grootste dakkapelspecialist in Nederland staan wij voor kwaliteit en betrouwbaarheid. Voor onze Dakkapel Monteurs geldt dat ook. Wij zoeken daarom ervaren vakmannen. Vakmannen die onze klanten – die een gat in hun dak stiekem best spannend vinden – blij maken met een dakkapel waar zij vaak al maanden naar uitkijken. Vakmannen die samen met ons willen bouwen aan de toekomst. En dat op grote hoogtes. </p>
                        </section>
                        <section>
                            <h4>Laat jouw jongensdroom uitkomen</h4>
                            <p>Jij droomde toen je klein was toch ook van afwisselend werk dat ertoe doet? Bij Ruiter Dakkapellen komt deze droom uit! Als Dakkapel Monteur ben jij specialist op het gebied van dakkapellen plaatsen. Je weet precies wat je doet, werkt nauwkeurig en bent oplossingsgericht. Ook de communicatie naar klanten gaat jou soepel af. Je stelt klanten op hun gemak en vertelt hoe deze – voor hen spannende – dag gaat verlopen. De combinatie van een vakkundig geplaatste dakkapel en tevreden klanten maakt jou trots!</p>
                        </section>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="content__right">


            <div class="content__right--block">
                <div class="content__right--block--wrapper">
                    <a class="horizontalOverlay" href="#">Direct solliciteren</a>
                    <div class="content__right--block--intro">
                        <h4>Dakkapel monteur</h4>
                        <p>Loondienst of ZZP</p>
                    </div>
                    <div class="content__right--block--opsomming-wrapper">

               
                        <div class="content__right--block--opsomming">
                            <h5>Jij bent:</h5>
                            <p>Ervaren en steekt de handen graag uit de mouwen</p>
                            <p>Nauwkeurig en oplossingsgericht</p>
                            <p>Een teamplayer die zelfstandig ook goed zijn weg kan vinden</p>
                            <p>Klantvriendelijk, representatief en sociaal vaardig</p>
                        </div>

                        <div class="content__right--block--opsomming">
                            <h5>Wij bieden jou:</h5>
                            <p>Een functie in dienst bij Ruiter Dakkapellen of als ZZP’er</p>
                            <p>Marktconform salaris / goede tarieven</p>
                            <p>Goede secundaire voorwaarden</p>
                            <p>Gezellige vrijdagmiddagborrels (als het weer mag)</p>
  
                        </div>
                    </div>
                </div>
            </div>



            <div class="content__right--contact">
                <div class="content__right--contact-wrapper">
                    <div class="content__right--contact-img">
                        <img src="<?php echo get_template_directory_uri();?>/content/img/patricia.png" alt="Foto van Patricia" width="150px">
                    </div>
                    <div class="content__right--contact-info">
                        <h4>Vragen?</h4>
                        <p>Neem contact op met Patricia</p>
                        <div class="content__right--contact-socials">
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/content/img/whatsapp-brands.svg" alt="Whatsapp" width="20px"></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/content/img/phone-alt-solid.svg" alt="Tel" width="20px"></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/content/img/envelope-solid.svg" alt="Mail" width="20px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="cta__container">
        <div class="cta__wrapper">
            <div class="cta__form">
                <h4>Hebben we een match?</h4>
                <p>Solliciteer dan via onderstaand formulier of stuur een e-mail naar <a href="mailto:werkenbij@ruiterdakkapellen.nl">werkenbij@ruiterdakkapellen.nl</a></p>
            </div>
            <form method="POST">
                <div class="cta__form--content">
                        <div class="cta__form--row">
                            <div class="cta__form--item">
                                <input placeholder="Voornaam" type="text" name="name" id="name">
                            </div>
                            <div class="cta__form--item">
                                <input placeholder="Achternaam"  type="text" name="achternaam" id="achternaam">
                            </div>
                        </div>

                        <div class="cta__form--row">
                            <div class="cta__form--item">
                                <input type="email" placeholder="Email" name="email" id="email">
                            </div>
                            <div class="cta__form--item">
                                <input type="tel" placeholder="Telefoon" name="telephone" id="tel">
                            </div>
                        </div>

                        <div class="cta__form--row">
                            <div class="cta__form--item">
                                <input type="text" placeholder="Woonplaats"  name="woonplaats" id="woonplaats">
                            </div>
                        </div>

                        <div class="cta__form--row">
                            <div class="cta__form--item">
                                <textarea name="motivatie" placeholder="Korte movitatie" id="motivatie" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="cta__form--row">
                            <div class="cta__form--item">
                                
                            </div>
                            <div class="cta__form--item">
                                <input type="submit" value="Verzenden">
                            </div>
                        </div>
                </div>
            </form>
            <div class="cta__journey">
                <div class="cta__journey--line"></div>
                <div class="cta__journey--item">
                    <div class="cta__journey--content">
                        <h4>Je solliciteert</h4>
                        <div class="cta__journey--circle"></div>
                        <p>Hier kijken we nu al naar uit!</p>
                    </div>
                </div>
                <div class="cta__journey--item">
                    <div class="cta__journey--content">
                        <h4>Telefonisch contact</h4>
                        <div class="cta__journey--circle"></div>
                        <p>We bellen je voor een eerste kennismaking.</p>
                    </div>
                </div>
                <div class="cta__journey--item">
                    <div class="cta__journey--content">
                        <h4>In het ‘echt’</h4>
                        <div class="cta__journey--circle"></div>
                        <p>Tijd voor een echte kennismaking op ons bedrijf.</p>
                    </div>
                </div>
                <div class="cta__journey--item">
                    <div class="cta__journey--content">
                        <h4>Vervolggesprek</h4>
                        <div class="cta__journey--circle"></div>
                        <p>We bespreken het salaris en andere arbeidsvoorwaarden.</p>
                    </div>
                </div>
                <div class="cta__journey--item">
                    <div class="cta__journey--content">
                        <h4>Aan de slag</h4>
                        <div class="cta__journey--circle"></div>
                        <p>Jouw jongensdroom komt nu uit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>