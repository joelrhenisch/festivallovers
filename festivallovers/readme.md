# Festivalovers
Meine Vertiefungsarbeit 'festivallovers' vom Lehrgang Developer 18/19 wurde in Form einer Website erarbeitet. Dabei wurde das komplette Frontend gemäss Styleguide umgesetzt.
Die Eventagentur FestivalLovers bietet eine Webseite mit Informationen rund um Festivals vom Line up bis hin zum Ticketkauf. Es sind dort Festivals aus der ganzen Schweiz zu finden.

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
Datei 'env.example' kopieren und Kopie in '.env' unbenennen

Mit folgendem Befehl Schlüssel in .env schreiben
```bash
php artisan key:generate
```

lokaler Pfad in homestead.yaml ändern (Zeile 10)
Homestead.yaml

### Start Vagrant Box
Die Vagrant Box gemäss Dokumentation starten.

### 'Assets bundle' mit Webpack
Die Dateien im Verzeichnis 'festivallovers/resources/assets' müssen zusammengefügt werden und ins Verzeichnis 'public' abgelegt werden. 
Bei Änderungen werden die Dateien automatisch ersetzt.Dafür folgender Befehl:
```bash
npm run watch
```

## Zeitplan / Meilensteine


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

## technische Entscheide