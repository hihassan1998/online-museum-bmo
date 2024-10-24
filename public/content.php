<?php
$title = "Om vår Webbplats";
$title2 = "Lite kort om webbplaten";
include("../view/header.php");
?>

<main>

    <section>

        <h1>Info om webbplaten</h1>
        <p> <strong> Syftet</strong> med denna webbplats är att erbjuda en interaktiv plattform där besökare kan utforska historiska och kulturella objekt genom digitala utställningar och artiklar. Webbplatsen strävar efter att skapa en bro mellan det förflutna och framtiden, och ger en djupare förståelse för varje objekts betydelse i ett större sammanhang. Den är utvecklad som ett slutprojekt inom kursen PA1439-Webbteknologier vid Blekinge Tekniska Högskola.</p>

    </section>

    <section>

        <h3>Bra att veta:</h3>

        <ol>

            <li>
                <h4>Webbplatsens Funktioner:</h4>
                <ul>
                    <li>Utforska vår omfattande samling av artiklar.
                    </li>
                    <li> Interaktiva digitala utställningar med fördjupande innehåll.
                    </li>
                    <li>Detaljerad information om varje föremåls historia och betydelse.
                    </li>
                </ul>
            </li>

            <li>
                <h4>Använda Teknologier:</h4>
                <ul>
                    <li>
                        Denna webbplats är byggd med hjälp av HTML, CSS, PHP och SQLite för att skapa en dynamisk och interaktiv användarupplevelse.
                    </li>
                    <li>
                        Responsiv design säkerställs med hjälp av moderna CSS-konstruktioner för att webbplatsen fungerar på alla enheter.
                    </li>
                </ul>
            </li>

            <li>
                <h4>Användarinteraktion:</h4>
                <ul>
                    <li>
                        "Jag välkomnar din feedback och frågor om webbplatsen. Du kan kontakta mig via e-post
                        <a href="mailto:hassanihussain1998@gmail.com">hassanihussain1998@gmail.com </a> för vidare diskussioner eller förslag."
                    </li>
                </ul>
            </li>

        </ol>
        <h4>FlödesSchema webbsidan:</h4>
        <img class="img-maggy" src="../img/bmoFS.png" alt="Flow chart image">

        <h4>Project directory tree</h4>
        <pre>
        .
            ├── config
            │   └── config.php
            ├── db
            │   ├── bildtexter.md
            │   └── bmo.sqlite
            ├── img
            │ ├── 250
            │ ├── 250x250
            │ ├── 550
            │ ├── 550x550
            │ ├── 80
            │ ├── 80x80
            │ ├── maggy
            │ ├── BMOcover.jpg
            │ ├── bmo_logo.png
            │ ├── favicon.png
            │ └── full-size
            ├── index.php
            ├── public
            │   ├── articles.php
            │   ├── articlesOpen.php
            │   ├── content.php
            │   ├── css
            │   │   ├── articles.css
            │   │   ├── byline.css
            │   │   ├── footer.css
            │   │   ├── galleri.css
            │   │   ├── header.css
            │   │   ├── home.css
            │   │   ├── navbar.css
            │   │   ├── object-detail.css
            │   │   ├── objects.css
            │   │   ├── search.css
            │   │   └── style.css
            │   ├── doc.php
            │   ├── galleri.php
            │   ├── home.php
            │   ├── maggy.php
            │   ├── maggyHeadings.php
            │   ├── object_detail.php
            │   ├── objects.php
            │   ├── om.php
            │   ├── processArticles.php
            │   ├── processGalleri.php
            │   ├── processObjectDetail.php
            │   ├── processObjects.php
            │   ├── processSearch.php
            │   ├── search.php
            │   └── testfiles
            │       ├── test.css
            │       ├── test.php
            │       ├── text.css
            │       └── text.php
            ├── src
            │   └── connectdb.php
            └── view
                ├── byline.php
                ├── footer.php
                ├── header.php
                └── navbar.php

        </pre>
    </section>

    <h3>Möt utvecklaren bakom webbplatsen:</h3>
    <?php include("../view/byline.php") ?>

</main>

<?php

include("../view/footer.php");
?>