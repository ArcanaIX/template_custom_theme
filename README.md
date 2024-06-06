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
        wp_footer();
    </body>
</html>
```

### front-page.php

front-page.php n'est pas obligatoire il ne sert que si la page que vous avez defini comme accueil est differente des autres.  


### function.php

function.php sert a contenir toute vos fonction Wordpress. Si vous avez recuperer le git ci-dessus plusieur fonction de base sont déjà présente :

- L'appel du fichier style.css, de bootstrap et sont JS et de font-awesome
- L'activation de l'ajout du logo
- L'ajout de deux emplacement de menu (footer et principal)
- L'ajout du support d'image à la une (thumbnails)
