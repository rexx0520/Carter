<?php get_header(); ?>
	<div id="content" class="ts narrow container" style="padding-top: 20px;"><div class="ts stackable grid">
		<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
		<div class="twelve wide column">
			
			<div class="ts vertically very padded left aligned slate post">
				<div class="image">
					<?php if ( has_post_thumbnail() ) { ?>  
						<?php the_post_thumbnail(); ?>  
					<?php } else {?>  
						<script src="//gnehs.github.io/RandomPic/randompicture.js"></script>  
					<?php } ?> 
				</div>
				<span class="header"><?php the_title(); ?></span>
				<span class="description"><?php the_time('Y/n/j') ?> 
										  <?php comments_popup_link('還沒有人留言', '1 則留言', '% 則留言', '', '已關閉留言'); ?>
										  <?php edit_post_link('編輯', ''); ?></span>
			</div>
			
			<div class="ts hidden divider"></div>
			
			<post>
				<?php the_content(); ?>
			</post>

			<div class="ts clearing divider"></div>

    		<p>分享這篇文章</p>
    		<a class="ts info large icon button" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>"><i class="icon facebook f"></i></a>
    		<a class="ts info large icon button" href="https://telegram.me/share/url?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="icon telegram"></i></a>
    		<a class="ts info large icon button" href="https://www.tumblr.com/widgets/share/tool?shareSource=legacy&canonicalUrl=&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><i class="icon tumblr"></i></a>
    		<a class="ts info large icon button" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>"><i class="icon twitter"></i></a>
    		<a class="ts info large icon button" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="icon google plus"></i></a>
			
			<div class="ts clearing divider"></div>

			<?php comments_template(); ?>

			<div class="ts clearing divider"></div>
			
		</div>
		<?php endif; ?>
		
		<div class="four wide column">
			<?php get_sidebar(); ?>
		</div>
	</div></div>
<?php get_footer(); ?>