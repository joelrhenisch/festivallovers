# Festivalovers
Meine Diplomarbeit 'festivallovers' vom Lehrgang Developer 18/19 Lehrgang. Das Frontend einer Website wurde gemäss Styleguide umgesetzt.

## Nutzung 
Das Frontend kann verwendet werden und das Backend dazu geschrieben werden.

## Lizenz
#### Inhalt
Die inhaltlichen Rechte liegen bei Stephanie Batliner.

#### Software
Wurde mit Open-Source-Software verwendet, ausser 'fancybox'. Hier müsste bei einer kommerziellen Veröffentlichung eine Lizenz gekauft werden.

#### Fonts
Die Schriften wurden von Stephanie Batliner mitgeliefert. Bitte bei ihr abklären, ob eine kommerzielle Lizenz gekauft wurde für dieses Projekt.


## Start
### Installation Tools
Installiere folgende Tools: php composer, yarn, homestead. Die offizielle Dokumentation findest du am Schluss.

### Installation Projekt
##### Download Repository
Lade das Repository über folgenden Befehl im terminal oder gitbash herunter:
```bash
git clone git@github.com:WebProfessionals/dipl1718_joel.git
```  

##### Install dependencies
wechsle ins Verzeichnis 'festivallovers' und lade alle composer-dependencies
```bash
composer install
```

lade alle yarn-dependencies
```bash
yarn
```

##### Dateien anpassen
Datei 'env.example' kopieren und Kopie in '.env' unbenennen

Schlüssel in .env schreiben
```bash
php artisan key:generate
```

Pfad in homestead.yaml ändern (Zeile 10)
Homestead.yaml

### Start Vagrant Box
Die Vagrant Box gemäss Dokumentation starten.

### 'Assets bundle' mit Webpack
Die Dateien im Verzeichnis 'festivallovers/resources/assets' müssen zusammengefügt werden und ins Verzeichnis 'public' abgelegt werden.
Bei Änderungen werden die Dateien automatisch ersetzt. 
```bash
npm run watch
```

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