---
layout: post
title:  "Typographie et espaces insécables"
author: "Vivien Leroy"
date:   2017-02-06 17:35:00
categories: typographie design
color: 2
---

La **typographie** est un sujet qu'on ne prend à mon goût pas assez au sérieux. Souvent on apprend quelques règles à l'école et on oublie tout en fin de compte et on ne respecte plus aucune des règles qu'on nous a inculqué voire pire on se met à écrire phonétiquement ou en raccourci, une ignominie à nul autre pareil.

Aujourd'hui j'ai publié un petit rapport de bug pour *Apple* à ce sujet et je me suis dit que ça ferait un bon micro article, on va donc parler des espaces, espaces insécables et espaces fines insécables (oui car le mot *espace* en typographie est féminin).

{%image /espace.jpg %}
## Espaces

**L'espace** c'est ce que tout le monde ou à peu près connaît. Le caractère qui permet de séparer les mots les uns des autres pour rendre une phrase intelligible.

**Sans espace** voilà le travail :

> Bonjourcommentçavat'arrivesàmelireoubien?

Rien que de voir la phrase me fait mal à la tête ಠ_ಠ…

Bref pas grand chose à dire sur ces espaces si ce n'est qu'avec c'est mieux. [#CaptainObvious](https://twitter.com/#captainobvious)

## Espaces insécables

**L'espace insécable** est un type d'espace qui se comporte comme un caractère **normal** c'est à dire qu'il ne servira pas de point de **césure** dans une phrase si le paragraphe est trop long pour s'afficher en entier. C'est très utile dans de nombreux cas.

Imaginons quelques exemples :

> 1 000 000 000

On comprend aisément l'utilité dans ce cas. En effet, si ce nombre se retrouve en fin de ligne sur une page on pourrait voir cela :

> bla bla bla 1  
> 000 000 000

Ce qui n'est vous en conviendrez pas très lisible. On retrouve aussi cet usage pour les abbréviations de titres comme **« M. »**, on préfère alors suivre l'abbréviation d'une espace insécable pour éviter que le titre ne se retrouve seul sur la page.

Liste non exaustive des usages des insécables :

- Nombre en chiffres avec unité (ex. 35 kilomètres)
- Numéro de jour suivi du mois (ex. 13 janvier)
- Expressions mathématiques (ex. 2 + 𝑥 = 122)
- Après les initiales des prénoms abbrégés (ex. S. Jobs)
- Après les initiales des autres prénoms (ex. Linus B. Torvalds)
- Abbréviations (ex. apr. J.C.)

### Comment insérer une espace insécable

Pour insérer une espace insécable sur ** macOS** rien de plus simple il suffit d'utiliser le raccourci suivant `⌥` + `Space`.

Pour **Windows**, on utilise un Alt Code : `Alt` + `0160 (au pavé numérique)` (`255` semble aussi fonctionner).

Pour **Linux**, le raccourci est `Compose` + `Space` + `Space`.

## Espaces fines insécables

Il existe une autre forme d'espace insécable qu'on appelle **l'espace fine insécable**. C'est une espace insécable plus étroite comme son nom le laisse entendre.

> [ ] Insécable  
> [ ] Fine insécable  
> [] Pas d'espace

Cette espace est utilisé dans des cas particuliers, en général avant les **signes de ponctuation double** comme le point d'exclamation ou d'interrogation (cas particuliers les `:` et `«  »` qui utilisent des espaces insécables simples).

Exemples :

> J'ai chaud !
> 
> As-tu envie de siroter des cocktails en terrasse ?

### Comment insérer une espace fine insécable

Sur **Windows**, il faut passer par la table de caractères pour le trouver.

Sur **Linux**, de même il n'est pas accessible directement 🙄…

Sur **macOS**, idem. La malédiction est présente. J'ai cependant un petit cadeau pour vous. Si vous voulez peser dans le typographie-jeu. J'ai créé avec un petit utilitaire qui s'appelle [Ukelele](http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=ukelele) une variante du clavier **Français** de macOS avec les espaces fines insécables accessibles via le raccourci : `⌥` + `⇧` + `Space`.

Vous pouvez le télécharger [ici](https://files.fantattitude.me/keyboard.zip).

## Que faire pour améliorer le support des espaces fines insécables ?

La solution la plus simple consiste à remonter le problème à l'auteur de votre système d'exploitation pour **Windows** et [**macOS**](http://www.openradar.me/radar?id=5053406326554624) (J'ai ouvert un bug auprés d'Apple vous pouvez le dupliquer pour appuyer la demande). 

Et pour **Linux** vous pouvez contribuer à modifier les logiciels de support de clavier pour ajouter un accès plus facile à un raccourci.


---

En espérant que cela vous aura motivé à utiliser des espaces plus jolies 💪.
