<?php get_header();?>
<div class="row">

        <div class="col-sm-8 blog-main">
<?php if (have_posts()):?>
  <?php while (have_posts()):the_post();?>
<div class="blog-posts">
            <h2 class="blog-post-title">
<a href="<?php the_permalink();?>" >
<?php the_title();?></h2>
             </a>
            <p class="blog-post-meta"><?php the_time('F j, Y g:i a');
?><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>">
<?php the_author();?></a></p>
<?php if (has_post_thumbnail()):?>
<div class="post-thumb">


<?php the_post_thumbnail();?>
</div>
<?php endif;?>

<?php the_excerpt();?>
</div><!-- /.blog-post -->
<?php endwhile;?>
<?php  else :?>
<p><?php __('no posts found');?></p>
<?PHP endif;?>
</div><!-- /.blog-main -->



<?php get_footer();?>