


# Tous les fichiers pour un theme custom Wordpress

Voici un p'tit git pour vous permettre de lancer un theme custom facilement le details de tout les fichiers est inscrit ici dans le README.md

## Liste des fichiers

- footer.php **OBLIGATOIRE**
- front-page.php
- functions.php **OBLIGATOIRE**
- header.php **OBLIGATOIRE**
- index.php **OBLIGATOIRE**
- page.php
- screenshot.png
- single.php
- style.css **OBLIGATOIRE**

---

### footer.php

footer.php sert comme sont nom l'indique, a contenir votre footer il doit **absolument** y avoir cette ligne de code avant la balise fermante de body :
```PHP
        <?php wp_footer(); ?>
    </body>
</html>
```
---

### front-page.php

front-page.php n'est pas obligatoire il ne sert que si la page que vous avez defini comme accueil est differente des autres.

---

### function.php

function.php sert a contenir toute vos fonction Wordpress. Si vous avez recuperer le git ci-dessus plusieur fonction de base sont déjà présente :

- L'appel du fichier style.css, de bootstrap et sont JS et de font-awesome
- L'activation de l'ajout du logo
- L'ajout de deux emplacement de menu (footer et principal)
- L'ajout du support d'image à la une (thumbnails)
---

### header.php

header.php sert a contenir votre header et votre navbar il doit y avoir cette ligne de code après l'ouverture de la balise body :
```PHP
<body>
    <?php wp_header();

    //Le reste de votre code
```

>Petit rappel :
>Pour afficher un menu vous pouvez appeler cette fonction en PHP :
```PHP
wp_nav_menu( $args );
```
>*Source : https://developer.wordpress.org/reference/functions/wp_nav_menu/*
---

### index.php

index.php sert a contenir le templates de tous les posts que vous publiez

>Petit rappel :
>Vous devez utiliser cette fonction pour afficher le contenue ajouter dans Gutemberg
``` PHP
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
	}
}
```
>*Source : https://codex.wordpress.org/The_Loop*
---


### screenshot.png

Le fichier screenshot.png est la miniature de votre thème Wordpress il faire 1200x900px pour fonctionner correctement (par pitier changer l'image sinon ça va leur faire tout drole)

---


### styles.css

Le fichier style.css contient tous le style et les informations de votre thème Wordpress comme le nom le créateur le site du créateur et tout plein de truc, modifier le pour votre cas

>Petit rappel :
>Le fichier style.css peut-être utiliser avec d'autre fichier style (pour tailwind css par exemple) il faudra les rajouter dans [function.php](#function.php)

# Et merde a vous pour l'eval :joy:

