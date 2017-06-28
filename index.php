<?php get_header(); ?>
<div class="divider"></div>
<div class="slider">
	<div class="social">
		<div class="fa fa-facebook-square"></div>
		<div class="fa fa-youtube"></div>
		<div class="fa fa-twitter"></div>
		<div class="fa fa-instagram"></div>
	</div>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	  	<?php
			$args = array('post_type'=>'slider', 'showposts'=>-1);
			$my_slider = get_posts( $args );
			$count = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
		 ?>
	    	<li data-target="#carousel-example-generic" data-slide-to="<?php echo $count; ?>" <?php if($count == 0): ?> class="active"<?php endif; ?>></li>
		<?php
			$count ++ ;
	    	endforeach;
	    	endif;
	     ?>

	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<?php
			$cont = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
		 ?>
		    <div class="item <?php if($cont == 0) echo "active"; ?>">
		      <div class="slider-overlay"></div>
		      <?php the_post_thumbnail('full'); ?>
		      <div class="carousel-caption">
				<h1 style="color:<?php the_field('cor_do_texto'); ?>"><?php the_field('texto'); ?></h1>

		      </div>
		    </div>
	    <?php
	    	$cont ++ ;
	    	endforeach;
	    	endif;
	     ?>

	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>

<div class="destaques">
	<div class="container">
		<div class="row">
			<?php
			$args = array('post_type'=>'destaques', 'showposts'=>3);
			$my_destaque = get_posts( $args );
			if($my_slider) : foreach($my_destaque as $post) : setup_postdata( $post );
		 	?>
			<div class="col-md-4 col-lg-4">
				<div class="card" style="background-color:<?php the_field('cor_de_fundo'); ?>">
				<div class="card-header">
					<div class="card-image">
					<?php if(has_post_thumbnail()){
						the_post_thumbnail('small');					
					}  ?>
					</div>							
					<div class="fa <?php the_field('icone'); ?>" style="color:<?php the_field('cor_do_icone'); ?>"></div>	
				</div>
				<div class="card-content">
					<h3 style="color:<?php the_field('cor_do_texto'); ?>">
					<?php the_title(); ?>						
					</h3>
					<span style="color:<?php the_field('cor_do_texto'); ?>"><?php the_excerpt(); ?></span>
				</div>				
			</div>	
			</div>
			<?php		    	
		    	endforeach;
		    	endif;
	     	?>
		</div>
	</div>
</div>



<?php get_footer(); ?>
