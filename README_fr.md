## English Readme file available : https://github.com/chkpr/check_it/blob/main/README.md

# CheckIt : application de To Do List

CheckIt est un gestionnaire de listes de choses à faire qui permet de créer, modifier et supprimer des listes, d'en marquer les items comme faits ou restant à faire et d'organiser et filtrer les listes par catégorie.
Ce projet a été réalisé dans le cadre de la formation Graduate Développeur fullstack chez Studi (https://www.studi.com/fr/formation/developpement-web/graduate-developpeur-web-full-stack)

## Technologies

- PHP 8.1
- MySQL 5.7
- Bootstrap 5.3
- Xampp
- VSCode

## Déploiement local

### Etape 1 : importer la base de données

Une fois le repository cloné et après avoir démarré Xampp et PHP, importer la base de données du projet, soit via l'interface de PHPMyAdmin, soit depuis le terminal :

```
mysql -u nomdutilisateur -pmotdepasse check_it < check_it.sql
```

En cas d'erreur "the < operator is reserved for future use" sous Windows, utiliser plutôt le code suivant pour importer la base de données :

```
Get-Content check_it.sql | mysql -u nomdutilisateur -pmotdepasse check_it
```

### Etape 2 : Connecter la base de données au projet

Créer un fichier pdo.php dans le dossier assets/lib avec le code suivant, en remplaçant "root" par le nom d'utilisateur du gestionnaire de base de données et " " par son mot de passe :

```
<?php
try
{
$pdo = new PDO("mysql:dbname=check_it;host=localhost;charset=utf8mb4", "root", "");
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
?>
```

### Etape 3 : Tester le projet

Ce projet est un projet de formation qui n'a pas vocation à être utilisé dans un autre cadre. Il est tout de même possible de tester son fonctionnement en créant un nouvel utilisateur ou en utilisant les identifiants de l'utilisateur test proposés pour se connecter :

###### login : user@user.com

###### mot de passe : password

#### Pour créer un nouvel utilisateur :

##### 1. Connexion à la base de données:

```
mysql -u nomdutilisateur -pmotdepasse
```

##### 2. Insertion de l'utilisateur en bdd :

```
INSERT INTO user (nickname, email, password) VALUES ('nomdelutilisateur', 'emaildelutilisateur', 'motdepassedelutilisateur');
```

ou utiliser PHPMyAdmin pour faire l'insertion.

##### 3. Hashage du mot de passe :

Utiliser password_hash() pour hasher le mot de passe (https://www.php.net/manual/en/function.password-hash.php) :

1. Créer un fichier nommé hash.php dans le répertoire racine du projet

2. Coller le code suivant dans le fichier hash.php:

```
<?php
echo password_hash("motdepassedelutilisateur", PASSWORD_DEFAULT);
?>

```

3. Ouvrir le fichier hash.php dans le navigateur : une chaîne de caractères commençant par le symbole "$" est affichée. Copier cette chaîne de caractères pour l'insérer en base de données en suivant les instructions de la prochaine étape.

##### 4. Insertion du mot de passe hashé en base de données :

```
UPDATE check_it
SET password = 'hashdumotdepasse"
```

(ou utiliser PHPMyAdmin)

##### 5. Supprimer le fichier hash.php :

Il n'est plus nécessaire et ne doit pas être conservé dans le répertoire du projet.

## Fonctionnalités en cours d'ajout

- Ajout de catégories pour classer les listes
- Création de compte utilisateur
