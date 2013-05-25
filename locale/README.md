# Traduire des chaînes dans l'application : #

L'application Loamok Backup est traduite en Français et en Anglais.
Les langues sont gérées grâce à la technique Gnu 'GetText'.
Les langues sont gérées dans le répertoire 'locale'.

* fr_FR.utf8 : Répertoire des chaînes pour la langue Française.
* en_US.utf8 : Répertoire des chaînes pour la langue Anglaise.
* backup.pot : Modèle de conteneur de chaînes.
* compileLangs : Script de compilation des fichiers de langues.
* config-dist.conf : Exemple de fichier de configuration.
    copiez ce fichier vers config.conf et personnalisez-le :
    ```$ cp config-dist.conf config.conf```
* fileSourcesList : Liste des fichiers sources (permet d'extraire les chaînes puis de générer les catalogues).
* potBase.patch : Patch utilisé dans la contruction des catalogues.
* updateLangs : Script de génération des catalogues.

Le système de traduction est livré fonctionnel.
Si vous avez un problème de chaîne non traduites lancez les deux scripts (updateLangs et compileLangs) :
```$ ./updateLangs && ./compileLangs```

## Comment traduire des chaînes dans l'application Loamok Backup ? ##

* Une fois que vous avez fini d'éditer les fichiers de l'application.
* Lancez (via un terminal) le script updateLangs : 
    ```$ ./updateLangs```
* Traduisez les chaînes dans les fichiers de langue (utilisez poedit c'est plus simple)
* Lancez le script 'compileLangs' (optionnel si vous avez utilisé poedit) :
    ```$ ./compileLang```

## Comment ajouter une langue ? ##

* Ajoutez une langue dans les fichiers de configuration (exemple avec l'allemand (de_DE)).
* Créez l'arborescence relative à 'locale' :
    ```$ mkdir -p de_DE/LC_MESSAGES```
* Puis procédez comme pour un ajout de chaînes : 
    * lancez le script d'import des chaînes :
        ```$ ./updateLangs```
    * Traduisez les chaînes dans de_DE/LC_MESSAGES/default.po
    * Lancez le script de compilation :
        ```$ ./compileLang```
