<script type="text/javascript">
  var page = <?php echo json_encode($post->post_name); ?>;
</script>

<?php get_header(); ?>

<div id="<?php echo json_encode($post->post_name); ?>" class="the-page">
<?php the_post(); the_content();?>
</div>

<?php get_footer(); ?>
