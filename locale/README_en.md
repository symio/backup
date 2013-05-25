# Translate strings in the application: #

The Loamok Backup application is translated into French and English.
Languages are managed using the technique Gnu 'GetText'.
Languages are managed in the 'locale' folder.

* Fr_FR.utf8: Directory for the French language strings.
* En_US.utf8: Directory for the English language strings.
* Backup.pot: Sample container chains.
* CompileLangs: Script for compiling languages files.
* Config-dist.conf: Example configuration file.
     copy this file to config.conf and customize it:
     ```$ Cp config-dist.conf config.conf```
* FileSourcesList: List of source files (used to extract strings and generate catalogs).
* PotBase.patch: Patch used in the contruction of catalogs.
* UpdateLangs: Script for catalogs generation.

The translation system is supplied running.
If you have a problem with untranslated string ; run both scripts (updateLangs and compileLangs)
```$. / UpdateLangs &&. / CompileLangs ```

##  How to translate strings in Loamok Backup application ? ##

* Once you have finished editing the files in the application.
* Run (into a shell) the updateLangs script:
    ```$ ./updateLangs```
* Translate the strings in the language files (use poedit it's easier)
*  Run the script 'compileLangs' (optional if you used poedit):
    ```$ ./compileLang```

##  How to add a language ? ##

* Add a language in the configuration files (eg with German (de_DE)).
* Create the tree relative to 'locale':
    ```$ mkdir -p de_DE/LC_MESSAGES```
* Then proceed as for adding strings: 
    * Run the script to import strings:
        ```$ ./updateLangs```
    * Translate strings in de_DE/LC_MESSAGES/default.po
    * Run the build script:
        ```$ ./compileLang```