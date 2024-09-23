<div id="ce-post-item-<?php the_ID(); ?>" <?php echo wp_kses_post( $this->get_render_attribute_string( 'ce-post-item' ) ); ?> <?php echo wp_kses_post( $this->get_render_attribute_string( 'ce-post-item-' . get_the_ID() ) ); ?> >
	<article class="entry-podcast">
		<div class="entry-media">
			<figure class="entry-img">
				<?php the_post_thumbnail( $final_image_size ); ?>
	            <a href="<?php echo esc_url(get_permalink()) ?>" class="image-link"></a>
			</figure>
			<div class="entry-meta-single entry-meta-date">
				<span>
					<?php echo wp_kses_post(codeless_get_entry_meta_date()); ?>
						&nbsp;<?php if( $episode ){ echo esc_html( $episode ); } ?>
					</span>
		    </div>
		    <div class="entry-play">
		    	<span class="entry-icon">
		    		<?php echo wp_kses_post(codeless_get_podcast_shows_colored( get_the_ID(), 'podcast_shows', 'box3' ));  ?>	    			   
	    		</span>
		    	<a class="ce-play livecast-play livecast-play-<?php echo esc_attr(get_the_ID()) ?>" data-audio-id="<?php echo esc_attr(get_the_ID()) ?>" href="<?php the_permalink(); ?>">	    				    			
					<span class="lp-icon lp-play"></span>
				</a>
				<h3 class="entry-title">
		    		<a href="<?php the_permalink(); ?>" >
		    			<?php the_title(); ?>
					</a>
				</h3>
		    </div>
		</div>	   
	</article>
</div>