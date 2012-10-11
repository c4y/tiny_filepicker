Tiny_Filepicker
===============

Diese Erweiterung für Contao ersetzt die hässliche Liste im TinyMCE durch den Contao-Filebrowser inkl. der dazugehörigen Rechte.
Für die notwendige Anpassung der TinyMCE - Konfiguration kann der [TinyMCE_Customizer](http://contao.org/de/extension-list/view/TinyMCE_Customizer.10000019.de.html) (aktuell nur für Version 2.11) installiert werden. Fertig.

Ohne den Customizer muss die bestehende TinyMCE - Konfiguration angepasst werden. Der file_browser_callback muss hinzugefügt werden sowie die Function filebrowser.

Die Zeile mit dem Parameter "external_image_list_url" kann bei Bedarf gelöscht werden. Bei mehreren tausend Dateien bremst die Liste nur das System aus.

Eine Muster TinyMCE.php liegt im Ordner example.