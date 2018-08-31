- die mobile und desktop sizes wurden mit dem Chrome-PlugIn Mobile/Responsive Web Design Tester getestet, weil das Chrome Dev Tool Bugs aufzeigt
- bei den commits wurde manchmal der pfad gepostet. dies habe ich erst im nachhinein gesehen und ein leerzeichen vor jedem commit gesetzt.
- Wenn das Projekt auf Responsive-Verhalten via Developter Tools von Chrome untersucht wird, muss zwingend im Head der master.blade.php folgender Code im Head entfernt werden. "width=device-width"
- Freeze Page bei offener Menuübersicht funktioniert nur, wenn Responsive Web Design Tester deaktiviert ist.

Lizenz
- Fullscreen von Slider wurde mit fancbox umgesetzt. https://fancyapps.com/fancybox/3/

wurde unterschiedlich umgesetzt:
- carousel: die Vorschau vom nächsten/letzten Bild, bei hover am Rand wurde weggelassen, weil es ohne überschaulichen Aufwand nicht zu Umsetzen ist. Die Pfeile rechts und links wurden permanent eingeblendet, so kann sich der Benutzer besser zurechtfinden.
- Padding/Margin können teilweils um wenige px abweichen. Es wurde dabei zwingend beachtet, dass das Design UX/UI optimiert ist und keine optischen Unterschiede zum Styleguide ersichtlich sind.
- CSS Transitions wurden nach eigenem Ermessen umgesetzt
- Filter-Buttons auf Startseite wurden dunkler gestaltet, wenn sie geklickt werden
-jquery muss in head eingefügt werden, sonst funktioniert nicht


• Die Ansichten im Styleguide stimmen nicht immer genau mit den technischen Pixelangaben überein. Hier bin ich von den Pixelmassen aus gegangen. z.B. Carousel (Slider unterhalb von Bild), Styleguide S.40
• Navigation: Bei der Mobileversion sind die 2 Kästchen rechts um ca. 2px kleiner, da ich so mit der col-4 arbeiten konnte
• Bei der schwarzen Menuübersicht wurde bei Mobile der Login weggelassen, da er bei Desktop nicht dabei ist und für mich keinen Sinn ergibt
• Funktionalität Video-/Audioplayer wurde nicht umgesetzt, da keine Vorgabe vorhanden war, ob die Datei eingebettet wird, über eine URL , oder per Hoster (z.B. Youtube) geladen wird.
• Social Media muss gemäss nachträglicher Aussage von Rolf nicht umgesetzt werden





