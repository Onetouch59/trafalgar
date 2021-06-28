<?php 
include "includes/header.php"; ?>






<p>cette page est page.php (donc toutes les pages qui ne sont ni la page d'accueil ni un article</p>

<?php if (have_posts()):while(have_posts()):the_post();?>



<h2><?php the_title(); ?></h2>


<?php the_post_thumbnail(); ?>

<p>publié par <?php the_author(); ?>, le <?php the_date();?></p>

<p><?php the_content() ?></p>




<?php endwhile; endif; ?>


<?php include "includes/footer.php" ?>