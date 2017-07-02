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
		      <div class="overlay"></div>
		      <?php the_post_thumbnail('full'); ?>
		      <div class="carousel-caption">
				<h1 style="color:<?php the_field('cor_do_texto'); ?>"><?php the_field('texto'); ?></h1>
				<hr>
				<p>Modelo incrivel de  ferrari enzo sensacional meu brother</p>			
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
				<div class="card">
				<div class="card-header" style="background-color:<?php the_field('cor_de_fundo'); ?>">
					<div class="card-image">
					<?php if(has_post_thumbnail()){
						the_post_thumbnail('small');
					}  ?>
					</div>
					<div class="fa <?php the_field('icone'); ?>" style="color:<?php the_field('cor_do_icone'); ?>"></div>
				</div>
				<div class="card-content" style="background-color:<?php the_field('cor_caixa_texto'); ?>">
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
<div class="bilingue parallax">
	<div class="container-fluid container-full-height">
		<div class="row">
			<div class="container">
				<div class="col-md-12 col-lg-12 title"><h1>Escola Bilíngue</h1></div>
				<div class="col-md-6 col-lg-6">
					<div class='embed-container'><iframe src='https://www.youtube.com/embed/LQETthOFSTQ' frameborder='0' allowfullscreen></iframe></div>
				</div>
				<div class="col-md-6 col-lg-6 texto-parallax"><p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime cupiditate quibusdam optio nobis at, quaerat accusamus unde ullam nam repellat nemo quas minus,
					dignissimos eligendi tenetur fuga itaque ea qui!</p>
				</div>
			</div>

		</div>
	</div>
</div>
<div class="container-fluid title-section">
	<div class="row">
			<h2><span>Esportes</span></h2>
	 </div>
	</div>
	<div class="escola-furacao parallax">
		<div class="container-fluid container-full-height">
			<div class="row">
				<div class="container">
					<div class="col-md-12 col-lg-12 title"><h1>Escola Furacão</h1></div>
					<div class="col-md-6 col-lg-6">
						<img src="<?php bloginfo('template_directory');?>/assets/images/escola_furacao.png ?>" alt="" class="img-responsive" style="margin: 0 auto">
					</div>
					<div class="col-md-6 col-lg-6 texto-parallax"><p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime cupiditate quibusdam optio nobis at, quaerat accusamus unde ullam nam repellat nemo quas minus,
						dignissimos eligendi tenetur fuga itaque ea qui!</p>
					</div>
				</div>

			</div>
		</div>

	</div>




<?php get_footer(); ?>
