<div class="col-sm-6">
					<?php if(get_field('uu_options_alternative_title_news', 'option')) { $news_title = get_field('uu_options_alternative_title_news', 'option'); } else { $news_title = __('News', 'uu2014'); } ?>

					<h2><?php echo $news_title; ?></h2>
					<?php 

						$newsamount = get_field('uu_options_news_amount', 'option');
						$newscats = get_field('uu_options_news_frontpage_cat', 'option');
						if ($newscats) { 
							$terms = implode(',', $newscats);	
						} else {
							$terms='news';
						}
					
						$args = array(
							'post_type' => 'post',
							'pagination'    => true,
							'posts_per_page' => $newsamount,
							'cat' => $terms,
							'ignore_sticky_posts'    => false,

						);
the_field('uu_options_alternative_title_news');
					$newsquery = new WP_Query( $args );
					if ( $newsquery->have_posts() ) {
							while ( $newsquery->have_posts() ) {
									$newsquery->the_post(); 
					
					get_template_part( 'parts/post-loop-frontpage'); ?> 
					

					<?php } ?>
						<a class="uu-rss-link" href="/?feed=rss&cat=<?php echo $terms; ?>"><span class="icononly rss"></span>RSS</a>
					<?php if(get_field('uu_options_alternative_read_more_title_news', 'option')) { $news_readmore_title = get_field('uu_options_alternative_read_more_title_news', 'option'); } else { $news_readmore_title = __('News', 'uu2014'); } ?>	
					<?php if(get_field('uu_options_frontpage_read_more_links', 'option')) { ?>
						<a class="button icon frontpage-read-more" href="/?cat=<?php echo $terms; ?>"><?php echo __('More', 'uu2014') . ' ' . $news_readmore_title; ?></a>		
					<?php 
							}

					} else { ?>

					<?php get_template_part('includes/template','error'); // WordPress template error message ?>

					<?php } ?>
					
				</div>

				<div class="col-sm-6">
				<?php if(get_field('uu_options_alternative_title_agenda', 'option')) { $agenda_title = get_field('uu_options_alternative_title_agenda', 'option'); } else { $agenda_title = __('Agenda', 'uu2014'); } ?>
					<h2><?php echo $agenda_title; ?></h2>

					<div class="agenda-archive">
						<?php 
						
						$today = date('Ymd');
						$agendacats = get_field('uu_options_agenda_frontpage_cat', 'option');
						if ($agendacats) { 
							$agendaterms = implode(',', $agendacats);	
						} else {
							$agendaterms = 'agenda';
						}
					
						$agenda_amount = get_field('uu_options_agenda_amount', 'option');
						$args2 = array(
							'post_type'		=> 'post',
							'cat' => $agendaterms,
							'posts_per_page'	=> $agenda_amount,
							'meta_key'		=> 'uu_agenda_start_date',
							'meta_query' => array(
						        array(
						            'key' => 'uu_agenda_start_date',
						            'value' => $today,
						            'compare' => '>='
						        )
						    ),
							'orderby'		=> 'meta_value_num',
							'order'			=> 'ASC',
						);


						$agenda_query = new WP_Query( $args2 );

							if ( $agenda_query->have_posts() ) : ?>

								<?php while ($agenda_query->have_posts()) : $agenda_query->the_post(); ?>

									<?php get_template_part( 'parts/post-loop-agenda'); ?> 

								<?php endwhile; ?>

							<a class="uu-rss-link" href="/?feed=rss&cat=<?php echo $agendaterms; ?>"><span class="icononly rss"></span>RSS</a>		
							<?php if(get_field('uu_options_alternative_read_more_title_agenda', 'option')) { $agenda_readmore_title = get_field('uu_options_alternative_read_more_title_agenda', 'option'); } else { $agenda_readmore_title = __('Agenda', 'uu2014'); } ?>
							<?php if(get_field('uu_options_frontpage_read_more_links', 'option')) { ?>
								<?php if(get_field('uu_options_frontpage_read_more_links', 'option')) { ?>
								<a class="button icon frontpage-read-more" href="/?cat=<?php echo $agendaterms; ?>"><?php echo __('More', 'uu2014') . ' ' . $agenda_readmore_title; ?></a>		
								<?php } ?>	
							<?php } ?>	
							<?php else : ?>
							<div class="no-events">
								<?php _e('No upcoming events', 'uu2014') ?>
							</div>
							<?php endif; ?>
					</div>
				</div>