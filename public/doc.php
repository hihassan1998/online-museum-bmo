<?php
$title = "Dokumentation";
$title2 = "Dokumentation av webbplatsen";
include("../view/header.php");
?>

<main>
    <h1>Dokumentation av Webbplatsen</h1>

    <section>

        <h2>Kodstruktur</h2>
        <p>
            Den webbplats är organiserad för att främja både läsbarhet och underhållbarhet med Html, Css och PHP bäst praxis.
        </p>

        <h4>FlödesSchema:</h4>
        <img class="img-maggy" src="../img/bmoFS.png" alt="Flow chart image">

        <h4>
            Här är en översikt över kodstrukturen:
        </h4>
        <ul>
            <li><strong>config/</strong>:
                Här finns konfigurationsfil som hanterar servers session och anropar error om det krånglar i bakänden.
                <br>
            </li>
            <li><strong>db/</strong>:
                Innehåller databasfiler, inklusive SQLite-databasen och markdown file med data.
                <br>
            </li>
            <li><strong>img/</strong>:
                Mapp för bilder som används i webbplatsen, organiserade i underkategorier för bättre översiktlighet. <br></li>

            <li><strong>public/</strong>:
                Innehåller alla offentliga sidor som användare kan nå, inklusive processkontroller, artiklar, och objeckten.
                <br>
            </li>

            <li><strong>src/</strong>:
                Innehåller script för att ansluta till databasen som används av webbplatsen.
                <br>
            </li>

            <li><strong>view/</strong>:
                Innehåller vyer för webbplatsen, såsom header, footer och navbar, vilket gör det lätt att återanvända kod och hålla den organiserad.
            </li>
        </ul>
        <p>
            Jag har valt att strukturera koden på detta sätt för att separera olika delar av webbplatsen och processkontroll filer, vilket gör det enklare att navigera websidan återanvända delar av kod samt underhålla bakänden.
        </p>

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

    <section>
        <h2>Responsivitet</h2>
        <p>
            Webbplatsen är byggd med responsiv design i åtanke. Jag har använt moderna CSS-tekniker, inklusive flexbox och media queries, för att säkerställa att webbplatsen fungerar bra på olika enheter, inklusive mobiltelefoner, surfplattor och stationära datorer. Element justerar sig automatiskt för att passa skärmstorleken, vilket ger en användarvänlig upplevelse.
        </p>
        <ul>
            <li>
                Sidan har testats i Chrome, Microsoft Edge och AVG Secure Browser.
                <br>
            </li>

            <li>
                Helt responsiv webbapplikation som fungerar utmärkt på både stora och små skärmar, med anpassade stilar för enheter som har en bredd på 786px eller mindre, vilket ger en optimal upplevelse även på mobila enheter.
            </li>
        </ul>


    </section>

    <section>

        <h2>Förbättringsförslag</h2>
        <p>
            Här är några förslag på förbättringar för ett fiktivt vidareutvecklingsprojekt:
        </p>
        <ul>
            <li><strong>Skapa användarkonton:</strong>
                Låt användare skapa konton så att de kan spara artiklar och annat innehåll de gillar. <br></li>

            <li><strong>Mer innehåll:</strong>
                Lägg till fler interaktiva delar som videor och ljudklipp för att göra sidan mer engagerande.
                <br>
            </li>

            <li><strong>Förbättra sökfunktionen:</strong>
                Utveckla sökfunktionen så att användare kan filtrera artiklar efter exempelvis kategori eller datum.<br></li>

            <li><strong>SEO-optimering:</strong>Förbättra webbplatsens synlighet på Google och andra sökmotorer genom att optimera sidan tekniskt. <br></li>

            <li><strong>Responsiv meny:</strong>
                Skapa en meny som anpassar sig för både små och stora skärmar, till exempel med en ihopfällbar meny för mobiler och en vanlig meny för större skärmar.
                <br>
            </li>

            <li><strong>Admin-inloggning (Krav 6):</strong>
                Lägg till en administratörsinloggningssida för att möjliggöra hantering av artiklar och objekt direkt via webbplatsen, där admins kan uppdatera, lägga till eller ta bort innehåll från databasen.
            </li>
        </ul>
    </section>
    <section>
        <h3> (Återgå till <a href="home.php">Hem-sidan)</a></h3>
    </section>

</main>

<?php include("../view/footer.php"); ?>