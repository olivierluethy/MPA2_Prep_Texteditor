# MPA 2 — Vorarbeit Texteditor (PHP MVC)

Vorarbeit für das Modul MPA 2: einen **WYSIWYG-Texteditor** in ein PHP-Projekt einbinden
und dokumentieren. Dieses Repository zeigt die Auswahl und Integration von **CKEditor** in
einer kleinen PHP-/MySQL-Blog-Anwendung — Artikel werden mit Rich-Text erfasst, in einer
Datenbank gespeichert und wieder angezeigt.

Die vollständige Dokumentation liegt in
`MPA 2 Vorarbeit Texteditor mit PHP MVC.docx`.

## Funktionen

- Artikel im Rich-Text-Editor (CKEditor) erfassen: Formatierung, Listen, Links usw.
- Beiträge in einer MySQL-Datenbank speichern (`process.php`)
- Übersicht aller Artikel (`index.php`) und Detailansicht (`details.php`)
- Erfassungsmaske / Dashboard zum Posten neuer Artikel (`dashboard.php`)

## Technik

- **PHP** (mysqli) mit einer schlanken, MVC-orientierten Struktur
- **MySQL** als Datenbank
- **CKEditor 4** als eingebundener WYSIWYG-Editor (`ckeditor/`)
- HTML/CSS (`css/style.css`)

## Aufbau

| Datei/Ordner | Zweck |
|--------------|-------|
| `index.php` | Übersicht aller Blog-Artikel |
| `dashboard.php` | Formular mit CKEditor zum Erstellen eines Artikels |
| `process.php` | Nimmt das Formular entgegen und speichert den Artikel |
| `details.php` | Einzelansicht eines Artikels |
| `config/db_connect.php` | Datenbank-Verbindung |
| `texteditor.sql` | Datenbankschema (Tabelle `blog`) |
| `ckeditor/` | CKEditor-Build |

## Einrichten & Starten

1. Repository in das Web-Root eines PHP-Servers legen (z. B. XAMPP `htdocs/`).
2. In MySQL eine Datenbank `texteditor` anlegen und `texteditor.sql` importieren.
3. Bei Bedarf die Zugangsdaten in `config/db_connect.php` anpassen
   (Standard: `localhost`, Benutzer `root`, ohne Passwort).
4. Im Browser `index.php` öffnen (z. B. `http://localhost/MPA2_Prep_Texteditor/`).
