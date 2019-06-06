<!-- Template used for Front Page. Filename to match page. -->
<?php get_header(); ?>
  <main>
    <h1>Hi!</h1>
    <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
  </main>
<?php get_footer(); ?>