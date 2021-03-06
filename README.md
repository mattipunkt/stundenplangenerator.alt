# ACHTUNG
Ich habe aufgehört dieses Projekt weiterzuführen. Stattdessen werde ich das ganze in Rust neu schreiben.

# Stundenplan Generator
Der Stundenplan Generator ist eine Weboberfläche, die es Lehrern ermöglicht Schüler zu erstellen und diese dann einem Kurs zuzuordnen. So wird automatisch der Stundenplan für den jeweiligen Schüler erstellt und es gibt kein Chaos beim selbst zusammenstellen.


## Installation

### ACHTUNG
Dieses Projekt ist (noch) nicht dafür gedacht auf öffentlich erreichbaren Servern verwendet zu werden, da die MySQL-Anmeldedaten in der db.php im Klartext stehen. Dies ist ein enormes Sicherheitsrisiko und deswegen sollte dieses Projekt nur im Privatnetzwerk verfügbar sein.


Voraussetzung ist PHP8.0 und MySQL (oder auch MariaDB etc.) und ein funktionierender Webserver.
Die heruntergeladenen Dateien müssen nur minimal angepasst werden:
in der db.php müssen die MySQL-Zugangsdaten und die bereits erstellte Datenbank (am besten mit dem Namen "stundenplan") eingeben werden. Außerdem muss eine Tabelle mit dem Namen "schueler" angelegt werden. In dieser Tabelle muss eine Spalte mit dem Namen "name" erstellt werden.

### Datenbank anlegen:
```
CREATE DATABASE stundenplan;
```

### Tabelle und Spalte anlegen:
```
CREATE TABLE schueler (vorname VARCHAR(50));
```

### db.php bearbeiten
```
$servername='localhost';
$username='beispiel';
$password='beispielxyz';
$dbname = "stundenplan";
```

Dann so eingefügt kann der Webserver gestartet werden.
