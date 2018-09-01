# Festivalovers
Meine Vertiefungsarbeit 'festivallovers' vom Lehrgang Developer 18/19 wurde in Form einer Website erarbeitet. Dabei wurde das komplette Frontend gemäss Styleguide umgesetzt.
Die Eventagentur festivallovers bietet eine Webseite mit Informationen rund um Festivals vom Line up bis hin zum Ticketkauf. Es sind dort Festivals aus der ganzen Schweiz zu finden.

## Nutzung 
Das Frontend kann verwendet werden und das Backend dazu geschrieben werden.

## Lizenz
#### Inhalt
Die inhaltlichen Rechte liegen bei Stephanie Batliner.

#### Software
Wurde mit Open-Source-Software verwendet, ausser 'fancybox'. Hier müsste bei einer kommerziellen Veröffentlichung eine Lizenz gekauft werden. (Quelle siehe unten)

#### Fonts
Die Schriften wurden von Stephanie Batliner mitgeliefert. Bitte bei ihr abklären, ob eine kommerzielle Lizenz gekauft wurde für dieses Projekt.


## Start
### Installation Tools
Installiere folgende Tools: npm/node, php composer, yarn, homestead. Die offizielle Dokumentation findest du unten.

### Installation Projekt
##### Download Repository
Lade das Repository über folgenden Befehl im terminal oder gitbash herunter:
```bash
git clone git@github.com:WebProfessionals/dipl1718_joel.git
```  

##### Install dependencies
Wechsle ins Verzeichnis 'festivallovers' und lade alle composer-dependencies
```bash
composer install
```

Lade alle yarn-dependencies
```bash
yarn
```

##### Dateien anpassen
Datei 'env.example' kopieren und Kopie in '.env' umbenennen

Mit folgendem Befehl Schlüssel in .env schreiben
```bash
php artisan key:generate
```

lokaler Pfad in homestead.yaml ändern (Zeile 10)
Homestead.yaml

### Start Vagrant Box
Die Vagrant Box gemäss Dokumentation starten.

### 'Assets bundle' mit Webpack
Dateien vom Verzeichnis 'assets' in 'public' minified bundeln. 
```bash
npm run production
```

## Zeitplan / Meilensteine
Diese sind aus dem Dokument 'milestones.pdf' (gleiches Verzeichnis) zu entnehmen.

## technische Entscheide
### Frontend: 
Laravel & Bootstrap (HTML & CSS)
- Anfangs war auch die Umsetzung vom Backend geplant. Dies ein Hauptgrund für die Wahl von Laravel.
- Das Strukturieren von Dateien fällt mit Laravel sehr leicht. Die Templating-Engine 'blade' konnte ich sehr gut gebrauchen beim Platzieren von externen Inhalten.
- Laravel Mix (webpack) erleichtert das Handeln von js/scss/css Dateien enorm. Präprozessoren sind auch vorhanden.
- Die Routes geben dem Projekt eine klare Struktur und sind einfach anzusteuern.
- Dependencies sind übersichtlich aufgelistet und einfach zu installieren
- Mit Bootstrap können schnell und einfach Basiselemente wie Container erstellt werden. Die Media-Queries z.B. col-lg-10 können beim Responsive-Design helfen.

jQuery (JS)
- Übersichtlicher, einleuchtender Code
- viele Lösungsansätze
- hat sich über Jahre bewährt

VueJS (JS)
- simpler Code
- component-basiert
- Backend kann einfach angefügt werden
- geringe Grösse (KB)

fancybox (JS & HTML)
- wurde für den Fullscreen vom Carousel gebraucht
- einfache Umsetzung
- geringer Zeitaufwand

### Backend:
laravel: Aus zeitlichen Gründen konnte dies nicht umgesetzt werden.

### verwendete Tools & offizielle Dokumentationen
npm & node  
https://www.npmjs.com/get-npm

php composer  
https://getcomposer.org/

yarn  
https://yarnpkg.com/lang/en/

Homestead  
https://laravel.com/docs/5.6/homestead

Laravel  
https://laravel.com/docs/5.6

VueJS  
https://vuejs.org/v2/guide/installation.html

fancybox  
https://fancyapps.com/fancybox/3/


## Zusammenfassung / Ausblick
Das Frontend wurde umgesetzt und das Backend wird vielleicht nachträglich noch ausgearbeitet
Nicht optimale Ansätze beim Umsetzen des Projekts habe ich notiert und kann beim Abschlussgespräch gerne genauer darauf eingehen.

## persönliche Anmerkungen zur Umsetzung
Diese sind aus dem separaten Dokument 'anmerkungen.md' in gleichem Verzeichnis zu entnehmen.