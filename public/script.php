<?php

// ## Instructions

// 1. Dans le fichier `public/script.php`, écrire une fonction `makeMenu()` qui accepte deux paramètres :
// - un tableau multi-dimensionnel contenant des noms de pages associés à leurs fichiers
// (ex : [["name" => "Home", "file" => "/index.php"], ["name" => "About us", "file" => "/about.php"]])
// - une chaîne de caractères (vide par défaut)
// 2. La fonction doit retourner le code HTML d'une liste <ul> contenant chaque élement du tableau inscrits dans une balise <a> dont l'attribut href pointera vers le fichier. Le texte du lien affichera le nom.
// 3. Si le champ `file` d'un des éléments de la liste correspond à la chaîne passée en deuxième paramètre de la fonction, alors ajouter la classe css "active" au lien <a>.

function makeMenu(array $pages, string $current = "")
{
    $html = "<ul>";
    foreach ($pages as $page) {
        $html .= "<li><a";
        if ($current === $page["file"]) {
            $html .= " class='active'";
        }
        //peut aussi s'écrire en expression ternaire
        //$html .= $current === $page["file"] ? " class='active'" : "";
        
        $html .= " href='" . $page["file"] . "'>" . $page["name"] . "</a></li>";
    }
    $html .= "</ul>";
    return $html;
}