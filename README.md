Contao Advanced Classes
======================

Das Modul erweitert die CSS-Klassen der Contao Elemente durch selbst definierbare Sets an CSS-Klassen. Redakteure und Admins können über Select-Felder schnell auf vordefinierte CSS-Klassen zugreifen.

Über unseren Konfigurator (noch in der Entwicklung) lassen sich die Sets auf einfache Weise an eure Anforderungen anpassen.

Für Bootstrap wird bereits ein vordefiniertes Set für Spaltenbreite, Spalten-Offset, Reihenfolge (Pull/Push) und Sichtbarkeit mitgeliefert.

Für Contao 4 nutze bitte unser Bundle unter https://github.com/Contao-DD/advanced-classes-bundle oder den Contao Manager.

About
-----

Extend the css classes of Contao elements.

**Supported Entities**
headline, text, list, table, accordion, slider, code, markdown, hyperlink, toplink, image, gallery, player, youtube, download, downloads, teaser, form, module 

For Contao 4, please use our bundle at https://github.com/Contao-DD/advanced-classes-bundle or the Contao Manager.

Screenshot
-----------

![Setting classes for bootstrap](http://pdir.de/contao-dd/advanced-classes-screenshot1-contao3.png)
![Local settings](http://pdir.de/contao-dd/advanced-classes-screenshot2-contao3.png)


System requirements
-------------------

* [Contao](https://github.com/contao/core) 3.2.16 - 3.x

Installation & Configuration
----------------------------

* Extract the archive on your server
* Update your database
* Select CSS Class Set
* Set the extended class of every element you wish


See this Extension in the Contao Extension-Repository
---------------

https://contao.org/de/extension-list/view/contao-advanced-classes.html


License
---------------
LGPL-3.0+


ToDo
---------------
* add other sets


History
---------------
v0.4.0
* new feature: default value for column widths
* new feature: disable module CSS
* add bootstrap 4 beta set
* update bootstrap 4 alpha set

v0.3.0
* add 5 column layout in backend
* add bootstrap 4 alpha set

v0.2.1
* bugfix fixes #2

before
* add basic elements
* add select option for sets in default settings 
* add great form to simple add bootstrap classes (reusable for other frameworks!!!) :) 
* add active/inactive option for module to local config section
