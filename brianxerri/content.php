<article id="post-<?php the_ID(); ?>" class="clearfix" <?php post_class('standard'); ?>>
	
	<div class="col-xs-1 col-sm-1">
		
		<div class="date-field">
		
			<p><?php the_time('M'); ?></p>
			<p><?php the_time('d'); ?></p>
		</div> <!-- end date-field -->
		
		<div class="date-field">
		
			<i class="fa fa-pencil"></i>

		</div> <!-- end date-field -->

	</div>
	
	<div class="post-single col-xs-11 col-sm-11">
		
		<figure>
			<?php if(has_post_thumbnail()) {
				the_post_thumbnail('image');
			} ?>
		</figure>

		<h1 class="uppercase-class"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

		<ul class="content-detail">
			
			<li class="uppercase-class"><?php _e('Categories','brianxerri'); ?>: <span><?php the_category(' | '); ?></span></li>

			<?php edit_post_link(__('Edit','brianxerri'),'<li class="edit-class">', '</li>' ); ?>

			<?php if(comments_open()) { ?>
			<li class="comment-span"><?php comments_number(__('No Comments', 'brianxerri'),__('1 Comment', 'brianxerri'),__('% Comments', 'brianxerri')); ?></li>
			<?php } ?>

		</ul>

		<div class="article-p"><?php the_excerpt(); ?></div>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'brianxerri' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		<a href="<?php the_permalink(); ?>" class="btn"><?php _e('Read More','brianxerri'); ?></a>
		
	</div> <!-- end post-single -->

</article>