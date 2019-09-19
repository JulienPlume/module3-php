# module3-php


dev command: 
php -S localhost:8888 -t public



algo de cryptage: Bcrypt

si volonté de crypter depuis le projet: password_hash()

on se protege des injections sql en préparant la requete sql. 

on doit empecher les requetes sql d'acceuillir des variables, les utilisateurs pourraient utiliser la faille pour envoyer leurs propres commandes sql.

XSS -> htmlspecialchar() empeche l'injection de html ou javascript via les inputs 




parler du workflow, des contraintes, demonstration du fonctionnement, présentation du code en partant de public / expliquer le router, c'est le FRONT CONTROLLER qui contient principalement le routeur grace à l'url qui permet d'appeler le bon controller. 
Presentation d'un des controllers ex: listarticlesController. explication ud manager, le role du controller est de retourner la vue à la fin. 
Il y a un manager par Model. Chaque manager à les requetes concernant les models.

Requetes préparées -> 