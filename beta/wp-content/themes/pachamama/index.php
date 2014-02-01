<?php /* Template Name: Home */ get_header(); ?>

<div id="blog" class="the-page">

  <header>
    <div class="wrapper">
      <h1>WY Blog</h1>
    </div>
  </header>

  <section id="content">
    <div class="wrapper">

      <?php while ( have_posts() ) : the_post(); ?>
        <div class="post">
          <h2><?php the_title(); ?></h2>
          <div class="post-meta">
            <?php the_date(); ?>
          </div>
          <div class="post-content">
            <?php the_content(); ?>
          </div>
          <div class="post-footer">
          </div>
        </div>
      <?php endwhile; ?>      

    </div>
  </section>

</div>
      
<?php get_footer(); ?>
