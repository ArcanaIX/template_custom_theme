<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php
        if (have_posts()) {
            //tant qu'il y a des articles
            while (have_posts()) {
                //on affiche l'article
                the_post();
                the_title('<h3>', '</h3>');
                the_content();
            }
        }
        ?>
    </div>
</div>
<?php get_footer(); ?>