# Blog- und Benutzerverwaltungssystem mit Laravel

![Projekt-Screenshot](https://github.com/ramazanozguven/15_Blog-und-Benutzerverwaltungssystem-mit-Laravel/blob/c7926d6bd2d5bd6e55095c0b8e4397d494132ae7/Screenschot%20des%20Projekts.png)

Dieses Projekt ist ein Blog- und Benutzerverwaltungssystem, das mit dem **Laravel PHP Framework** entwickelt wurde. Es bietet sowohl für Standardbenutzer als auch für Administratoren unterschiedliche Funktionen und Verwaltungsbereiche.  

## Hauptfunktionen

- **Benutzerverwaltung**  
  Benutzer können sich registrieren, anmelden, ihr Passwort zurücksetzen und ihr Profil aktualisieren.  
  Sicherheitsfunktionen wie E-Mail-Verifizierung und Passwort-Reset sind integriert.  

- **Rollenbasierte Autorisierung**  
  Standardbenutzer und Administratoren haben unterschiedliche Zugriffsrechte.  
  Benutzer können Beiträge ansehen, während Administratoren Beiträge erstellen, bearbeiten und löschen können.  

- **Blog-Beiträge**  
  Alle Beiträge sind auf der Startseite sichtbar.  
  Administratoren können Beiträge über das Admin-Panel verwalten.  

- **Kommentare (Commentify - Laravel Livewire Comments)**  
  Benutzer können direkt unter Beiträgen Kommentare verfassen.  
  Kommentare werden in Echtzeit mit **Laravel Livewire** verarbeitet, ohne dass die Seite neu geladen werden muss.  

- **Admin-Panel**  
  Ein spezieller Verwaltungsbereich für Administratoren mit Funktionen wie:  
  - Beitrag hinzufügen  
  - Beitrag bearbeiten  
  - Beitrag löschen  

- **Sicherheit**  
  Verwendung von Laravel-Sicherheitsfunktionen wie Authentifizierung, Autorisierung und CSRF-Schutz.  
  Admin-Routen sind mit Middleware abgesichert.  

- **Datei-Upload**  
  Beiträge können mit Bildern ergänzt werden.  
  Hochgeladene Dateien werden in einem definierten Verzeichnis gespeichert und mit dem Beitrag verknüpft.  

## Projektstruktur

- **Controllers** – Steuern Benutzer- und Admin-Aktionen  
- **web.php** – Enthält alle Routen für die Web-Oberfläche  
- **views** – Blade-Templates für Benutzer- und Admin-Seiten  
- **Post.php** – Model für Blog-Beiträge  
- **migrations** – Datenbankschemata für die Tabellen  

## Nutzungsszenario

1. Benutzer registriert sich und meldet sich an.  
2. Benutzer kann Beiträge auf der Startseite ansehen und Details öffnen.  
3. Benutzer kann Kommentare zu Beiträgen hinzufügen.  
4. Administratoren können im Admin-Panel Beiträge verwalten.  
5. Benutzer können ihr Profil aktualisieren oder ihr Konto löschen.  
