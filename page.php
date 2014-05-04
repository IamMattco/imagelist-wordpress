<?php get_header(); ?>

<div id="page">
    <div class="container">
        <div class="content-page">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>    
                <div class="title"><?php the_title(); ?></div>
                <div class="text"><?php the_content(); ?></div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>