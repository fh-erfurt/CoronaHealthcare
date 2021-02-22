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
    <div class="table-of-contents">
        <h2>Projektdokumentation Corona Healthcare</h2>
        <li>1. Projektbeschreibung
        <li>2. Recherche</li>
        <li>3. Funktionalitäten</li>
        <li>4. Arbeitsaufteilung/Verlauf</li>
        <li>5. Webseitenstruktur</li>
        <li>6. Datenbankstruktur</li>
        <li>7. Ordnerstruktur</li></div>

        <h3>1. Projektbeschreibung</h3>
        <p>
        CoronaHealthcare ist ein Unternehmen, das es sich zur Aufgabe gemacht hat, die Menschen so gut es geht bei der 
        Bewältigung der Pandemie zu unterstützen. Durch jahrelange Erfahrungen im Bereich der Gesundheitsprävention, kann 
        das Unternehmen bereits seit Anbeginn und Auftreten des Virus von den vorhandenen Fähigkeiten profitieren und an seine
        Kunden weitergeben. Egal ob Vertrieb, oder eigene Herstellung von Gesundheitsprodukten, CoronaHealthcare bietet alles, 
        was nötig ist, um die größtmögliche Sicherheit gewährleisten zu können.
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
        <p><a href="https://www.docmorris.de">www.docmorris.de</a>
        <img src="assets/docMorris.jpg"></p>
        <p><a href="https://www.shop-apotheke.com/">www.shop-apotheke.com/</a>
        <img src="assets/shop-apotheke.jpg"></p>
        <p><a href="https://www.medizinfuchs.de">https://www.medizinfuchs.de</a>
        <img src="assets/medizinfuchs.jpg"></p>

        <h3>3. Funktionalitäten</h3>
        <h3>4. Arbeitsaufteilung</h3>       
        <p>
            Aufbau und Design(HTML, CSS): Katja Fischer
        </p>
        <p>
            php, Datenbank, Javascript und MVC-Struktur: Marvin Ruppert</p>
        <p>
            Textinhalte: Fabian Seeber</p>
        <p>
            Dokumentation: Alle
        </p>

        <h3>5. Webseitenstruktur</h3>
        <h3>6. Datenbankstruktur</h3>
        <p>
            Zum Entwickeln der Datenbank wurde auf MySQL Workbench zurückgegriffen. Primär wird die Datenbank benötigt um das Shopsystem
            abzubilden. Außerdem bildet sie die Grundlage für das Registrieren und Anmelden der Benutzer. Eine Besonderheit ist die Mappingtabelle
            zwischen den beiden Tabellen order und product. Diese wird benötigt, um eine Bestellung mit mehreren Produkten zu ermöglichen bzw. Produkte
            in mehreren Bestellungen beinhalten zu können, ohne Redundanzen zu erzeugen. Die Datenbank wurde wie nachfolgend realisiert: 
        </p>
        <img src="assets/datenbankmodell.jpg">
        <h3>7. Ordnerstruktur</h3>
        <p>
            Die Ordnerstruktur wird vor Allem durch das MVC Modell bestimmt. Daher befinden sich der Großteil der Projektdateien in den Ordnern
            'Models', 'Views', und 'Controller'. Der Modelsordner beinhaltet alle Dateien, welche die Datenbankstruktur abbilden und sind daher auch Grundlage
            für Datenbankzugriffe. In dem Viewsordner befinden sich alle Ansichten, die nötig sind um die Oberfläche des Projekts abzubilden. Dort werden Parameter
            verwendet, welche in den Controllerdateien gesetzt werden. Diese finden sich alle in dem 'controller'-Ordner.
        </p>
        <p>
            Grundlage für die Model- und Controllerklassen befinden sich in dem 'core'-Verzeichnis. Dort werden die Elternklassen als Funktionssammlungen vorgegeben.
        </p>
        <p>
            Der src Ordner beinhaltet alles was zum Erzeugen der Datenbank notwendig ist. Dazu zählen Datenbankmodell , Datenbankerstellungsskript (coronahealthcare.sql)
            und ein Skript zum Erzeugen der Testdaten (Testdaten.sql). 
        </p>
        <p>
            Alle Design- und Inhaltstechnischen Ressourcen befinden sich im 'assets'-Order. Bilder, CSS und vergangene Präsentationen sind darin gespeichert.
            Der CSS Code befindet sich speziell im dafür angelegten 'styles'-Verzeichnis.
        </p>
        <img src="assets/OrdnerstrukturVS.png" >
        <img src="assets/OrdnerstrukturViews.png" >

    </div>

    </div>
</body>

</html>