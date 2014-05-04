<?php get_header(); ?>

<div id="page">
    <div class="container">
        <div class="content">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>    
                <div class="post">
                    <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    <div class="image"><?php the_post_thumbnail(); ?></div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
             <!-- KOMENTARZE -->
        </div>
    </div>
</div>

<?php get_footer(); ?>