<script type="text/javascript">
  var page = <?php echo json_encode($post->post_name); ?>;
</script>

<?php get_header(); ?>

<div id="home" class="the-page">

  <div id="brand">
    <div id="logo"></div>
    <h1>Willka Yachay</h1>
  </div>

  <nav>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
  </nav>

</div>

<?php get_footer(); ?>