# module3-php


dev command: 
php -S localhost:8888 -t public



algo de cryptage: Bcrypt

si volonté de crypter depuis le projet: password_hash()

on se protege des injections sql en préparant la requete sql. 

on doit empecher les requetes sql d'acceuillir des variables, les utilisateurs pourraient utiliser la faille pour envoyer leurs propres commandes sql.

XSS -> htmlspecialchar() empeche l'injection de html ou javascript via les inputs 