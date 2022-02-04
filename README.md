<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Exercices à réaliser :

- ACT-TT1 :* Réaliser une page web qui affichera un échiquier.
- ACT-TT2 :* Réaliser une commande qui prend en argument un chiffre n et retourne un tableau contenant une suite de
  Fibonacci de la longueur n.
- ACT-TT3 :* Réaliser une modélisation d'un candidat, d'une annonce et d'une candidature en utilisant l'orm Eloquent et
  créer un service qui liste toutes les candidatures par annonce.
- ACT-TT4 :* Réaliser une suite de test unitaire pour les 3 premiers exercices.

## Etapes

- Créer une base de données nommée "laravel"
- php artisan migrate
- php artisan db:seed
- php artisan serve

## Test

- php artisan test

## Explications

- L'échiquier
  http://127.0.0.1:8000/
  Un simple template blade, boucle for de 8 par 8 pour créer toutes les cas Alternance de couleurs en CSS

- Suite de Fibonacci:
  http://127.0.0.1:8000/fibonacci
  Au lieu d'une commande j'avais commencé à faire une page web avec un formulaire. Pour ne pas avoir fait ça pour rien
  j'ai conservé la page et ajouté une commande qui réutilise le même code:  
  -- php artisan command:fibonacci X

- Candidatures Création de quelques seeders pour avoir des données de test d'utilisateur et de candidatures. En terme de
  base de données j'ai simplifié au maximum et utilisé des chaines de caractères pour le sociétés, pays, villes... En
  réalité ce serait évidemment des ids, clés étrangères vers d'autres tables   
  Création d'un webservice http://127.0.0.1:8000/api/candidacy qui retourne toutes les offers et les candidatures associées s'il y en a.
  J'ai nommé "candidacy" plutôt qu' "application" pour éviter une confusion avec l'application elle même. On peut aussi
  interroger le webservice en lui passant une offre en particulier http://127.0.0.1:8000/api/candidacy/3
  
#Tests
 - J'ai testé la présence du tableau d'échequier et des premières et dernières cases
 - Pour fibonacci, que le tableau de sortie ait bien la taille attendue.
 - Pour les candidatures, qu'on ait bien un code 200, le titre du premier seed d'offre et que ce premier seed ait bien au moins une candidature associée
