<html>
<!DOCTYPE html>
<html lang="de">

<head>
    <title>documentation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <h1>Dokumentation</h1>
    <div class="docu">
        <h2>Projektdokumentation Corona Healthcare</h2>
        <div class="table-of-contents">
            <ul>
                <li>1. Projektbeschreibung</li>
                <li>2. Recherche</li>
                <li>3. Funktionalitäten</li>
                <li>4. Arbeitsaufteilung/Verlauf</li>
                <li>5. Projektverlauf</li>
                <li>6. Webseitenstruktur</li>
                <li>7. Datenbankstruktur</li>
                <li>8. Ordnerstruktur</li>
            </ul>
        </div>


        <h3>1. Projektbeschreibung</h3>
        <p>
            Die Projektidee für Corona Healthcare entstand im Zuge der Modulaufgabe für „Grundlagen und Dynamische Webprogrammierung“ mit dem Thema:
            "Webseite mit Shop-System für einen realen oder fiktiven Kunden". Hier sollte eine übergreifende Projektaufgabe mit HTML, CSS, 
            JavaScript und PHP realisiert werden. Anforderungen war neben der passenden optischen Anmutung und guten Bedienbarkeit vor allem das Shopsystem.

        </p>
        <p>
            Die anhaltende Pandemie und die damit einhergehenden Einschränkungen und Maßnahmen haben uns zur Erstellung dieser Seite bewogen.
            Gerade in der aktuellen Zeit ist es besonders wichtig, dass Informationen weitergebeben werden und die Möglichkeit besteht,
            die geltenden Maßnahmen und Präventionen einhalten zu können.
        </p>
        <p>
            Neben der Weitergabe und Zentralisierung von Informationen, über die Pandemie und das Virus, besteht für all unsere Kunden
            die Möglichkeit Produkte über unseren Shop zu beziehen. Hier ist uns besonders ein breit gefächertes
            Produktportfolio wichtig.
        </p>
        <p>
            Die Zielgruppe sind sowohl private Haushalte, als auch Unternehmen jeglicher Größe. Wir bieten jedem Kunden uneingeschränkten
            Zugang zu unserem Shop und liefern aktuelle Informationen über unseren RSS Feed.
        </p>
        <br><br>

        <h3>2. Recherche</h3>
        <p>
            Zur Anregung von Ideen fokussierten wir uns bei der Recherche nach alternativen Websites auf das Thema 'Medizin & und dessen Shopsystem'.
            Gerade die Position des Logos, der Navigation und des Content-Bereiches waren für uns in der Anordnung wichtig. Die Recherche für das
            Thema 'Corona' war in der aktuellen Situation und Lage recht einfach, da die mediale Präsenz allgegenwärtig ist. Das Projektthema ist daher
            aktuell und steht in großem öffentlichen Interesse. Neben der Recherche für Optik und Thema ergaben sich auch die Produkte für das Shopsystem 
            und konnten eingepflegt werden. Durch die breitgefächerte Zielgruppe war es uns wichtig, dass wir kleine, aber auch große Mengen
            unserer Produkte anbieten können.
        
        
        </p>
        <div class="research">

            <p><a href="https://www.docmorris.de"><img src="assets/docMorris.jpg" alt=docmorris.de></a>

            </p>
            <p><a href="https://www.shop-apotheke.com/"><img src="assets/shop-apotheke.jpg" alt=shop-apotheke.com></a>

            </p>
            <p><a href="https://www.medizinfuchs.de"><img src="assets/medizinfuchs.jpg" alt=medizinfuchs.de></a>

            </p>
        </div>

        <div class="functionalities">
            <h3>3. Funktionalitäten</h3>
            <ul>
                <li>Session- und Cookiemanagement</li>
                <li>Shopsystem mit Warenkorb und Bestellvorgang</li>
                <li>Filterung und Kategorisierung der Produkte</li>
                <li>Anmeldung mit 'angemeldet bleiben' Funktionalität</li>
                <li>Abmeldung</li>
                <li>Registrierung</li>
                <li>Profilübersicht einsehen</li>
                <li>Profildaten bearbeiten</li>
                <li>Bestellverlauf einsehen</li>
                <li>Kontaktaufnahme per Kontaktformular</li>
                <li>Darstellung von Informationen über Projektgruppe und Projektinhalt</li>
                <li>Darstellung aktueller Informationen des RKI per eingebundenem RSS-Feed</li>
                <li>Responsives Design</li>
                <li>Formularvalidierung serverseitig per php und clientseitig mit Javascript</li>
                <li>Sprechende Fehlermeldungen und Errorhandling</li>
            </ul>
        </div>

        <h3>4. Arbeitsaufteilung</h3>
        <div class="work-distribution">
            <ul>

                <li>Aufbau und Design(HTML, CSS): Katja Fischer</li>


                <li> php, Datenbank, Javascript und MVC-Struktur: Marvin Ruppert</li>

                <li> Textinhalte: Fabian Seeber</li>

                <li> Dokumentation und Präsentation: Alle</li>

        </div>

        <h3>5. Projektverlauf</h3>
        <div class="project-history">
            <div class="project-member">
                <h3>Marvin Ruppert</h3>

                <ul>
                    <li>23.02.2021 README.md erstellt, Datenbank und Testdaten vereint</li>
                    <li>22.02.2021 Dokumentation bearbeitet</li>
                    <li>22.02.2021 Kontaktformular hinzugefügt</li>
                    <li>22.02.2021 Produktname im Bestellverlauf, Bild im Warenkorb</li>
                    <li>18.02.2021 Buttons überarbeitet, Bestellung erweitert, Profildaten bearbeitet, Passwort ändern erstellt</li>
                    <li>13.02.2021 Formularfeldüberprüfung per Javascript, RKI RSS Feed eingebunden, RememberMe Cookie gesetzt</li>
                    <li>12.02.2021 Registrierungsformular durch Javascript erweitert</li>
                    <li>10.02.2021 Bestellverlauf hinzugefügt, Warenkorbzähler geändert</li>
                    <li>09.02.2021 Orderby Find hinzugefügt, Kategoriefilter angepasst, Bilderklasse hinzugefügt</li>
                    <li>09.02.2021 Preisfilterung, Namensfilterung, Kategoriefilterung hinzugefügt, Warenkorbcounter hinzugefügt </li>
                    <li>09.02.2021 Warenkorb und Bestellvorgang angelegt, Datenbank Logiken vervollständigt</li>
                    <li>09.02.2021 Funktion zum Warenkorb hinzufügen eingebaut</li>
                    <li>09.02.2021 Produkte um Bilder erweitert, Produktansicht hinzugefügt</li>
                    <li>08.02.2021 Shop eingefügt, Filterungen für Shop eingefügt
                    <li>19.01.2021 Registrierung eingefügt</li>
                    <li>18.01.2021 Login eingebaut</li>
                    <li>15.01.2021 Actions und Pages angelegt</li>
                    <li>08.01.2021 Erste Datenbank Abfrage</li>
                    <li>21.12.2020 MVC Grundstruktur eingefügt</li>
                    <li>20.12.2020 style.css angelegt, Impressum getestet</li>
                    <li>20.12.2020 Datenbank Grundlagen </li>
                    <li>19.12.2020 Vorlage mit Ordnereinteilung</li>
                </ul>
            </div>

           
            <div class="project-member">
                <h3>Katja Fischer</h3>

                <ul>
                    <li>22.02.2021 Dokumentation bearbeitet</li>
                    <li>22.02.2021 Kontaktformular Style angepasst</li>
                    <li>22.02.2021 Navigation geändert</li>
                    <li>22.02.2021 Symbole geändert, about responsive, alle style-elemente in style verschoben
                    <li>21.02.2021 shop und shoppingcart style geändert und responsive
                    <li>21.02.2021 information, profile, success und order style geändert und responsive</li>
                    <li>20.02.2021 Login und Registrierung responsive</li>
                    <li>20.02.2021 About, Information und Produktansicht responsive</li>
                    <li>16.02.2021 shopseite, shoppingcart und addProduct Style geändert</li>
                    <li>15.02.2021 Startseite responsive</li>
                    <li>13.02.2021 RSS Feed angepasst und header, shopseite und login Style geändert </li>
                    <li>13.02.2021 Impressum, help und about angepasst, style bearbeitet</li>
                    <li>12.02.2021 Icons geändert, Header angepasst, einige Änderungen gelöscht</li>
                    <li>09.02.2021 Navigation und Shopseite gestaltet, Anmeldung/Registrierung aufgeteilt, Footer angepasst
                    <li>08.02.2021 Shopseite angepasst, Sidebar für Filterung erstellt, Style Shopseite geändert </li>
                    <li>21.01.2021 Style Registrierung und Login erstellt</li>
                    <li>15.01.2021 Bilder gelöscht, Texte eingerückt</li>
                    <li>14.01.2021 Logo geändert, Symbole und Suchleiste in Navigation eingefügt </li>
                    <li>13.01.2021 Buttons von Navigation geändert</li>
                    <li>08.01.2021 Style von Shop und Layout</li>
                    <li>07.01.2021 Style von Start und Impressum erstellt</li>
                    <li>20.12.2020 Logo erstellt, Impressum geändert, Startseite erstellt </li>
                </ul>
            </div>
            <div class="project-member">
                <h3>Fabian Seeber</h3>

                <ul>
                    <li></li>
                    <li>24.02.2021 Dokumentation bearbeitet</li>
                    <li>22.02.2021 Dokumentation begonnen und weiter bearbeitet</li>
                    <li>20.02.2021 Bildgrößen geändert</li>
                    <li>18.02.2021 Informationstext geändert</li>
                    <li>16.02.2021 Informationstext hinzugefügt</li>
                    <li>12.02.2021 Produktbilder und Testdaten hinzugefügt</li>
                    <li>09.02.2021 Bilder hinzugefügt, Abstand für Texte eingefügt</li>
                    <li>15.01.2021 Bilder hinzugefügt, Texte für start, help, about und Impressum geschrieben</li>
                    <li>19.12.2020 Impressum geschrieben</li>
                </ul>
            </div>


        </div>
        <div class="website-structure">
        <h3>6. Webseitenstruktur</h3></div>
        <p>
            Text...

        </p>
        <div class="database-structure">
        <h3>7. Datenbankstruktur</h3>
        <p>
            Zum Entwickeln der Datenbank wurde auf MySQL Workbench zurückgegriffen. Primär wird die Datenbank benötigt um das Shopsystem
            abzubilden. Außerdem bildet sie die Grundlage für das Registrieren und Anmelden der Benutzer. Eine Besonderheit ist die Mappingtabelle
            zwischen den beiden Tabellen order und product. Diese wird benötigt, um eine Bestellung mit mehreren Produkten zu ermöglichen, bzw. Produkte
            in mehreren Bestellungen beinhalten zu können, ohne Redundanzen zu erzeugen. Die Datenbank wurde wie nachfolgend realisiert:
        </p>
        <img src="assets/datenbankmodell.jpg">
        </div>

        <div class="file-structure">
        <h3>8. Ordnerstruktur</h3>
        <p>
            Die Ordnerstruktur wird vor Allem durch das MVC Modell bestimmt. Daher befinden sich der Großteil der Projektdateien in den Ordnern
            'models', 'views', und 'controller'. Der Ordner 'models' beinhaltet alle Dateien, welche die Datenbankstruktur abbilden. Diese sind daher auch Grundlage
            für Datenbankzugriffe. In dem Ordner 'views' befinden sich alle Ansichten, die nötig sind um die Oberfläche des Projekts abzubilden. 
            In diesen werden Parameter verwendet, welche in den Dateiinhalten des Ordners 'controller' vordefiniert werden.

        </p>
        <p>
            Grundlage für die Model- und Controllerklassen befinden sich in dem 'core'-Verzeichnis. Dort werden die Elternklassen als Funktionssammlungen vorgegeben.
        </p>
        <p>
            Der src Ordner beinhaltet alles was zum Erzeugen der Datenbank notwendig ist. Dazu zählt neben dem Datenbankmodell auch das Datenbankerstellungsskript 
            (coronahealthcare.sql).
        </p>
        <p>
            Alle design- und inhaltstechnischen Ressourcen befinden sich im 'assets'-Order. Bilder, CSS und vergangene Präsentationen sind darin gespeichert.
            Der CSS Code befindet sich speziell im dafür angelegten 'styles'-Verzeichnis.
        </p>
        <img src="assets/OrdnerstrukturVS.png">
        <img src="assets/OrdnerstrukturViews.png">
        </div>

        <div class="software-used">
        <h3>Verwendete Software</h3>
        <ul>
            <li>Entwicklungsumgebung: Visual Studio Code</li>
            <li>Versionskontrolle: GitHub (GitHub Desktop)</li>
            <li>Datenbankmodellentwurf: MySQL Workbench</li>
            <li>Kommunikation: Discord, Whatsapp</li>
            <li>XAMPP (Apache, Mysql)</li>
            <li>Browser: Chrome (Marvin), Firefox (Katja), Edge (Katja)</li>
        </ul>
        </div>
    </div>


</body>

</html>