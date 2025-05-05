##### Cette documentation est en cours de rédaction.

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

Une fois le repository cloné et après avoir démarré Xampp et PHP, importer la base de données du projet, soit via l'interface de PHPMyadmin, soit depuis le terminal :

```
mysql -u nomdutilisateur -pmotdepasse check_it < check_it.sql
```

en cas d'erreur 'the < operator is reserved for future use' sous Windows :

```
Get-Content check_it.sql | mysql -u nomdutilisateur -pmotdepasse check_it
```

### Etape 3 : Connecter la base de données au projet

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

### Etape 4 : Tester le projet

Ce projet est un projet de formation qui n'a pas vocation à être utilisé dans un autre cadre. Il est tout de même possible de tester son fonctionnement en créant un nouvel utilisateur ou en utilisant les identifiants de l'utilisateur test proposés pour se connecter :
login : user@user.com
mot de passe : password

#### Pour créer un nouvel utilisateur :

##### 1. Connexion à la base de données:

```
mysql -u nomdutilisateur -pmotdepasse
```

##### 2. Insertion de l'utilisateur en bdd :

```
INSERT INTO user (nickname, email, password) VALUES ('nomdelutilisateur', 'emaildelutilisateur', 'motdepassedelutilisateur');
```

ou utiliser PHPMyAdmin.

##### 3. Hashage du mot de passe :

Utiliser password_hash() pour hasher le mot de passe (https://www.php.net/manual/en/function.password-hash.php)

##### 4. Insertion du mot de passe en base de données :

```
UPDATE check_it
SET password = 'hashdumotdepasse"
```

(ou utiliser PHPMyAdmin)

## Fonctionnalités en cours d'ajout

- Ajout de catégories pour classer les listes
- Création de compte utilisateur
