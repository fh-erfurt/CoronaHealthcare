# CoronaHealthcare



Installationsanleitung


Um die Anwendung überhaupt nutzen zu können ist die Installation der Datenbank vorausgesetzt.
Dazu wurde im Anwendungsverzeichnis ein SQL Skript hinterlegt, welches jeglichen notwendigen Code
zum Aufstellen einer Datenbank beinhaltet. 
Diese befindet sich im Verzeichnis: "\CoronaHealthcare\src\database\coronahealthcare.sql".
Nachdem das Datenbankskript ausgeführt wurde, können die Anwendungsdateien auf dem Pfad des
Apache Servers hinterlegt werden. In der Konfiguration des Apache Servers muss darauf geachtet werden, dass in der php.ini short_open_tag=On gesetzt ist.
Sobald dies erfolgt ist, kann die Anwendung genutzt werden.

Zum Benutzen der Shopfunktionen muss sich noch registriert, oder aber einer der bereits
angelegten Testzugänge genutzt werden. 
Diese finden sich hier:

Username1: Test.Benutzer@coronahealthcare.de
Passwort: 12345678

Username2: Maxmustermann@gmx.de
Passwort: 12345678

