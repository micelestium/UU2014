<article id="post-<?php the_ID(); ?>" class="row frontpage-news-item" <?php post_class('clearfix'); ?> role="article">
		<a href="<?php the_permalink(); ?>">
		<div class="col-sm-3 col-xs-4">
			<div class="archive-thumbnail"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('uu-thumbnail', array( 'class' => 'img-responsive' )); } ?></div>
		</div>

		<div class="col-sm-9 col-xs-8">

						<header class="article-header">
							<?php if(get_field('uu_options_news_show_pubdate', 'option')) { ?>
							<div class="date"><?php the_date('d F Y'); ?></div>	
							<?php } ?>
							<h1 class="entry-header"><?php the_title(); ?></h1>

						</header>

						<section class="entry-content clearfix">
							<p><?php uu_excerpt('160'); ?></p>
						</section>

			</div>
			</a>
</article>