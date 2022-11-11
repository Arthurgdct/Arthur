<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Emblema+One&family=Roboto+Mono&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/72e8ccb00a.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div id="namecontainer">
            <p id="firstname" class="txt-y emblema">A<br>R<br>T<br>H<br>U<br>R</p>
            <p id="lastname" class="txt-b bg-y emblema">G<br>R<br>A<br>N<br>D<br>-<br>C<br>L<br>E<br>M<br>E<br>N<br>T</p>
        </div>
        <nav>
            <div id="btncontainer">
                <a href="#" class="btn-nav">Accueil</a>
                <a href="#" class="btn-nav">Présentation</a>
                <a href="#" class="btn-nav">Compétences</a>
                <a href="#" class="btn-nav">Réalisations</a>
                <a href="#" class="btn-nav">Mon Cv</a>
                <a href="#" class="btn-nav">Contact</a>
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
            <h2 id="lastnameTitle" class="txt-b bg-y emblema">Grand-clement</h2>
            <p id="sentence" class="txt-y emblema">Est à la recherche d'un apprentissage</p>
            <p id="refresh"><i class="fa-solid fa-rotate-right txt-y"></i></p>
        </section>

        <section id="containerImgPresentation">
            <div id="thumbnail">
                <img src="assets/img/IMG_20220818_174427.jpg" alt="">
                <img src="assets/img/Screenshot_20190602_222725.jpg" alt="">
                <img src="assets/img/Screenshot_20190602_222725.jpg" alt="">
            </div>
            <div id="presentationImg">
                <img src="assets/img/IMG_20220818_174427.jpg" alt="">
            </div>
            <div>
                <p id="sentenceQuestion" class="txt-y roboto">Choisir la longueur de la présentation :</p>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, dicta consequuntur quo, iste vero expedita omnis blanditiis voluptate aliquam odit atque inventore quia est ad necessitatibus esse numquam illum tempora! Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio cum natus eveniet delectus totam officiis vel! Sit, doloremque, repudiandae eos incidunt iure totam corrupti consequuntur, repellendus nostrum beatae laborum. Ullam? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat consequatur quia eum quibusdam harum labore rerum corporis fuga aut cupiditate quidem obcaecati ipsa, exercitationem facere ratione porro dolore perferendis. Optio?</p>
                </div>
            </div>
        </section>
        <section id="containerSkills">
            <div id="illustrationSkills">
                <img src="assets/img/raccoon-g1ed98ba64_1280.jpg" alt="">
            </div>
            <div class="blackops txt-w">
                <div class="emptybar">
                    <p class="" id="htmlbar">HTML</p>
                </div>
                <div class="emptybar">
                    <p id="cssbar">CSS</p>
                </div>
                <div class="emptybar">
                    <p id="phpbar">PHP</p>
                </div>
                <p>Javascript</p>
                <p>MySQL</p>
                <p>Wordpress</p>
                <p>Bootstrap</p>
                <p>Symfony</p>
                <p>Figma</p>
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>