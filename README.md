# Projet Annonces Web Costa Soirat (PAWCS)

Projet Technologies du Web dans le cadre de la formation BCD réalisé par Remy Costa et Nicolas Soirat.

## INSTALL 

Il faut veiller à ce que le pull de ce repo soit fait dans le localhost de la machine puis dans le chemin suivant : 
```
Cours/TechnoWeb/PROJET/
```
De sorte à ce que l'url dans le navigateur soit : 
```
localhost/Cours/TechnoWeb/PROJET/pawcs
```

Pour la base de données, il faut créer une DATABASE nommée 'nedss' dans laquelle les TABLES seront insérées.
En connexion root : 
```
CREATE DATABASE nedss;
USE nedss;
```


Normalement, le fichier bdd.php a été modifiée pour pouvoir créer les tables d'annonces et de log une fois que la database nedss est selectionnée.    
Il est possible alors d'utiliser les fichiers init.php et reset.php pour respectivement initialiser la base de données ou la supprimer. 


Ainsi on obtient une base de données 'nedss.annonces' et 'nedss.log' (cf script bdd.php pour les syntaxes).


**Bonne navigation !**

