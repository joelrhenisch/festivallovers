### Testing
- die Mobile- und Desktop-Sizes wurden mit dem Chrome-PlugIn Mobile/Responsive Web Design Tester getestet, weil das Chrome Dev Tool Bugs aufzeigt.
- Das eingeblendete schwarze Menu (klick links oben auf 'Menu') funktioniert nur, wenn Responsive Web Design Tester deaktiviert ist. Dies führt sonst zu Konflikten.
- bei den Commits wurde manchmal der Pfad am Anfang mitgeteilt, da ich das Verzeichnis mit einem '/' deklariert habe. Dies habe ich erst im Verlauf der Arbeit gesehen. Zur Problemlösung habe ich ein Leerzeichen vor jedem commit gesetzt.
- Wenn das Projekt auf Responsive-Verhalten via Developer Tools von Chrome untersucht wird, muss zwingend im Head der master.blade.php folgender Code entfernt werden: "width=device-width"  
    Ansonsten geht der Browser immer von der Breite des Desktops aus.

### Anmerkungen zur Umsetzung
- Carousel: die Vorschau vom nächsten/letzten Bild: dass bei hover am Rand das nächste Bild eingeblendet wird wurde weggelassen, weil es ohne definierbaren Aufwand nicht zu Umsetzen ist. Die Pfeile rechts und links wurden permanent eingeblendet, so kann sich der Benutzer besser zurechtfinden.
- Padding/Margin können teils um wenige Pixel abweichen. Es wurde dabei zwingend beachtet, dass das Design UX/UI optimiert ist und keine merkbaren optischen Unterschiede zum Styleguide ersichtlich sind.
- fehlende CSS Transitions im Styleguide wurden nach eigenem Ermessen umgesetzt.
- Filter-Buttons auf Startseite wurden dunkler gestaltet, wenn sie geklickt werden. So hat der User ein Gefühl dafür, wenn er geklickt hat.
- Die Ansichten im Styleguide stimmen nicht immer genau mit den technischen Pixelangaben im Styleguide überein. Hier bin ich von den Pixelmassen aus gegangen. z.B. Carousel (Slider unterhalb von Bild), Styleguide S.40
- Social Media muss gemäss nachträglicher Aussage von Rolf nicht umgesetzt werden.
- Funktionalität Video-/Audioplayer wurde nicht umgesetzt, da keine Vorgabe vorhanden war, ob die Datei eingebettet wird, über eine URL , oder per Hoster (z.B. Youtube) geladen wird.
- kleinere Bilder an Mobile werden nicht ausgeliefert - aus Zeitgründen
- Die Bilder wurden auf die maximale verwendete Grösse reduziert und für das Web optimiert abgespeichert. Photoshop: JPG, sehr hohe Qualität
- "mehr anzeigen"-Buttons wurden gemäss Screendesign umgesetzt, auch wenn keine Funktion dafür definiert wurde. Dies, weil nicht definiert ist, welche eingeblendet werden müssen.




