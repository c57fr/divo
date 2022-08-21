# Consignes

**Tout doit être fait en script PHP avec PDO**

## Structure

Les différents fichiers interagissant avec la structure SQL
doit être dans un fichier `migrations.php`

Les requêtes SQL interagissant avec une table doit être dans un fichier
le concernant. Par exemple, si l'on récupère les utilisateurs de la table
`users`, le traitement doit être dans un fichier `models/users.php`.

## Introduction

Nous avons des utilisateurs qui peuvent créer des commentaires uniquement
s'ils sont associés aux permissions qui les autorisent à poster des commentaires.

Les commentaires ont un texte et une date.

Les utilisateurs ont un nom, un prénom et une adresse email unique.

Les permissions ont un texte et un code unique.


## Étapes

* Modéliser la structure de la base de données
* Créer la base et les tables
* Peupler avec des fausses données ces tables
* Coder

## Codes

* Avec un `select` en HTML, on peut choisir la table à afficher
* Lorsque les utilisateurs sont affichés, on peut voir tous les commentaires associés
* On peut trier les commentaires par date
* On peut voir toutes les permissions d'un utilisateur
