<script type="text/javascript">
  var page = <?php echo json_encode($post->post_name); ?>;
</script>

<?php get_header(); ?>

<?php the_post(); the_content();?>

<?php get_footer(); ?>
