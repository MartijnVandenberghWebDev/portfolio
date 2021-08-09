<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js" defer></script>
    <script src="js/imageScrollers.js" defer></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>
    <script src="https://kit.fontawesome.com/a839a90515.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="/favicon.ico" />
    <title>Martijn Vandenbergh</title>
</head>

<body class="dark">
    <div class="mainMenuMobile">
        <div class="titleContainer underline">
            <a id="mainTitle">Martijn Vandenbergh</a>
        </div>

        <div class="mobileNavBar">
            <div class="lightswitchContainer">
                <button id="lightswitch" class="mobile">
                    <svg id="sun" style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M3.55,18.54L4.96,19.95L6.76,18.16L5.34,16.74M11,22.45C11.32,
                            22.45 13,22.45 13,22.45V19.5H11M12,5.5A6,6 0 0,0 6,11.5A6,6 0 0,
                            0 12,17.5A6,6 0 0,0 18,11.5C18,8.18 15.31,5.5 12,5.5M20,12.5H23V10.5H20M17.24,
                            18.16L19.04,19.95L20.45,18.54L18.66,16.74M20.45,4.46L19.04,3.05L17.24,4.84L18.66,
                            6.26M13,0.55H11V3.5H13M4,10.5H1V12.5H4M6.76,4.84L4.96,3.05L3.55,4.46L5.34,6.26L6.76,4.84Z" />
                    </svg>
                    <svg id="moon" class="invisible" style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M2 12A10 10 0 0 0 15 21.54A10 10 0 0 1 15 2.46A10 10 0 0 0 2 12Z" />
                    </svg>
                </button>
            </div>

            <div class="mobileMenuContainer">
                <ul class="menu" id="menu">
                    <li><a id="about">OVER MIJ</a></li>
                    <li><a id="portfolio">PORTFOLIO</a></li>
                    <li><a id="contact">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mainMenuHighEnd underline">
        <div class="menuContainer">
            <a id="mainTitle">Martijn Vandenbergh</a>
            <button id="lightswitch">
                <svg id="sun_pc" style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M3.55,18.54L4.96,19.95L6.76,18.16L5.34,16.74M11,22.45C11.32,
                        22.45 13,22.45 13,22.45V19.5H11M12,5.5A6,6 0 0,0 6,11.5A6,6 0 0,
                        0 12,17.5A6,6 0 0,0 18,11.5C18,8.18 15.31,5.5 12,5.5M20,12.5H23V10.5H20M17.24,
                        18.16L19.04,19.95L20.45,18.54L18.66,16.74M20.45,4.46L19.04,3.05L17.24,4.84L18.66,
                        6.26M13,0.55H11V3.5H13M4,10.5H1V12.5H4M6.76,4.84L4.96,3.05L3.55,4.46L5.34,6.26L6.76,4.84Z" />
                </svg>
                <svg id="moon_pc" class="invisible" style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M2 12A10 10 0 0 0 15 21.54A10 10 0 0 1 15 2.46A10 10 0 0 0 2 12Z" />
                </svg>
            </button>

            <ul class="menu" id="menu">
                <li><a id="about">OVER MIJ</a></li>
                <li><a id="portfolio">PORTFOLIO</a></li>
                <li><a id="contact">CONTACT</a></li>
            </ul>
        </div>
    </div>

    <div class="wrapper">

        <div class="mainAnimation">
            <lottie-player id="hobbies" src="anim/hobbies/hobbys_animation.json" background="transparent" speed="1" loop autoplay></lottie-player>
        </div>

        <div class="about">
            <h1>Over mij</h1>
            <div class="gray">
                <!--TODO: Selfie toevoegen, tekst nakijken-->
                <p>Hallo! Ik ben Martijn Vandenbergh, en ik ben op zoek naar een nieuwe, uitdagende job als
                    junior webdeveloper! Tijdens mijn opleiding PHP Webontwikkelaar heb ik een passie ontdekt voor
                    webontwikkeling, zowel in backend als in frontend. Mijn ideale job zou dus een combinatie van deze twee zijn.</p>
                <p>Van nature uit ben ik een enorm creatief persoon.
                    Mijn vrije tijd spendeer ik het liefst aan tekenen, schilderen, gamen(zowel boardgames als
                    computergames), hiken en fitness.
                    Sinds de Coronacrisis heb ik nog twee nieuwe hobby's ontdekt: meubels maken en schrijven. U zal
                    ondertussen al wel doorhebben dat ik graag bezig blijf.</p>
                <p>Dit is ook het geval in mijn werkomgeving. Ik ben niet iemand die met de pakken blijft zitten. Als ik
                    even zonder opdracht val, zal ik dus ook niet aarzelen om mijn collega's te assisteren bij hun werk.
                </p>
                <p>Ik ben een harde werker, kan zowel zelfstandig als in team functioneren, en ben enorm leergierig. Ik
                    leef volgens het motto "stilstaan is achteruitgaan", en ben dus voortdurend bezig met mezelf als
                    persoon verder te ontwikkelen. </p>
                <p>In mijn opleiding heb ik leren werken met HTML, CSS, Javascript, PHP, MySQL en GIT. Momenteel ben ik mezelf aan het 
                    verdiepen in het PHP framework "Symfony".
                </p>
                <p>Voor mijn volgende tewerkstelling ben ik op zoek naar een klein tot middelgroot bedrijf met een leuk
                    team. Collegialiteit draag ik hoog in het vaandel. Een gezellige, huiselijke sfeer op de
                    werkvloer is voor mij dus een absolute must. Herkent u hierin uw bedrijf? Aarzel dan zeker niet om me te
                    contacteren!</p>
            </div>
        </div>

        <div class="portfolio">
            <h1>Portfolio</h1>
            <div class="illustrations">
                <h2>Illustraties & grafisch ontwerp</h2>
                <div class="gray">
                    <div class="container" id="illustrations_container">
                        <button class="btn inactive fas fa-chevron-left" id="previous" data-firstVisible=""></button>
                        <div class="visibleProjects">
                            <div class="illustraties" data-slideLength="" data-translateX="">
                                <div class="slide" data-modal-target="#ill_project1">
                                    <img src="img/illustrations/AIW.png" alt="">
                                </div>
                                <div class="slide" data-modal-target="#ill_project2">
                                    <img src="img/illustrations/avatarNew.png" alt="">
                                </div>
                                <div class="slide" data-modal-target="#ill_project3">
                                    <img src="img/illustrations/direwolf.png" alt="">
                                </div>
                                <div class="slide" data-modal-target="#ill_project4">
                                    <img src="img/illustrations/Doopselkaartje.jpg" alt="">
                                </div>
                                <div class="slide" data-modal-target="#ill_project5">
                                    <img src="img/illustrations/microworld.png" alt="">
                                </div>
                                <div class="slide" data-modal-target="#ill_project6">
                                    <img src="img/illustrations/nightelf_bust_003.png" alt="">
                                </div>
                                <div class="slide" data-modal-target="#ill_project7">
                                    <img src="img/illustrations/SPA_Poster.png" alt="">
                                </div>
                            </div>
                        </div>
                        <button class="btn inactive fas fa-chevron-right" id="next" data-lastVisible=""></button>
                    </div>
                </div>
            </div>

            <div class="modeling3d">
                <h2>3D Modeling</h2>
                <div class="gray">
                    <div class="container" id="modeling_container">
                        <button class="btn inactive fas fa-chevron-left" id="previous" data-firstVisible=""></button>
                        <div class="visibleProjects">
                            <div class="modeling" data-slideLength="" data-translateX="">
                                <div class="slide" data-modal-target="#mod_project1">
                                    <img src="img/3d/Neverland_rum_insta.png" alt="">
                                </div>
                                <div class="slide" data-modal-target="#mod_project3">
                                    <img src="img/3d/2dsXl.png" alt="">
                                </div>
                                <div class="slide" data-modal-target="#mod_project2">
                                    <img src="img/3d/island.png" alt="">
                                </div>
                            </div>
                        </div>
                        <button class="btn inactive fas fa-chevron-right" id="next" data-lastVisible=""></button>
                    </div>
                </div>
            </div>

            <div class="webdevelopment">
                <h2>Web development & design</h2>
                <div class="gray">
                    <div class="container" id="webdev_container">
                        <button class="btn inactive fas fa-chevron-left" id="previous" data-firstVisible=""></button>
                        <div class="visibleProjects">
                            <div class="webdev" data-slideLength="" data-translateX="">
                                <div class="slide" data-modal-target="#dev_project1">
                                    <img src="img/webdev/prularia.png" alt="">
                                </div>
                                <div class="slide" data-modal-target="#dev_project2">
                                    <img src="img/webdev/donatellos.png" alt="">
                                </div>
                                <div class="slide" data-modal-target="#dev_project3">
                                    <img src="img/webdev/dragndrop.png" alt="">
                                </div>
                            </div>
                        </div>
                        <button class="btn inactive fas fa-chevron-right" id="next" data-lastVisible=""></button>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="contact">
                <h1>Contact</h1>
                <span><i class="fas fa-user"></i>Martijn Vandenbergh</span>
                <span><i class="fas fa-phone-alt"></i>+32 494 61 68 44</span>
                <span class="adres"><i class="fas fa-map-marker-alt"></i>
                    <div class="adresGegevens">
                        <span id="straat">Grootstraat 67</span>
                        <span id="gemeente">3570 Alken</span>
                    </div>
                </span>
            <a href="https://www.linkedin.com/in/martijn-vandenbergh/" target="_blank"><i class="fab fa-linkedin"></i>linkedin</a>
            <a href="https://mythrane.artstation.com/" target="_blank"><i class="fab fa-artstation"></i>artstation</a>
            <button class="emailBtn" data-modal-target="#modalForm"><i class="fas fa-envelope"></i>Stuur een e-mail</button>
    </div>
    </footer>
    </div>

    <?php
    include_once __DIR__ . "/html/modals.html";
    ?>

    <div class="overlay"></div>

    <?php
    if (isset($_GET["action"]) && $_GET["action"] === "mailSent") {
        echo '<script type="text/javascript">',
        'let modal = document.querySelector("#mailConfirm)',
        'openModal(modal);',
        '</script>';
    }
    ?>
</body>

</html>