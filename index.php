<?php get_header(); ?>

<div id="page">
    <div class="container">
        <div class="content">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>    
                <div class="post">
                    <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    <div class="image"><?php the_post_thumbnail(); ?></div>
                    <div class="bottom">
                        <i class="fa fa-comment"></i><a href="<?php the_permalink(); ?>">Dodaj komentarz</a>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
             <div class="pagination">              
                <div class="nav-previous alignleft"><?php next_posts_link( 'Starsze posty' ); ?></div>
                <div class="nav-next alignright"><?php previous_posts_link( 'Nowe posty' ); ?></div>
             </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>