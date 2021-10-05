# Dojo PHP make Menu

## Instructions

1. Dans le fichier `public/script.php`, écrire une fonction `makeMenu()` qui accepte deux paramètres :
- un tableau multi-dimensionnel contenant des noms de pages associés à leurs fichiers 
(ex : [["name" => "Home", "file" => "/index.php"], ["name" => "About us", "file" => "/about.php"]])
- une chaîne de caractères (vide par défaut)
2. La fonction doit retourner le code HTML d'une liste &lt;ul&gt; contenant chaque élement du tableau inscrits dans une balise &lt;a&gt; dont l'attribut href pointera vers le fichier. Le texte du lien affichera le nom. 
3. Si le champ `file` d'un des éléments de la liste correspond à la chaîne passée en deuxième paramètre de la fonction, alors ajouter la classe css "active" au lien &lt;a&gt;.

## Test navigateur

 `php -S localhost:8000 -t public`

## Test PHPUnit
1. `composer install`
2. `./vendor/bin/phpunit tests`