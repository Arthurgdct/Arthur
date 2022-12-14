<?php include 'controllers/indexCtrl.php' ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arthur Gdct</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Emblema+One&family=Roboto+Mono&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/72e8ccb00a.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div id="namecontainer">
            <p id="firstname" class="txt-y emblema">A<br>R<br>T<br>H<br>U<br>R</p>
            <p id="lastname" class="txt-b bg-y emblema">G<br>R<br>A<br>N<br>D<br>-<br>C<br>L<br>E<br>M<br>E<br>N<br>T
            </p>
        </div>
        <nav>
            <div id="btncontainer">
                <a href="#" class="btn-nav">Accueil</a>
                <a href="#containerImgPresentation" class="btn-nav">Présentation</a>
                <a href="#containerSkills" class="btn-nav">Compétences</a>
                <a href="#realisation" class="btn-nav">Portfolio</a>
                <a href="#cvcontainer" class="btn-nav">Liens et Cv</a>
                <a href="#contact" class="btn-nav">Contact</a>
            </div>
            <div id="iconcontainer">
                <a href="https://www.linkedin.com/in/arthur-gdct/"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/Arthurgdct/"><i class="fa-brands fa-github"></i></a>
            </div>
        </nav>
    </header>
    <main>
        <section id="containerHome">
            <h1 id="firstnameTitle" class="txt-y emblema">ARTHUR</h1>
            <div id="lastnamecontainer" class="bg-y">
                <h2 id="lastnameTitle" class="txt-b emblema">Grand-clement</h2>
            </div>
            <div id="sentencecontainer">
                <p id="sentence" class="txt-y emblema">Est à la recherche d'un apprentissage</p>
            </div>
            <p id="refresh"><i id="arrow" class="fa-solid fa-rotate-right txt-y"></i></p>
        </section>
        <section id="containerImgPresentation">
            <h2 class="bg-y section-title emblema">Présentation</h2>
            <div id="containerpres">
                <div id="containerimg">
                    <div id="thumbnail">
                        <img src="assets/img/IMG_20220818_174427.jpg" id="firstpicture" alt="une photo de moi qui sourit">
                        <img src="assets/img/Screenshot_20190602_222725.jpg" id="secondpicture" alt="un autre photo de moi...">
                        <img src="assets/img/Screenshot_20190602_222725.jpg" id="thirdpicture" alt="encore une photo de moi ?!">
                    </div>
                    <div id="presentationImg">
                        <img src="assets/img/IMG_20220818_174427.jpg" id="bigpicture" alt="Une photo de moi en plus grand">
                    </div>
                </div>
                <div id="textualpresentation">
                    <p id="sentenceQuestion" class="txt-y blackops">Choisir la longueur de la présentation :</p>
                    <div id="inputLong">
                        <input type="radio" name="pres" id="veryShort">
                        <input type="radio" name="pres" id="short" checked>
                        <input type="radio" name="pres" id="classic">
                        <input type="radio" name="pres" id="long">
                    </div>
                    <div id="longContainer">
                        <p>Tres courte</p>
                        <p>Longue</p>
                    </div>
                    <div id="presentationContainer" class="roboto">
                        <p id="description">Bonjour, je m'appel Arthur. J'ai 25 ans et je suis passionné d'informatique
                            depuis mes 10 ans. Je suis a la recherche d'un apprentissage afin de continuer ma
                            reconversion
                            et vivre d'un emploi dans un domaine qui me passionne véritablement. Je suis déterminé &
                            j'aime
                            le travaille d'équipe.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="containerSkills">
            <h2 class="bg-y section-title emblema">Compétences</h2>
            <div id="skills">
                <div id="illustrationSkills">
                    <img src="assets/img/pexels-lukas-574069.jpg" alt="">
                </div>
                <div id="barcontainer" class="blackops txt-w">
                    <div class="emptybar">
                        <p id="htmlbar">HTML <br> 90%</p>
                    </div>
                    <div class="emptybar">
                        <p id="cssbar">CSS <br> 80%</p>
                    </div>
                    <div class="emptybar">
                        <p id="phpbar">PHP <br> 75%</p>
                    </div>
                    <div class="emptybar">
                        <p id="jsbar">Javascript <br> 75%</p>
                    </div>
                    <div class="emptybar">
                        <p id="sqlbar">SQL <br> 80% </p>
                    </div>
                    <div class="emptybar">
                        <p id="wordpressbar">Wordpress <br> 70%</p>
                    </div>
                    <div class="emptybar">
                        <p id="bootstrapbar">Bootstrap <br> 70%</p>
                    </div>
                    <div class="emptybar">
                        <p id="symfonybar">Symfony <br> 40%</p>
                    </div>
                    <div class="emptybar">
                        <p id="figmabar">Figma <br> 85%</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="realisation">
            <h2 class="bg-y section-title emblema">Portfolio</h2>
            <div id="realcontainer">
                <div id="carrousel">
                    <div class="container">
                        <div class="slider">
                            <img class="active carrouselimg" src="assets/img/image.png">
                            <img class="carrouselimg" src="assets/img/imagepersonnage.png">
                            <img class="carrouselimg" src="assets/img/image2.png">
                        </div>
                        <div class="cont-btn">
                            <div class="btn-nav-car left"><i class="fa-solid fa-arrow-left-long"></i></div>
                            <div class="btn-nav-car right"><i class="fa-solid fa-arrow-right-long"></i></div>
                        </div>
                    </div>
                </div>
                <div id="fulldesc">
                    <div id="descproject">
                        <h2 class="bg-y section-title emblema">UniversRp</h2>
                        <h3 class="blackops txt-y">Résumé du projet :</h3>
                        <p class="roboto">
                            UniversRp est le site que j'ai choisis de développer pour le passage de mon diplôme, le
                            principe du site est qu'il sert de substitue au matériel habituellement nécessaire pour
                            faire du Role Play. J'ai aussi developpé une interface pour créer son propre personnage avec
                            ces caractéristiques personnalisé par l'utilisateur, une bdd afin de stocker les personnages
                            et mes utilisateurs et leurs infos ainsi qu'une interface pour que les utilisateurs puissent
                            jouer unne partie (lancer de dés, lecture de l'histoire, illustration, etc ...) Developpé en
                            mobile first le site est aussi completement responsive.
                        </p>
                        <h3 class="blackops txt-y">Technologies utilisés :</h3>
                        <div id="icondesc">
                            <i class="fa-brands fa-html5"></i>
                            <i class="fa-brands fa-css3-alt"></i>
                            <i class="fa-brands fa-php"></i>
                            <i class="fa-brands fa-square-js"></i>
                            <i class="fa-brands fa-bootstrap"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cvcontainer">
            <h2 class="bg-y section-title emblema">Liens et Cv</h2>
            <div id="cvlinkcontent">
                <div id="cv">
                    <img src="assets/img/cv.png" alt="">
                </div>
                <div id="link">
                    <h3 class="blackops txt-y">Ou me retrouver ?</h3>
                    <a class="roboto" href="https://github.com/Arthurgdct" target="_blank">Github 🐙</a>
                    <a class="roboto" href="https://www.linkedin.com/in/arthur-gdct/" target="_blank">Linkedin 👨‍💼</a>
                    <a class="roboto" id="discord">Discord 💻</a>
                    <a class="roboto" id="email">Email 👨‍💻</a>
                </div>
            </div>
        </section>
        <section id="contact">
            <h2 class="bg-y section-title emblema">Contact</h2>
            <h3 class="blackops txt-y" id="launchsentence">Une Question ? Une proposition ? C'est par ici !</h3>
            <form id="contactform" action="" method="post">
                <input type="text" placeholder="<?= (isset($_POST['name'])) ? $_POST['name'] : 'Nom' ?>" name="name" id="name">
                <?php if (isset($errors['name'])) { ?>
                    <p class="errorsmsg"><?= $errors['name'] ?></p>
                <?php } ?>
                <input type="email" placeholder="<?= (isset($_POST['email'])) ? $_POST['email'] : 'Email' ?>" name="email" id="emailform">
                <?php if (isset($errors['email'])) { ?>
                    <p class="errorsmsg"><?= $errors['email'] ?></p>
                <?php } ?>
                <textarea placeholder="<?= (isset($_POST['message'])) ? $_POST['message'] : 'Message' ?>" name="message" id="message" cols="30" rows="10"></textarea>
                <?php if (isset($errors['message'])) { ?>
                    <p class="errorsmsg"><?= $errors['message'] ?></p>
                    <?php }
                if (isset($_POST['contact'])) {
                    if (empty($errors)) { ?>
                        <p class="validmsg">Votre message a bien été envoyer.</p>
                <?php }
                } ?>
                <input id="sendbtn" name="contact" type="submit">
            </form>

        </section>
    </main>
    <footer>
        <div id="footercontainer">
            <div>
                <div id="footertitle" class="bg-y">
                    <h4 class="footertitle txt-b blackops">Developpeur informatique Junior</h4>
                    <h4 class="footertitle txt-b blackops">Grand-clement Arthur</h4>
                </div>
                <div id="footercontent">
                    <div id="minidesc">
                        <p id="footerdesc" class="pfooter txt-w roboto">
                            Jeune developpeur front-end & back-end
                            passionné, je
                            suis a votre disposition pour répondre a tout type de demande, information sur mon profil,
                            proposition de projet, création de site web, proposition d'emploi ou d'apprentissage.
                        </p>
                    </div>
                    <div id="footerinfo">
                        <div>
                            <p class="pfooter txt-w roboto">
                                <i class="txt-y fa-solid fa-location-dot"></i>
                                13600 La ciotat
                            </p>
                            <a id="telfooter" href="tel:0664687852" class="pfooter txt-w roboto"><i class="txt-y fa-solid fa-phone"></i> 06 64 68 78 52</a>
                        </div>
                        <div>
                            <a id="emailfooter" href="mailto:grandclementarthur@gmail.com" class="pfooter txt-w roboto"><i class="txt-y fa-sharp fa-solid fa-envelope"></i>
                                Email</a>
                            <p>
                                <a id="linkwebsite" href="" class="pfooter txt-w roboto"><i class="txt-y fa-solid fa-link"></i>Lien du site</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="linkfooter" class="bg-y txt-b">
                <a href="https://lamanu.fr/campus/versailles/">La Manu</a>
                <a href="mentionslegals.html">Mentions Légales</a>
            </div>
            <div>
                <p id="copyright" class="roboto bg-y txt-b"><i class=" fa-regular fa-copyright"></i> 2022 Grand-clement
                    Arthur, Tous droits réservés.</p>
            </div>
    </footer>
    <script src="assets/js/script.js"></script>
</body>

</html>