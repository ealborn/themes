<?php get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

      <div class="row">
        <div class="col">
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </div>
      </div>

        <?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
