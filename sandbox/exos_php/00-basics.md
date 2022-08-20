# Circumstances

## Init

Créer une variable `$age`, `$name`, `$isMale` contenant respectivement l'âge de la personne
son nom et si c'est un homme.

Afficher si la personne est majeure, son nom ainsi que si c'est un homme.

Par exemple :

`Caroline est une femme majeure`
`Eric est un homme mineur`

## Tableau

Créer un tableau **associatif** avec en clé la magnitude et en valeur la description :

Magnitude   |   Phrase
------      |    ---
1           |   Micro-séisme impossible à ressentir.
2           |   Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.
3           |   Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.
4           |   Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.
5           |   Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.
6           |   Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.
7           |   Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.
8           |   Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.
9           |   Séisme capable de tout détruire sur une très vaste zone.  

Boucler sur tous les éléments afin d'afficher toutes les valeurs possibles.

A l'aide de l'instruction `if/ else`, gérer tous les cas.
A l'aide de l'instruction `switch`, gérer tous les cas.
A l'aide de l'instruction `match`, gérer tous les cas. (si php>8.0)

## Ternary

Ecrire de façon détaillée cette instruction :

```php
echo ($job === 'webmaster')?'Je crée des sites':'Je ne crée pas de site';
```

Ecrire de façon courte cette instruction :

```php
if ($zip_code === 21000) {
    echo "Je suis Dijonnais";
} else {
    echo "Je ne suis pas Dijonnais";
}
```

## Loop

Créer une variable et l'initialiser à 0.  

Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer
---
Créer deux variables.
Initialiser la première à 0 et la deuxième avec un nombre aléatoire compris en 1 et 100.  
Tant que la première variable n'est pas supérieur à 20 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- incrementer la première variable
---
Créer deux variables.
Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas inférieur ou égale à 10 :

- multiplier la première variable avec la deuxième
- afficher le résultat
- décrémenter la première variable
--- 
Créer une variable et l'initialiser à 1.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur
---

En allant de 1 à 15 avec un pas de 1, afficher le message **On y arrive presque**.

---

En allant de 20 à 0 avec un pas de 1, afficher le message **C'est presque bon**.

---

En allant de 1 à 100 avec un pas de 15, afficher le message **On tient le bon bout**.

---

En allant de 200 à 0 avec un pas de 12, afficher le message **Enfin !!!!**.
