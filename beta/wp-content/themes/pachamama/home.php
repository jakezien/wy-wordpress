<?php get_header(); ?>

<div id="home">

  <div id="brand">
    <div id="logo"></div>
    <h1>Willka Yachay</h1>
  </div>

  <nav>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
  </nav>

</div>

<?php get_footer(); ?>